<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Session;
use App\Models\User;


class DashboardController extends Controller
{
    //
    function index()
    {
        $data = array();
        if(Session::has('loginId')){
            $data= User::where(['id'=>Session::get('loginId')])->first();
        }
        return view("admin.admin.dashboard",compact('data'));
    }
    //login
}
