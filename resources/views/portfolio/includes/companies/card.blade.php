<div class="row no-gutters">
    @if ($side == 'right')
        <div class="col-sm"> <!--spacer--> </div>

        @include('portfolio.includes.companies.line')
    @endif

    <div class="col-sm py-2">
        <div class="journal-info">

            <div class="glass {{ $loop->first ? 'border-success' : '' }}">
                <div class="row d-flex align-items-center {{ $loop->even ? 'flex-row-reverse' : '' }} my-1">
                    <div class="col-lg-6 col-md-12 d-flex align-items-center custom-style-company" style="height: 200px;">
                        <a href="{{ $company['link'] }}" target="_blank">
                            <img src="{{ $company['image'] }}" class="img-fluid mx-auto d-block" alt="img">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 custom-style-company {{ $loop->even ? 'setup-margin-even' : '' }}">
                        <div class="journal-txt text-start">
                            <h4>
                                <a href="https://talentpro.global/" target="_blank">
                                    {{ $company['name'] }}
                                </a>
                            </h4>
                            <p class="separator">
                                {{ $company['worked_as'] }}
                                <br>
                                {{ $company['period'] }}
                                <br>
                                @foreach (explode(', ', $company['keywords']) as $keyword)
                                    <span class="badge rounded-pill bg-secondary">{{ $keyword }}</span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @if ($side == 'left')
        @include('portfolio.includes.companies.line')

        <div class="col-sm"> <!--spacer--> </div>
    @endif
</div>
