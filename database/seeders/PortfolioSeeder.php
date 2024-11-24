<?php

namespace Database\Seeders;

use App\Models\Admin\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolios = [
            [
                'name' => 'eDventure',
                'slug' => Str::slug('eDventure'),
                'image' => '/storage/portfolio/edventure.png',
                'description_title' => 'An Online Learning Portal',
                'description' => 'Implemented an online course provider aimed at students and adults. Allows teachers to upload lectures, online tests and obtain results online. Allows students to view lectures, participate in exams and feedback left by the teacher on assignments and tests.',
                'category_id' => 1,
                'client' => 'eDventure',
                'project_date' => 'Jan 2021 - Jun 2021',
                'git_url' => 'https://github.com/akakib/edvanture',
                'project_url' => 'http://www.edventurebd.com/',
            ],
            [
                'name' => 'Doctors Blog',
                'slug' => Str::slug('doctors-blog'),
                'image' => '/storage/portfolio/Doctors-Blog.png',
                'description_title' => 'An online blog for Patient anad Doctors',
                'description' => 'Implemented a food delivery and takeout system similar to GrubHub and UberEats. Allows restaurants to register their restaurants, and create menu items. Allows users/consumers to view all restaurants registered with the application, and allows users to make online orders.',
                'category_id' => 1,
                'client' => 'Doctor Abul Kalam Mohammed Harun Ar Rashid, Chittagong',
                'project_date' => 'Nov 2020 - Sep 2021',
                'git_url' => 'https://github.com/enuenan/doctors_blog',
                'project_url' => 'http://main.doctorsblog.pw/login',
            ],
            [
                'name' => 'PUC Virtual Classroom',
                'slug' => Str::slug('puc-virtual-classroom'),
                'image' => '/storage/portfolio/puc-classroom.png',
                'description_title' => 'An online classroom system for Premier University',
                'description' => 'Implemented a Virtual Classroom for Premier University like as Google Classroom. Allows teacher and student to post on classroom. Allows teacher to create classroom, attendance, assignment etc. Allows student to join classroom, give attendance, submit assignment etc.',
                'category_id' => 1,
                'client' => 'My final year project',
                'project_date' => 'Nov 2021 - July 2022',
                'git_url' => 'https://github.com/enuenan/puc_classroom',
                'project_url' => 'http://puc-classroom.moammer-enan.com',
            ],
            [
                'name' => 'Employee Management System',
                'slug' => Str::slug('employee-management-system'),
                'image' => '/storage/portfolio/logs-dynamicflow.png',
                'description_title' => 'An online employee management system',
                'description' => 'Implemented an online employee management system which allows employees to store their attendance, requisition, see notice, check holidays, and apply for leaves. It also allows hr to check attendance, approve requisition and leaves etc.',
                'category_id' => 1,
                'client' => 'Dynamicflow',
                'project_date' => 'Oct 2021 - Dec 2021',
                'git_url' => 'https://github.com/enuenan/Employee-Management-System-in-Laravel',
                'project_url' => 'https://logs.dynamicflowit.com/',
            ],
            [
                'name' => 'Dairy Farm Management System',
                'slug' => Str::slug('dairy-farm-management-system'),
                'image' => '/storage/portfolio/DFMS.png',
                'description_title' => 'An online Dairy Farm Management System',
                'description' => 'Implemented an online Dairy Farm Management System which allows maintain the dairy farm, maintain employee, cow, bull and calf. It also helps to maintain vaccination, insemination, feed time etc ',
                'category_id' => 1,
                'client' => 'Dairy Farm',
                'project_date' => 'Jul 2022 - Sep 2022',
                'git_url' => 'https://github.com/srshubho/dfms',
                'project_url' => '',
            ],
            [
                'name' => 'GMIT Academy',
                'slug' => Str::slug('gmit-academy'),
                'image' => '/storage/portfolio/gmit.png',
                'description_title' => 'An online learning platform system',
                'description' => 'Implemented an online course provider aimed at students. Allows admin to upload lectures, online tests and obtain results online. Allows students to view lectures, participate in exams and feedback left by the teacher on assignments and tests',
                'category_id' => 1,
                'client' => 'GMIT',
                'project_date' => 'Feb 2024 - Nov 2024',
                'git_url' => 'https://github.com/enuenan/global_mission_it',
                'project_url' => 'https://gmit.academy/',
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
