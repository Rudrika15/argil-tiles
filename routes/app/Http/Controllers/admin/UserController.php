<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function login()
    {
        return view("admin.admin.login");
    }

    function loginUser(Request $req)
    {
        // Validate the input
        $data = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

            if (Auth::attempt($data)) {
                return redirect()->route('dashboard');
            }
        }

        public function dashboardpage()
        {
            if (Auth::check()) {
                return view('admin.admin.dashboard');
            } else {
                return redirect()->route('login');
            }
        }
        // $user = User::create($data);

        // if ($user) {
        //     return redirect()->route('dashboard');
        // }


    //     // Find the user by email
    //     $user = User::where('email', '=', $req->email)->first();

    //     // If user exists
    //     if ($user) {
    //         // Check if the password matches
    //         if (Hash::check($req->password, $user->password)) {
    //             // Store user ID in session
    //             $req->session()->put('loginId', $user->id);

    //             // return "rahul login";
    //             // Redirect to the dashboard
    //             return view('admin.catelogue.create');  // Change this to your actual dashboard route
    //         } else {
    //             // If password is incorrect, redirect back with error
    //             return back()->with('fail', 'Password does not match.');
    //         }
    //     } else {
    //         // If user does not exist, redirect back with error
    //         return back()->with('fail', 'This email is not registered.');
    //     }
    // }
    public function logout()
    {
        Auth::logout();
        return view('admin.admin.login');
    }

    // public function logout()
    // {

    //     if (Session::has('loginId')) {
    //         Session::pull('loginId');
    //     }
    //     return redirect("login");
    // }
}
