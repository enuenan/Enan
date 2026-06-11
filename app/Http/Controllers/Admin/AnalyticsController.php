<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MeShaon\RequestAnalytics\Models\RequestAnalytics;
use MeShaon\RequestAnalytics\Services\AnalyticsService;

class AnalyticsController extends Controller
{
    protected AnalyticsService $analyticsService;

    public function __construct(AnalyticsService $analyticsService)
    {
        $this->analyticsService = $analyticsService;
    }

    /**
     * Display the analytics dashboard with filters.
     */
    public function index(Request $request)
    {
        // Build parameters from request filters
        $params = [];

        if ($request->has('start_date') && $request->has('end_date')) {
            $params['start_date'] = $request->input('start_date');
            $params['end_date'] = $request->input('end_date');
        } else {
            $dateRangeInput = $request->input('date_range', 30);
            $dateRange = is_numeric($dateRangeInput) && (int) $dateRangeInput > 0
                ? (int) $dateRangeInput
                : 30;
            $params['date_range'] = $dateRange;
        }

        $params['request_category'] = $request->input('request_category');
        $params['with_percentages'] = true;

        // Get date range
        $dateRange = $this->analyticsService->getDateRange($params);

        // Build base query with date range and optional filters
        $query = $this->analyticsService->getBaseQuery($dateRange, $params['request_category'] ?? null);

        // Apply optional path filter
        if ($request->filled('path')) {
            $query->where('path', 'like', '%' . $request->input('path') . '%');
        }

        // Apply optional device filter
        if ($request->filled('device')) {
            $query->where('device', $request->input('device'));
        }

        // Apply optional browser filter
        if ($request->filled('browser')) {
            $query->where('browser', $request->input('browser'));
        }

        // Apply optional country filter
        if ($request->filled('country')) {
            $query->where('country', $request->input('country'));
        }

        // Apply optional referrer filter
        if ($request->filled('referrer')) {
            $query->where('referrer', 'like', '%' . $request->input('referrer') . '%');
        }

        // Apply optional language filter
        if ($request->filled('language')) {
            $query->where('language', $request->input('language'));
        }

        // Apply optional city filter
        if ($request->filled('city')) {
            $query->where('city', $request->input('city'));
        }

        // Apply optional HTTP method filter
        if ($request->filled('http_method')) {
            $query->where('http_method', $request->input('http_method'));
        }

        // Get analytics data from package services
        $totalViews = $this->analyticsService->getSummary($query, $dateRange);
        $chartData = $this->analyticsService->getChartData($query, $dateRange);
        $topPages = $this->analyticsService->getTopPages($query, true);
        $topReferrers = $this->analyticsService->getTopReferrers($query, true);
        $browsers = $this->analyticsService->getBrowsersData($query, true);
        $devices = $this->analyticsService->getDevices($query, true);
        $countries = $this->analyticsService->getCountriesData($query, true);
        $operatingSystems = $this->analyticsService->getOperatingSystems($query, true);

        // --- Additional advanced analytics ---

        // 1. Response Time Metrics
        $responseTimeData = (clone $query)
            ->select(
                DB::raw('AVG(response_time) as avg_response_time'),
                DB::raw('MIN(response_time) as min_response_time'),
                DB::raw('MAX(response_time) as max_response_time'),
                DB::raw('COUNT(response_time) as timed_requests')
            )
            ->whereNotNull('response_time')
            ->first();

        // 2. HTTP Method Breakdown
        $httpMethods = (clone $query)
            ->select('http_method', DB::raw('COUNT(*) as count'))
            ->whereNotNull('http_method')
            ->groupBy('http_method')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        // 3. Language Breakdown
        $languages = (clone $query)
            ->select('language', DB::raw('COUNT(*) as count'))
            ->whereNotNull('language')
            ->where('language', '!=', '')
            ->groupBy('language')
            ->orderBy('count', 'desc')
            ->limit(10)
            ->get()
            ->toArray();

        // 4. Screen Resolution Breakdown
        $screens = (clone $query)
            ->select('screen', DB::raw('COUNT(*) as count'))
            ->whereNotNull('screen')
            ->where('screen', '!=', '')
            ->groupBy('screen')
            ->orderBy('count', 'desc')
            ->limit(10)
            ->get()
            ->toArray();

        // 5. City-Level Location Breakdown
        $cities = (clone $query)
            ->select('city', DB::raw('COUNT(*) as count'))
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->groupBy('city')
            ->orderBy('count', 'desc')
            ->limit(10)
            ->get()
            ->toArray();

        // 6. Request Category Breakdown (web vs api)
        $requestCategories = (clone $query)
            ->select('request_category', DB::raw('COUNT(*) as count'))
            ->whereNotNull('request_category')
            ->groupBy('request_category')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        // 7. Page Titles
        $pageTitles = (clone $query)
            ->select('page_title', 'path', DB::raw('COUNT(*) as views'))
            ->whereNotNull('page_title')
            ->where('page_title', '!=', '')
            ->groupBy('page_title', 'path')
            ->orderBy('views', 'desc')
            ->limit(10)
            ->get()
            ->toArray();

        // 8. Hourly Traffic Distribution
        $hourlyTraffic = (clone $query)
            ->select(DB::raw('HOUR(visited_at) as hour'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('HOUR(visited_at)'))
            ->orderBy('hour')
            ->get()
            ->keyBy('hour');

        // Build hourly labels (0-23) filling missing hours with 0
        $hourlyLabels = [];
        $hourlyData = [];
        for ($h = 0; $h <= 23; $h++) {
            $hourlyLabels[] = sprintf('%02d:00', $h);
            $hourlyData[] = $hourlyTraffic->has($h) ? (int) $hourlyTraffic->get($h)->count : 0;
        }

        // 9. Authenticated vs Guest Visitors
        $authenticatedCount = (clone $query)
            ->whereNotNull('user_id')
            ->count();

        $guestCount = (clone $query)
            ->whereNull('user_id')
            ->count();

        // 10. Request count over time (hourly trend for the period)
        $trendDirection = 'stable';
        $totalInPeriod = (clone $query)->count();
        $halfPoint = clone $dateRange['start'];
        $halfPoint->addDays(max(1, (int) floor($dateRange['days'] / 2)));
        $firstHalfCount = (clone $query)
            ->where('visited_at', '>=', $dateRange['start'])
            ->where('visited_at', '<', $halfPoint)
            ->count();
        $secondHalfCount = (clone $query)
            ->where('visited_at', '>=', $halfPoint)
            ->count();

        if ($secondHalfCount > $firstHalfCount * 1.2) {
            $trendDirection = 'up';
        } elseif ($secondHalfCount < $firstHalfCount * 0.8) {
            $trendDirection = 'down';
        }

        // Get recent page views
        $recentPageViews = $this->analyticsService->getPageViews($params, 20);

        // Get distinct values for filter dropdowns
        $distinctPaths = RequestAnalytics::distinct()
            ->select('path')
            ->whereBetween('visited_at', [$dateRange['start'], $dateRange['end']])
            ->orderBy('path')
            ->pluck('path');

        $distinctDevices = RequestAnalytics::distinct()
            ->select('device')
            ->whereNotNull('device')
            ->where('device', '!=', '')
            ->orderBy('device')
            ->pluck('device');

        $distinctBrowsers = RequestAnalytics::distinct()
            ->select('browser')
            ->whereNotNull('browser')
            ->where('browser', '!=', '')
            ->orderBy('browser')
            ->pluck('browser');

        $distinctCountries = RequestAnalytics::distinct()
            ->select('country')
            ->whereNotNull('country')
            ->where('country', '!=', '')
            ->orderBy('country')
            ->pluck('country');

        $distinctLanguages = RequestAnalytics::distinct()
            ->select('language')
            ->whereNotNull('language')
            ->where('language', '!=', '')
            ->orderBy('language')
            ->pluck('language');

        $distinctCities = RequestAnalytics::distinct()
            ->select('city')
            ->whereNotNull('city')
            ->where('city', '!=', '')
            ->orderBy('city')
            ->pluck('city');

        return view('admin.pages.analytics.index', compact(
            'totalViews',
            'chartData',
            'topPages',
            'topReferrers',
            'browsers',
            'devices',
            'countries',
            'operatingSystems',
            'recentPageViews',
            'distinctPaths',
            'distinctDevices',
            'distinctBrowsers',
            'distinctCountries',
            'distinctLanguages',
            'distinctCities',
            'params',
            'dateRange',
            'responseTimeData',
            'httpMethods',
            'languages',
            'screens',
            'cities',
            'requestCategories',
            'pageTitles',
            'hourlyLabels',
            'hourlyData',
            'authenticatedCount',
            'guestCount',
            'trendDirection',
            'firstHalfCount',
            'secondHalfCount'
        ));
    }
}
