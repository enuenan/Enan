<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function settings()
    {
        return view('admin.pages.settings.settings');
    }

    public function changePassword(Request $request, $id)
    {
        $validateData = $request->validate([
            'old_password' => ['required', new MatchOldPassword, 'min:5'],
            'new_password' => ['required', 'min:5'],
            'confirm_password' => ['required', 'same:new_password', 'min:5'],
        ]);

        $changed_password = User::find(auth()->user()->id)->update(['password' => Hash::make($request['new_password'])]);

        if ($changed_password) {
            return redirect()->back()->with(['success' => 'Password updated successfully!']);
        } else {
            return redirect()->back()->with(['success' => 'Password update failed!']);
        }
    }

    public function profileSettings(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'string|nullable',
            // 'email' => 'string|email|nullable',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        // $user->email = $request->email;
        $user->save();

        return redirect()->back()->with(['success' => 'Your profile has been successfully updated']);
    }
}
