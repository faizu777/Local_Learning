<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Register;
class Student_Register_Controller extends Controller
{
    function Student_Register_Detail()
    {
        $req = request()->validate([
            'name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'board' => 'required',
            'Contact_number' => 'required |min:10 |max:10',
            'password' => 'required',
        ]);
        $stdData = new Student_Register();
        $stdData->Name = $req['name'];
        $stdData->Class = $req['class'];
        $stdData->Subject = $req['subject'];
        $stdData->Board = $req['board'];
        $stdData->Contact_number = $req['Contact_number'];
        $stdData->Password = $req['password'];
        $stdData->save();

        return response()->json(['success' => 'Your are successfully registered Wait for approval']);
    }
    function get_StudentData()
    {
    }
}
