@extends('admin.layouts.default', [
    'pageName1' => 'Analytics',
    'pageName2' => 'Dashboard',
    'pageDesc' => ' Request Analytics Dashboard',
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Filter Card -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Filters</h4>
                </div>
                <div class="panel-body">
                    <form method="GET" action="{{ route('admin.analytics') }}" class="form-inline">
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="date_range">Date Range</label>
                            <select name="date_range" id="date_range" class="form-control">
                                <option value="7" {{ ($params['date_range'] ?? 30) == 7 ? 'selected' : '' }}>Last 7 Days</option>
                                <option value="30" {{ ($params['date_range'] ?? 30) == 30 ? 'selected' : '' }}>Last 30 Days</option>
                                <option value="60" {{ ($params['date_range'] ?? 30) == 60 ? 'selected' : '' }}>Last 60 Days</option>
                                <option value="90" {{ ($params['date_range'] ?? 30) == 90 ? 'selected' : '' }}>Last 90 Days</option>
                            </select>
                        </div>
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Start Date" value="{{ request('start_date') }}">
                        </div>
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" placeholder="End Date" value="{{ request('end_date') }}">
                        </div>
                        @if(isset($distinctPaths) && $distinctPaths->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="path">Path</label>
                            <select name="path" id="path" class="form-control">
                                <option value="">All Paths</option>
                                @foreach($distinctPaths as $path)
                                    <option value="{{ $path }}" {{ request('path') == $path ? 'selected' : '' }}>{{ $path }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        @if(isset($distinctDevices) && $distinctDevices->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="device">Device</label>
                            <select name="device" id="device" class="form-control">
                                <option value="">All Devices</option>
                                @foreach($distinctDevices as $device)
                                    <option value="{{ $device }}" {{ request('device') == $device ? 'selected' : '' }}>{{ $device }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        @if(isset($distinctBrowsers) && $distinctBrowsers->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="browser">Browser</label>
                            <select name="browser" id="browser" class="form-control">
                                <option value="">All Browsers</option>
                                @foreach($distinctBrowsers as $browser)
                                    <option value="{{ $browser }}" {{ request('browser') == $browser ? 'selected' : '' }}>{{ $browser }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        @if(isset($distinctCountries) && $distinctCountries->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="country">Country</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">All Countries</option>
                                @foreach($distinctCountries as $country)
                                    <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="referrer">Referrer</label>
                            <input type="text" name="referrer" id="referrer" class="form-control" placeholder="Referrer contains..." value="{{ request('referrer') }}">
                        </div>
                        @if(isset($distinctLanguages) && $distinctLanguages->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="language">Language</label>
                            <select name="language" id="language" class="form-control">
                                <option value="">All Languages</option>
                                @foreach($distinctLanguages as $language)
                                    <option value="{{ $language }}" {{ request('language') == $language ? 'selected' : '' }}>{{ $language }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        @if(isset($distinctCities) && $distinctCities->isNotEmpty())
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="city">City</label>
                            <select name="city" id="city" class="form-control">
                                <option value="">All Cities</option>
                                @foreach($distinctCities as $city)
                                    <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="request_category">Type</label>
                            <select name="request_category" id="request_category" class="form-control">
                                <option value="">All Types</option>
                                <option value="web" {{ request('request_category') == 'web' ? 'selected' : '' }}>Web</option>
                                <option value="api" {{ request('request_category') == 'api' ? 'selected' : '' }}>API</option>
                            </select>
                        </div>
                        <div class="form-group mr-3 mb-2">
                            <label class="sr-only" for="http_method">HTTP Method</label>
                            <select name="http_method" id="http_method" class="form-control">
                                <option value="">All Methods</option>
                                <option value="GET" {{ request('http_method') == 'GET' ? 'selected' : '' }}>GET</option>
                                <option value="POST" {{ request('http_method') == 'POST' ? 'selected' : '' }}>POST</option>
                                <option value="PUT" {{ request('http_method') == 'PUT' ? 'selected' : '' }}>PUT</option>
                                <option value="PATCH" {{ request('http_method') == 'PATCH' ? 'selected' : '' }}>PATCH</option>
                                <option value="DELETE" {{ request('http_method') == 'DELETE' ? 'selected' : '' }}>DELETE</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-filter"></i> Apply</button>
                        <a href="{{ route('admin.analytics') }}" class="btn btn-secondary mb-2 ml-1"><i class="fa fa-undo"></i> Reset</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @php
        $hasData = isset($totalViews['views']) && $totalViews['views'] > 0;
    @endphp

    @if(!$hasData)
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-body text-center py-5">
                    <i class="fa fa-chart-bar fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No analytics data available</h4>
                    <p class="text-muted">Data will appear once visitors start browsing your site.</p>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Row 1: Key Metrics Cards -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-blue">
                        <div class="stats-icon"><i class="fa fa-eye"></i></div>
                        <div class="stats-info">
                            <h4>Total Page Views</h4>
                            <p>{{ number_format($totalViews['views']) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-green">
                        <div class="stats-icon"><i class="fa fa-users"></i></div>
                        <div class="stats-info">
                            <h4>Unique Visitors</h4>
                            <p>{{ number_format($totalViews['visitors']) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-orange">
                        <div class="stats-icon"><i class="fa fa-sign-out-alt"></i></div>
                        <div class="stats-info">
                            <h4>Bounce Rate</h4>
                            <p>{{ $totalViews['bounce_rate'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-purple">
                        <div class="stats-icon"><i class="fa fa-clock"></i></div>
                        <div class="stats-info">
                            <h4>Avg. Visit Time</h4>
                            <p>{{ $totalViews['average_visit_time'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Extra Metric Cards (Response Time, Trend, Auth vs Guest, Category) -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-indigo">
                        <div class="stats-icon"><i class="fa fa-tachometer-alt"></i></div>
                        <div class="stats-info">
                            <h4>Avg. Response Time</h4>
                            <p>{{ $responseTimeData && $responseTimeData->avg_response_time ? number_format($responseTimeData->avg_response_time, 0) . ' ms' : 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-pink">
                        <div class="stats-icon"><i class="fa fa-chart-line"></i></div>
                        <div class="stats-info">
                            <h4>Traffic Trend</h4>
                            <p>
                                @if($trendDirection === 'up')
                                    <span class="text-white"><i class="fa fa-arrow-up"></i> Up</span>
                                @elseif($trendDirection === 'down')
                                    <span class="text-white"><i class="fa fa-arrow-down"></i> Down</span>
                                @else
                                    <span class="text-white"><i class="fa fa-minus"></i> Stable</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-teal">
                        <div class="stats-icon"><i class="fa fa-user-lock"></i></div>
                        <div class="stats-info">
                            <h4>Auth vs Guest</h4>
                            <p>{{ number_format($authenticatedCount) }} / {{ number_format($guestCount) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <div class="widget widget-stats bg-grey">
                        <div class="stats-icon"><i class="fa fa-code-branch"></i></div>
                        <div class="stats-info">
                            <h4>Request Type</h4>
                            <p>
                                @if(!empty($requestCategories))
                                    @foreach($requestCategories as $cat)
                                        {{ ucfirst($cat['request_category']) }}: {{ number_format($cat['count']) }}@if(!$loop->last) | @endif
                                    @endforeach
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 3: Traffic Charts (Daily + Hourly) -->
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Daily Traffic Overview</h4>
                </div>
                <div class="panel-body">
                    <canvas id="trafficChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Hourly Distribution</h4>
                </div>
                <div class="panel-body">
                    <canvas id="hourlyChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 4: Response Time Details -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Response Time Performance</h4>
                </div>
                <div class="panel-body">
                    @if($responseTimeData && $responseTimeData->timed_requests > 0)
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h5 class="text-muted">Min Response</h5>
                            <h3 class="text-success">{{ number_format($responseTimeData->min_response_time, 0) }} ms</h3>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-muted">Avg Response</h5>
                            <h3 class="text-info">{{ number_format($responseTimeData->avg_response_time, 0) }} ms</h3>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-muted">Max Response</h5>
                            <h3 class="text-danger">{{ number_format($responseTimeData->max_response_time, 0) }} ms</h3>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-muted">Timed Requests</h5>
                            <h3>{{ number_format($responseTimeData->timed_requests) }}</h3>
                        </div>
                    </div>
                    @else
                    <p class="text-muted text-center">Response time data is not available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 5: Top Pages & Top Referrers -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Top Visited Pages</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($topPages))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th class="text-center">Views</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPages as $page)
                                <tr>
                                    <td><code>{{ $page['path'] }}</code></td>
                                    <td class="text-center">{{ number_format($page['views']) }}</td>
                                    <td class="text-center">{{ $page['percentage'] }}%</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No page data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Top Referrers</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($topReferrers))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Domain</th>
                                    <th class="text-center">Visits</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topReferrers as $referrer)
                                <tr>
                                    <td>{{ $referrer['domain'] }}</td>
                                    <td class="text-center">{{ number_format($referrer['visits']) }}</td>
                                    <td class="text-center">{{ $referrer['percentage'] }}%</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No referrer data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 6: Page Titles & HTTP Methods -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Page Titles</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($pageTitles))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Path</th>
                                    <th class="text-center">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pageTitles as $pt)
                                <tr>
                                    <td>{{ $pt['page_title'] }}</td>
                                    <td><code>{{ $pt['path'] }}</code></td>
                                    <td class="text-center">{{ number_format($pt['views']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No page title data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">HTTP Methods</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($httpMethods))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Method</th>
                                    <th class="text-center">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($httpMethods as $method)
                                <tr>
                                    <td><span class="badge badge-{{ $method['http_method'] == 'GET' ? 'success' : ($method['http_method'] == 'POST' ? 'primary' : ($method['http_method'] == 'DELETE' ? 'danger' : 'warning')) }}">{{ $method['http_method'] }}</span></td>
                                    <td class="text-center">{{ number_format($method['count']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No method data.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Request Categories</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($requestCategories))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th class="text-center">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestCategories as $rc)
                                <tr>
                                    <td><span class="badge badge-info">{{ ucfirst($rc['request_category']) }}</span></td>
                                    <td class="text-center">{{ number_format($rc['count']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No category data.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 7: Browser & Device Breakdown -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Browser Breakdown</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($browsers))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Browser</th>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($browsers as $browser)
                                <tr>
                                    <td>{{ $browser['browser'] }}</td>
                                    <td class="text-center">{{ number_format($browser['count']) }}</td>
                                    <td class="text-center">
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ $browser['percentage'] }}%;" aria-valuenow="{{ $browser['percentage'] }}" aria-valuemin="0" aria-valuemax="100">{{ $browser['percentage'] }}%</div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No browser data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Device Breakdown</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($devices))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Device</th>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($devices as $device)
                                <tr>
                                    <td>{{ $device['name'] }}</td>
                                    <td class="text-center">{{ number_format($device['count']) }}</td>
                                    <td class="text-center">
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{ $device['percentage'] }}%;" aria-valuenow="{{ $device['percentage'] }}" aria-valuemin="0" aria-valuemax="100">{{ $device['percentage'] }}%</div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No device data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 8: Country & City Breakdown -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Country / Location</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($countries))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($countries as $country)
                                <tr>
                                    <td>{{ $country['name'] }}</td>
                                    <td class="text-center">{{ number_format($country['count']) }}</td>
                                    <td class="text-center">{{ $country['percentage'] }}%</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No location data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">City Breakdown</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($cities))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>City</th>
                                    <th class="text-center">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city['city'] }}</td>
                                    <td class="text-center">{{ number_format($city['count']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No city data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 9: OS & Screen Resolution Breakdown -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Operating System</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($operatingSystems))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>OS</th>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($operatingSystems as $os)
                                <tr>
                                    <td>{{ $os['name'] }}</td>
                                    <td class="text-center">{{ number_format($os['count']) }}</td>
                                    <td class="text-center">
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{ $os['percentage'] }}%;" aria-valuenow="{{ $os['percentage'] }}" aria-valuemin="0" aria-valuemax="100">{{ $os['percentage'] }}%</div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No operating system data available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Screen Resolution</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($screens))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Resolution</th>
                                    <th class="text-center">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($screens as $screen)
                                <tr>
                                    <td>{{ $screen['screen'] }}</td>
                                    <td class="text-center">{{ number_format($screen['count']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No screen data.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Language</h4>
                </div>
                <div class="panel-body">
                    @if(!empty($languages))
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Language</th>
                                    <th class="text-center">Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($languages as $lang)
                                <tr>
                                    <td>{{ $lang['language'] }}</td>
                                    <td class="text-center">{{ number_format($lang['count']) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No language data.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Row 10: Recent Page Views -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Recent Page Views</h4>
                </div>
                <div class="panel-body">
                    @if($recentPageViews->isNotEmpty())
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Path</th>
                                    <th>Page Title</th>
                                    <th>IP</th>
                                    <th>Browser</th>
                                    <th>Device</th>
                                    <th>OS</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Language</th>
                                    <th>Method</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentPageViews as $view)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($view->visited_at)->format('M d, h:i A') }}</td>
                                    <td><code>{{ $view->path }}</code></td>
                                    <td>{{ Str::limit($view->page_title ?? '-', 30) }}</td>
                                    <td>{{ $view->ip_address ?? '-' }}</td>
                                    <td>{{ $view->browser ?? '-' }}</td>
                                    <td>{{ $view->device ?? '-' }}</td>
                                    <td>{{ $view->operating_system ?? '-' }}</td>
                                    <td>{{ $view->country ?? '-' }}</td>
                                    <td>{{ $view->city ?? '-' }}</td>
                                    <td>{{ $view->language ?? '-' }}</td>
                                    <td><span class="badge badge-info">{{ $view->http_method ?? '-' }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p class="text-muted">No recent page views available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@section('page-css')
<style>
    .widget-stats {
        padding: 20px;
        border-radius: 4px;
        color: #fff;
        min-height: 120px;
    }
    .widget-stats .stats-icon {
        font-size: 40px;
        float: right;
        opacity: 0.3;
    }
    .widget-stats .stats-info h4 {
        font-size: 14px;
        margin: 0 0 5px 0;
        opacity: 0.7;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .widget-stats .stats-info p {
        font-size: 28px;
        font-weight: 600;
        margin: 0;
    }
    .bg-blue { background: #348fe2; }
    .bg-green { background: #00acac; }
    .bg-orange { background: #f59c1a; }
    .bg-purple { background: #727cb6; }
    .bg-indigo { background: #5755a1; }
    .bg-pink { background: #d63384; }
    .bg-teal { background: #20c997; }
    .bg-grey { background: #6c757d; }
    .form-group label.sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0; }
</style>
@endsection

@section('page-js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(document).ready(function() {
    @if($hasData && !empty($chartData['labels']))
    // Daily Traffic Chart
    var ctx = document.getElementById('trafficChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($chartData['labels']) !!},
            datasets: [
                {
                    label: 'Views',
                    data: {!! json_encode($chartData['datasets'][0]['data'] ?? []) !!},
                    backgroundColor: 'rgba(52, 143, 226, 0.1)',
                    borderColor: 'rgba(52, 143, 226, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: 'rgba(52, 143, 226, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Visitors',
                    data: {!! json_encode($chartData['datasets'][1]['data'] ?? []) !!},
                    backgroundColor: 'rgba(0, 172, 172, 0.1)',
                    borderColor: 'rgba(0, 172, 172, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: 'rgba(0, 172, 172, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: { position: 'top' },
            scales: {
                x: { grid: { display: false } },
                y: { beginAtZero: true, ticks: { precision: 0 } }
            }
        }
    });
    @endif

    @if($hasData && !empty($hourlyLabels))
    // Hourly Distribution Bar Chart
    var hctx = document.getElementById('hourlyChart').getContext('2d');
    new Chart(hctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($hourlyLabels) !!},
            datasets: [{
                label: 'Requests',
                data: {!! json_encode($hourlyData) !!},
                backgroundColor: 'rgba(89, 179, 255, 0.7)',
                borderColor: 'rgba(89, 179, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: { display: false },
            scales: {
                x: { grid: { display: false }, ticks: { font: { size: 9 } } },
                y: { beginAtZero: true, ticks: { precision: 0 } }
            }
        }
    });
    @endif
});
</script>
@endsection