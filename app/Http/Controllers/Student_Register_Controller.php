<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Register;
class Student_Register_Controller extends Controller
{
    function Student_Register_Detail(Request $request)
    {
        $req = request()->validate([
            'name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'board' => 'required',
            'Contact_number' => 'required |min:10 |max:10',
            'password' => 'required',
            'email' => 'required|email|unique:student__registers',
            'profile_pic' => 'image',
            'gender' => 'required',
            'address' => 'required',
            'duration' => 'required',
            'fee' => 'required',

        ]);
        $stdData = new Student_Register();
        $stdData->student_id = 'Student'.rand(100000,999999);
        $stdData->Name = $req['name'];
        $stdData->Class = $req['class'];
        $stdData->Subject = $req['subject'];
        $stdData->Board = $req['board'];
        $stdData->Contact_number = $req['Contact_number'];
        $stdData->Password = $req['password'];
        $stdData->email= $req['email'];
        $stdData->gender = $req['gender'];
        $stdData->address = $req['address'];
        $stdData->duration = $req['duration'];
        $stdData->fee = $req['fee'];
        if($request->hasFile('profile_pic'))
        {
            $imageName =time(). '.'.$request->file('profile_pic')->extension();
            $request->file('profile_pic')->move(public_path('student_images/'), $imageName);
            $stdData->profile_img = 'student_images/'.$imageName;

        }
        $stdData->save();

        return response()->json(['success' => 'Your are successfully registered Wait for approval']);
    }
    function get_StudentData()
    {
    }
}
