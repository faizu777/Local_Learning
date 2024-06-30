<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_Register_Data;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Register_Teacher_Con extends Controller
{
    public function RegisterTeacherData(Request $request)
    {
        $req = $request->validate([
            'name' => 'required',
            'Dob' => 'required',
            'Contact_number' => 'required|min:10|max:10',
            'WhatsApp_number' => 'required|min:10|max:10',
            'Adhaar_number' => 'required|min:12|max:12',
            'presentaddress' => 'required',
            'permanentaddress' => 'required',
            'tuitionname' => 'required',
            'teachingexp' => 'required',
            'fee' => 'required',
            'qualification' => 'required',
            'major' => 'required',
            'subject' => 'required',
            'board' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'Adhaar_image' => 'required|image',
            'Degree_image' => 'required|image',
            'email' => 'required|email|unique:teacher__register__datas',
            'profile_pic' => 'required|image',
        ]);
$Teacher= new Teacher_Register_Data();
$Teacher->Teacher_id='Teacher'.rand(100000,999999);
$Teacher->Name = $req['name'];
$Teacher->Dob = $req['Dob'];
$Teacher->phone_number = $req['Contact_number'];
$Teacher->whatsapp_number = $req['WhatsApp_number'];
$Teacher->adhaar_number = $req['Adhaar_number'];
$Teacher->present_address = $req['presentaddress'];
$Teacher->permanent_address = $req['permanentaddress'];
$Teacher->tuition_name = $req['tuitionname'];
$Teacher->teaching_experience = $req['teachingexp'];
$Teacher->expected_monthly_tuition_fee = $req['fee'];
$Teacher->qualification = $req['qualification'];
$Teacher->major_subject = $req['major'];
$Teacher->subject_can_teach = $req['subject'];
$Teacher->board_name = $req['board'];
$Teacher->gender = $req['gender'];
$Teacher->password = $req['password'];
$Teacher->status = 'not approved';
$Teacher->email= $req['email'];
if($req['Adhaar_image']!=NULL)
{
    $imageName =$req['name'].time(). '.'.$req['Adhaar_image']->getClientOriginalExtension();
$request->file('Adhaar_image')->move(public_path('Adhaar_images/'), $imageName);

    $Teacher->Adhaar_image = 'public/Adhaar_images/'.$imageName;
}
if($req['Degree_image']!=NULL)
{
    $imageName =$req['name'].time(). '.'.$req['Degree_image']->getClientOriginalExtension();
  $request->file('Degree_image')->move(public_path('Degree_images/'), $imageName);
    $Teacher->Degree_image = 'public/Degree_images/'.$imageName;
}
if($request->hasFile('profile_pic'))
        {
            $imageName =time(). '.'.$request->file('profile_pic')->extension();
            $request->file('profile_pic')->move(public_path('Teacher_images/'), $imageName);
            $Teacher->profile_img ='Teacher_images/'.$imageName;

        }
$Teacher->save();
return response()->json(['success' => 'Teacher Data Saved']);
}





}