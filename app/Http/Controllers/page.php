<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_Register_Data;
use App\Models\Student_Register;
use App\Models\city;
use App\Models\area_in_city;
use Illuminate\Support\Facades\Artisan;

class page extends Controller
{
    function get_city()
    {
        $city = city::all();
        return response()->json(['city' => $city],200);
    }
    function get_area($city_id)
    {
        $area = area_in_city::where('city_id',$city_id)->get();
        return response()->json(['area' => $area],200);
    }
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
        if (session()->has('user_id'))
         {
            return redirect('/teacher/' . session('user_id'));
        }
        return view('user-login');
    }
    function profile()
    {

        return view('user-teacher');
    }
    function faq()
    {
        return view('faq');
    }
    public function privacy_policy()
    {
        return view('privacyandpolicy');
    }
    public function terms_conditions()
    {
        return view('term-condition');
    }
    function forgot_password()
    {
        return view('user-forgot-pass');
    }
    function loader()
    {
        return view('loader-tester');
    }

}
