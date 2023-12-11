<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
    <div class="row h-50">
        @if (!$loop->first)
            <div class="col border-end">&nbsp;</div>
            <div class="col">&nbsp;</div>
        @endif
    </div>
    <h5 class="m-2">
        <span class="badge rounded-pill bg-{{ $loop->first ? 'success' : 'secondary' }} border">&nbsp;</span>
    </h5>
    <div class="row h-50">
        @if (!$loop->last)
            <div class="col border-end">&nbsp;</div>
            <div class="col">&nbsp;</div>
        @endif
    </div>
</div>
