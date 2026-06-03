@extends('portfolio.layouts.default', [
'title' => 'Edventure Portfolio',
'fixedheader' => 'header-inner-pages',
])

@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        @include('portfolio.pages.portfolio-details.breadcrumbs', [
        'portfolioName' => 'Edventure'
        ])
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('portfolio/assets/img/portfolio/portfolio-details-1.jpg') }}"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('portfolio/assets/img/portfolio/portfolio-details-2.jpg') }}"
                                        alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('portfolio/assets/img/portfolio/portfolio-details-3.jpg') }}"
                                        alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web Development</li>
                                <li><strong>Client</strong>: Edventure</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>:
                                    <a href="https://edventurebeta1.top5way.com/">Edventure</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an online learning portal</h2>
                            <p style="text-align: justify;">
                                This is an online learning portal. This platform is used to connect teacher and students.
                                Teacher creates courses for students. He can create tutorials for students. Also he can
                                create exams. On the other hand, students can enroll to different courses, attempts to
                                exams. The main objective of this application is to create different section of students.
                                They can check their performance and and improve themselves. They can also differentiate the
                                results among themselves.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->
@endsection
