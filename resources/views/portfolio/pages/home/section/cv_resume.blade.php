<div id="portfolio" class="paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>
                <span class="text-decoration-underline" style="color: #106f17 !important">CV & Resume</span>
            </h2>
        </div>
    </div>

    <div class="container">

        <div class="row portfolio-container">

            @if ($cv_and_resume)
                <!-- CV -->
                <div class="col-md-6">
                    <h3>CV</h3>
                    <iframe src="{{ $cv_and_resume->cv }}" class="w-100" height="780"></iframe>
                </div>

                {{-- RESUME --}}
                <div class="col-md-6">
                    <h3>Resume</h3>
                    <iframe src="{{ $cv_and_resume->resume }}" class="w-100" height="780"></iframe>
                </div>
            @endif

        </div>
    </div>
</div>
