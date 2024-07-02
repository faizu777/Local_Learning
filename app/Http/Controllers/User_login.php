<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_Register_Data;
use App\Models\Student_Register;

class User_login extends Controller
{
    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $teacher = Teacher_Register_Data::where('email',$request->email)->first();
if($teacher)
{
    if($teacher->password==$request->password)
    {
        session()->put('user',$teacher->Teacher_id);
return redirect('/teacher/'.$teacher->Teacher_id);

    }
    return back()->with('error','Your  password is wrong');
}
$student = Student_Register::where('email',$request->email)->first();
if($student)
{
    if($student->Password==$request->password)
    {

    }
    return back()->with('error','Your  password is wrong');
}
return back()->with('error','Your ID and Password is wrong');
    }
}
