<div class="tab-pane fade" id="nav-pills-tab-2">
    <h3 class="m-t-10">Change Password</h3>
    <form action="{{ route('changePassword', auth()->user()->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group row m-b-15">
            <label class="col-sm-3 col-form-label" for="old_password">Old Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="old_password" name="old_password"
                    placeholder="Password" />
                @error('old_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-sm-3 col-form-label" for="new_password">New Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="new_password" name="new_password"
                    placeholder="New Password" />
                @error('new_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group row m-b-15">
            <label class="col-sm-3 col-form-label" for="confirm_password">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="Confirm Password" />
                @error('confirm_password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row m-b-15">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
