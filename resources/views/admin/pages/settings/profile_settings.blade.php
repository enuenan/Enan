<div class="tab-pane fade active show" id="nav-pills-tab-1">
    <h3 class="m-t-10">Profile Settings</h3>
    <form action="{{ route('profileSettings', auth()->user()->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group row m-b-15">
            <label class="col-sm-3 col-form-label" for="name">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                    value="{{ old('name') ? old('name') : auth()->user()->name }}" />
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- <div class="form-group row m-b-15">
            <label class="col-sm-3 col-form-label" for="email">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                    value="{{ old('email') ? old('email') : auth()->user()->email }}" />
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div> --}}

        <div class="row m-b-15">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
