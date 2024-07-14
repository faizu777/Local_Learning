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
use App\Models\Student_Register;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\register;

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
            'Adhaar_images.*' => 'required|image',
            'Degree_images.*' => 'required|image',
            'email' => 'required|email|unique:teacher__register__datas',
            'profile_pic' => 'required|image|max:6048',
            'city' => 'required',
            'area' => 'required',
        ], [
            'name.required' => 'Please enter your name.',
            'Dob.required' => 'Please enter your date of birth.',
            'Contact_number.required' => 'Please enter your contact number.',
            'Contact_number.min' => 'Contact number must be 10 digits.',
            'Contact_number.max' => 'Contact number must be 10 digits.',
            'WhatsApp_number.required' => 'Please enter your WhatsApp number.',
            'WhatsApp_number.min' => 'WhatsApp number must be 10 digits.',
            'WhatsApp_number.max' => 'WhatsApp number must be 10 digits.',
            'Adhaar_number.required' => 'Please enter your Adhaar number.',
            'Adhaar_number.min' => 'Adhaar number must be 12 digits.',
            'Adhaar_number.max' => 'Adhaar number must be 12 digits.',
            'presentaddress.required' => 'Please enter your present address.',
            'permanentaddress.required' => 'Please enter your permanent address.',
            'tuitionname.required' => 'Please enter your tuition name.',
            'teachingexp.required' => 'Please enter your teaching experience.',
            'fee.required' => 'Please enter your fee.',
            'qualification.required' => 'Please enter your qualification.',
            'major.required' => 'Please enter your major.',
            'subject.required' => 'Please enter your subject.',
            'board.required' => 'Please enter your board.',
            'gender.required' => 'Please select your gender.',
            'password.required' => 'Please enter your password.',
            'Adhaar_image.required' => 'Please upload your Adhaar image.',
            'Adhaar_image.image' => 'Please upload a valid image for Adhaar.',
            'Degree_image.required' => 'Please upload your degree image.',
            'Degree_image.image' => 'Please upload a valid image for degree.',
            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter a valid email.',
            'email.unique' => 'Email already exists.',
            'profile_pic.required' => 'Please upload your profile picture.',
            'profile_pic.image' => 'Please upload a valid image for profile picture.',
            'profile_pic.max' => 'Profile picture must be less than 6MB.',
            'profile_pic.dimensions' => 'Profile picture must be size image with in height 500 x width 500 pixels.',
            'city.required' => 'Please enter your city.',
            'area.required' => 'Please enter your area.',
        ]);

        $Teacher = new Teacher_Register_Data();
        $Teacher->Teacher_id = 'Teacher' . rand(100000, 999999);
        $Teacher->Name = $req['name'];
        $Teacher->Dob = $req['Dob'];
        $Teacher->city = $req['city'];
        $Teacher->area = $req['area'];
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
        $Teacher->email = $req['email'];

        if ($request->hasFile('Adhaar_images')) {
            $adhaarImages = [];
            foreach ($request->file('Adhaar_images') as $file) {
                $imageName = 'teacher_adhaar_image' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('Adhaar_images/'), $imageName);
                $adhaarImages[] = 'Adhaar_images/' . $imageName;
            }
            $Teacher->Adhaar_image = json_encode($adhaarImages); // Store as JSON array
        }

        if ($request->hasFile('Degree_images')) {
            $degreeImages = [];
            foreach ($request->file('Degree_images') as $file) {
                $imageName = 'teacher_degree_image' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('Degree_images/'), $imageName);
                $degreeImages[] = 'Degree_images/' . $imageName;
            }
            $Teacher->Degree_image = json_encode($degreeImages); // Store as JSON array
        }

        if ($request->hasFile('profile_pic')) {
            $imageName = time() . '.' . $request->file('profile_pic')->extension();
            $request->file('profile_pic')->move(public_path('Teacher_images/'), $imageName);
            $Teacher->profile_img = 'Teacher_images/' . $imageName;
        }

        $Teacher->save();
        return response()->json(['success' => 'Teacher Data Saved']);
    }






public function update_teacher(Request $request)
{
return response()->json(['success' => $request->all()]);
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
        'email' => 'required|email',
        'Teacher_id' => 'required',

    ]);

    $Teacher = Teacher_Register_Data::where('Teacher_id', $req['Teacher_id'])->first();

    if (!$Teacher) {
        return back()->withErrors(['Teacher_id' => 'Teacher not found']);
    }

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
    $Teacher->email = $req['email'];

    if ($request->hasFile('Degree_image')) {
        $imageName = 'teacher_degree_image' . time() . '.' . $request->file('Degree_image')->getClientOriginalExtension();
        $request->file('Degree_image')->move(public_path('Degree_images/'), $imageName);
        $Teacher->Degree_image = 'Degree_images/' . $imageName;
    }

    if ($request->hasFile('profile_pic')) {
        $imageName = time() . '.' . $request->file('profile_pic')->getClientOriginalExtension();
        $request->file('profile_pic')->move(public_path('Teacher_images/'), $imageName);
        $Teacher->profile_img = 'Teacher_images/' . $imageName;
    }

    $Teacher->save();

    return response()->json(['success' => 'Profile updated successfully']);
}
public function update_profile(Request $request)
{

    if(session()->has('user_id'))
    {
        $Teacher = Teacher_Register_Data::where('Teacher_id', session()->get('user_id'))->first();
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path('Teacher_images/'), $imageName);
            $Teacher->profile_img = 'Teacher_images/' . $imageName;
            $Teacher->save();
            return back()->with('success', 'Profile updated successfully');
        }
    }
    return redirect('/login-user');


}
public function Teacher_Detail($id)
{
    $teacher = Teacher_Register_Data::where('Teacher_id', $id)->first();

    $student = Student_Register::where('city',$teacher->city)->where('area',$teacher->area)->limit(10)->orderBy('id','desc')->get();



    return view('user-teacher',compact('teacher','student'));

}
function notification(Request $request)
{
    if($request->has('teacher_id'))
    {
        if($request->has('subject'))
        {
            if($request->has('student_id'))
            {
                $notification = Notification::where('teacher_id',$request->teacher_id)->where('subject',$request->subject)->where('student_id',$request->student_id)->first();
                if($notification)
                {
                    return response()->json(['error' => 'Notification already sent'],400);
                }
                $notification = new Notification();
                $notification->teacher_id = $request->teacher_id;
                $notification->subject = $request->subject;
                $notification->student_id = $request->student_id;
                $notification->save();
                return response()->json(['success' => 'Notification Sent Successfully'],200);
            }

        }

    }
    return response()->json(['error' => 'Invalid Request'],400);
}


}
