<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Image;
use Auth;

class ReaderProfileController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flash('updated', ' Profile Picture Has Been Updated');
        return view('profile');
    }

    public function show()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }
    public function profile()
    {
        return view('user.profile', array('user' => Auth::user()));
    }
    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/images/' . $filename));

            $user = Auth::user();

            $user->avatar = $filename;

            if ($user->save()) {
                $request->session()->flash('success', $user->name . ' PP has been updated');
            } else {
                $request->session()->flash('error', 'Error');
            }

            return redirect()->back();
        }

        return view('user.profile', ['user' => Auth::user()]);
    }
}
