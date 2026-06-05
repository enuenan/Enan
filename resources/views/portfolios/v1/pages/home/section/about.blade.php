<div id="about" class="paddsection">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-4 ">
                <div class="div-img-bg">
                    <div class="about-img">
                        <img src="{{ $about->image ?? asset('portfolio/assets/img/pixomatic_1702137054794.png') }}" class="img-responsive" alt="Moammer Farshid Enan profile photo"
                            loading="lazy">
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-descr">
                    <p class="p-heading">
                        {{ $about->title ?? 'Laravel developer building clean web products.' }}
                    </p>
                    <p class="separator" style="text-align: justify;">
                        {{ $about->description ?? 'I build secure, maintainable, and scalable web applications with Laravel and modern frontend tools.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>