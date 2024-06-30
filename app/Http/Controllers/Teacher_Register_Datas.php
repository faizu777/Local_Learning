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

class Teacher_Register_Datas extends Controller
{
    // protected $data;

    // public static function sendOTP($number)
    // {
    //     $sid = getenv('TWILIO_ACCOUNT_SID');
    //     $token = getenv('TWILIO_AUTH_TOKEN');
    //     $phone_number = getenv('TWILIO_PHONE_NUMBER');
    //     $otp = rand(1000, 9999);
    //     session()->put('otp', $otp);
    //     try {
    //         $twilio = new Client($sid, $token);
    //         $message = $twilio->messages->create(
    //             $number, // to
    //             [
    //                 'body' => 'Your verification code is ' . $otp,
    //                 'from' => $phone_number,
    //             ]
    //         );
    //         return true;
    //     } catch (Exception $e) {
    //         return false;
    //     }
    // }

    // public function RegisterTeacherData(Request $request)
    // {
    //     $req = $request->validate([
    //         'name' => 'required',
    //         'Dob' => 'required',
    //         'Contact_number' => 'required|min:10|max:10',
    //         'WhatsApp_number' => 'required|min:10|max:10',
    //         'Adhaar_number' => 'required|min:12|max:12',
    //         'presentaddress' => 'required',
    //         'permanentaddress' => 'required',
    //         'tuitionname' => 'required',
    //         'teachingexp' => 'required',
    //         'fee' => 'required',
    //         'qualification' => 'required',
    //         'major' => 'required',
    //         'subject' => 'required',
    //         'board' => 'required',
    //         'gender' => 'required',
    //         'password' => 'required',
    //         'Adhaar_image' => 'required|image',
    //         'Degree_image' => 'required|image',
    //     ]);

    //     $number = '+91' . $req['Contact_number'];

    //     if ($this->sendOTP($number)) {
    //         // Temporarily store form data in session excluding files
    //         session()->put('form_data', $request->except(['Adhaar_image', 'Degree_image']));
    //         // Store files temporarily
    //         $adhaarImagePath = $request->file('Adhaar_image')->store('temp');
    //         $degreeImagePath = $request->file('Degree_image')->store('temp');
    //         session()->put('adhaar_image_path', $adhaarImagePath);
    //         session()->put('degree_image_path', $degreeImagePath);

    //         return response()->json(['success' => 'OTP Sent Successfully'], 200);
    //     } else {
    //         session()->flush();
    //         return response()->json(['error' => 'Failed to send OTP'], 500);
    //     }
    // }

    // public function TeacherData_Save(Request $request)
    // {
    //     $otpdata = $request->validate([
    //         'digit1' => 'required',
    //         'digit2' => 'required',
    //         'digit3' => 'required',
    //         'digit4' => 'required'
    //     ]);

    //     $otpdata = implode('', $otpdata);

    //     if (session()->has('otp') && $otpdata == session()->get('otp')) {
    //         // Retrieve and save the form data
    //         $form_data = session()->get('form_data');
    //         $adhaar_image_path = session()->get('adhaar_image_path');
    //         $degree_image_path = session()->get('degree_image_path');

    //         $data = new Teacher_Register_Data();
    //         $data->name = $form_data['name'];
    //         $data->Dob = $form_data['Dob'];
    //         $data->phone_number = $form_data['Contact_number'];
    //         $data->whatsapp_number = $form_data['WhatsApp_number'];
    //         $data->adhaar_number = $form_data['Adhaar_number'];
    //         $data->present_address = $form_data['presentaddress'];
    //         $data->permanent_address = $form_data['permanentaddress'];
    //         $data->tuition_name = $form_data['tuitionname'];
    //         $data->teaching_experience = $form_data['teachingexp'];
    //         $data->expected_monthly_tuition_fee = $form_data['fee'];
    //         $data->qualification = $form_data['qualification'];
    //         $data->major_subject = $form_data['major'];
    //         $data->subject_can_teach = $form_data['subject'];
    //         $data->board_name = $form_data['board'];
    //         $data->gender = $form_data['gender'];
    //         $data->password = $form_data['password'];

    //         // Move files from temp to permanent storage
    //         $adhaarImageName = basename($adhaar_image_path);
    //         $degreeImageName = basename($degree_image_path);
    //         Storage::move($adhaar_image_path, 'public/adhaar_images/' . $adhaarImageName);
    //         Storage::move($degree_image_path, 'public/degree_images/' . $degreeImageName);

    //         $data->Adhaar_image = 'public/adhaar_images/' . $adhaarImageName;
    //         $data->Degree_image = 'public/degree_images/' . $degreeImageName;
    //         $data->status = 'not approved';
    //         $data->save();

    //         // Clear session data
    //         session()->forget(['otp', 'form_data', 'adhaar_image_path', 'degree_image_path']);

    //         return response()->json(['success' => 'Teacher Data Saved'], 200);
    //     } else {
    //         return response()->json(['error' => 'OTP is not correct'], 400);
    //     }
    // }
}

