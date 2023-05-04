<div id="portfolio" class="paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>My <span class="text-decoration-underline" style="color: #106f17 !important">Portfolio</span></h2>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629475757619.png') }}"
                        class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>eDventure</h4>
                        <p>eDventure</p>
                        <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629475757619.png') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="eDventure">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="{{ route('edventure') }}" class="details-link" title="More Details">
                            <i class="bx bx-link"></i>
                        </a>
                    </div>
                </div>
            @endforeach

            <!-- 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629475757619.png') }}"
                    class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>eDventure</h4>
                    <p>eDventure</p>
                    <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629475757619.png') }}"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="eDventure">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a href="{{ route('edventure') }}" class="details-link" title="More Details">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div>

            <!-- 2 -->
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477345430.png') }}"
                    class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Docror's Blog</h4>
                    <p>Docror's Blog</p>
                    <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477345430.png') }}"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Docror's Blog"><i
                            class="bx bx-plus"></i></a>
                    <a href="{{ route('doctorsBlog') }}" class="details-link" title="More Details">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div> --}}

            <!-- 3 -->
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477617026.png') }}"
                    class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>EL-MO1 CARS</h4>
                    <p>EL-MO1 CARS</p>
                    <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477617026.png') }}"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="EL-MO1 CARS"><i
                            class="bx bx-plus"></i></a>
                    <a href="{{ route('elmo') }}" class="details-link" title="More Details">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div> --}}

            <!-- 4 -->
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477935633.png') }}"
                    class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Daruchini</h4>
                    <p>Daruchini</p>
                    <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1629477935633.png') }}"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Daruchini"><i
                            class="bx bx-plus"></i></a>
                    <a href="{{ route('daruchini') }}" class="details-link" title="More Details">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div> --}}

            <!-- 5 -->
            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{ asset('portfolio/assets/img/portfolio/pixomatic_1630229825441.png') }}"
                    class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Cowpik</h4>
                    <p>Cowpik</p>
                    <a href="{{ asset('portfolio/assets/img/portfolio/pixomatic_1630229825441.png') }}"
                        data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Cowpik"><i
                            class="bx bx-plus"></i></a>
                    <a href="{{ route('cowpik') }}" class="details-link" title="More Details">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
