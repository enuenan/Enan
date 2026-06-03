<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio Details</h2>
            <ol>
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/') }}#portfolio">Portfolio</a></li>
                <li>{{ $portfolioName }}</li>
            </ol>
        </div>

    </div>
</section>
