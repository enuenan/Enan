<div class="row no-gutters">
    @if ($side == 'right')
        <div class="col-sm"> <!--spacer--> </div>

        <x-company.line active='false' />
    @endif

    <div class="col-sm py-2">
        <div class="card">
            <div class="card-body">
                <div class="float-end text-muted small">Jan 9th 2021 7:00 AM</div>
                <h4 class="card-title text-muted">Day 1 Orientation</h4>
                <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
            </div>
        </div>
    </div>


    @if ($side == 'left')
        <x-company.line active='false' />

        <div class="col-sm"> <!--spacer--> </div>
    @endif
</div>
