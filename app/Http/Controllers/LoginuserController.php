<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginuser;
use Validator;
class LoginuserController extends Controller
{
    function loginpage()
    {
        return view('AdminView.login');
    }
    function RegisterPage()
    {
        return view('AdminView.Register');
    }
    public function login(Request $Logindetails)
    {
        $Logindetails = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $User = loginuser::where('email', $Logindetails['email'])->first();
        if ($User == null) {
            return back()->with('error', 'Invalid Email or Password')->withInput();
        } else {
            if ($User->password == $Logindetails['password']) {
                session()->put('admin', $User->admin_id);

                return redirect('/admin');
            } else {
                return back()->with('error', 'Invalid Email or Password')->withInput();
            }
        }
    }
    function Register()
    {
        $Registerdetails = request()->validate([
            'name' => 'required',
            'email' => 'required| email',
            'password' => 'required',
        ]);

        $User = new loginuser();
        $User->admin_id = 'Admin'.rand(100000,999999);
        $User->username = $Registerdetails['name'];
        $User->password = $Registerdetails['password'];
        $User->email = $Registerdetails['email'];
        $User->save();
        return back()->with('success', 'Registration Successful');
    }

    function logout()
    {
        session()->forget('admin');
        return redirect('/');
    }
}
