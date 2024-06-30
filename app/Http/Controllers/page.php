<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_Register_Data;
use App\Models\Student_Register;


class page extends Controller
{
    function index()
    {

        return view('index');

    }
    function about()
    {
        return view('about');
    }
    function contact()
    {
        return view('contact');

    }
    function privacy()
     {
        return view('privacyandpolicy');

    }
    function  Student_Register_Page()
    {

        return view('RegisterStudent');
    }
    function Teacher_Register_Page()
    {
return view('Register-Teacher');
    }
    function login_user()
    {
        return view('user-login');
    }
    function profile()
    {

        return view('user-teacher');
    }

}
