<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
    <div class="row h-50">
        <div class="col {{ $loop->iteration == 1 ? '' : 'border-end' }}">&nbsp;</div>
        <div class="col">&nbsp;</div>
    </div>
    <h5 class="m-2">
        <span class="badge rounded-pill bg-{{ $loop->last ? 'success' : 'secondary' }} border">&nbsp;</span>
    </h5>
    <div class="row h-50">
        <div class="col border-end {{ $loop->iteration == 1 || $loop->last ? '' : 'border-end' }}">
            &nbsp;</div>
        <div class="col">&nbsp;</div>
    </div>
</div>
