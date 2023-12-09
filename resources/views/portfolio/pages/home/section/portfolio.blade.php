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
                    @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category ? $portfolio->category->name : 'no-category' }}">
                    <img src="{{ $portfolio->image }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->name }}</h4>
                        <p>{{ $portfolio->name }}</p>
                        <a href="{{ $portfolio->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="eDventure">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="{{ $portfolio->project_url }}" class="details-link" title="More Details">
                            <i class="bx bx-link"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
