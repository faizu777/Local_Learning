<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_Register_Data;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\UploadedFile;
class Teacher_Register_Datas extends Controller
{
    protected $data;

    public static function sendOTP($number)
    {
        $sid = getenv('TWILIO_ACCOUNT_SID');
        $token = getenv('TWILIO_AUTH_TOKEN');
        $phone_number = getenv('TWILIO_PHONE_NUMBER');
        $otp = rand(1000, 9999);
        session()->put('otp', $otp);
        try {
            $twilio = new Client($sid, $token);

            $message = $twilio->messages->create(
                $number, // to
                [
                    'body' => 'Your verification code is' . ' ' . $otp,
                    'from' => $phone_number,
                ],
            );
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    function RegisterTeacherData()
    {
        $req = request()->validate([
            'name' => 'required',
            'Dob' => 'required',
            'Contact_number' => 'required |min:10|max:10',
            'WhatsApp_number' => 'required |min:10|max:10',
            'Adhaar_number' => 'required |min:12|max:12',
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
            'Adhaar_image' => 'required',
            'Degree_image' => 'required',
        ]);

        $number = '+91' . $req['Contact_number'];
        if ($this->sendOTP($number)) {
            $teacher_image = $req['Adhaar_image'];
            $teacher_signature = $req['Degree_image'];

            $teacher_image_base64 = base64_encode(file_get_contents($teacher_image->getRealPath()));
            $teacher_signature_base64 = base64_encode(file_get_contents($teacher_signature->getRealPath()));

            $req = collect($req)
                ->merge([
                    'Adhaar_image' => $teacher_image_base64,
                    'Degree_image' => $teacher_signature_base64,
                ])
                ->all();
            session()->put('teacher_data', $req);
        } else {
            session()->flush();
        }
    }

    function TeacherData_Save()
    {
        $otpdata = request()->validate(['digit1' => 'required', 'digit2' => 'required', 'digit3' => 'required', 'digit4' => 'required']);

        $otpdata = implode('', $otpdata);
        if (session()->has('otp')) {
            if ($otpdata == session()->get('otp')) {
                $req = $this->data;
                Log::debug($req);
                if (is_null($req) || empty($req)) {
                    $this->query("set session wait_timeout=300");
                    $teacher_data = session()->get('teacher_data');

                    if ($teacher_data['Adhaar_image']) {
                        $image_base64 = $teacher_data['Adhaar_image'];

                        $image_data = base64_decode($image_base64);
                        $Adhaar_Image_Name = time() . '.' . pathinfo($image_data, PATHINFO_EXTENSION);
                        $image_data->move(public_path('storage/Adhaar_Image'), $Adhaar_Image_Name);
                    }

                    if ($teacher_data['Degree_image']) {
                        $signature_base64 = $teacher_data['Degree_image'];
                        $signature_data = base64_decode($signature_base64);




                        $Degree_Image_Name = time() . '.' . pathinfo($signature_data, PATHINFO_EXTENSION);
                        $signature_data->move(public_path('storage/Degree_Image'), $Degree_Image_Name);
                    }

                    $data = new Teacher_Register_Data();
                    $data->name = $teacher_data['name'];
                    $data->Dob = $teacher_data['Dob'];
                    $data->phone_number = $teacher_data['Contact_number'];
                    $data->whatsapp_number = $teacher_data['WhatsApp_number'];
                    $data->adhaar_number = $teacher_data['Adhaar_number'];
                    $data->present_address = $teacher_data['presentaddress'];
                    $data->permanent_address = $teacher_data['permanentaddress'];
                    $data->tuition_name = $teacher_data['tuitionname'];
                    $data->teaching_experience = $teacher_data['teachingexp'];
                    $data->expected_monthly_tuition_fee = $teacher_data['fee'];
                    $data->qualification = $teacher_data['qualification'];
                    $data->major_subject = $teacher_data['major'];
                    $data->subject_can_teach = $teacher_data['subject'];
                    $data->board_name = $teacher_data['board'];
                    $data->gender = $teacher_data['gender'];
                    $data->password = $teacher_data['password'];
                    $data->Adhaar_image = $Adhaar_Image_Name;
                    $data->Degree_image = $Degree_Image_Name;
                    $data->status = 'not approved';
                    $data->save();


                    return response()->json(['success' => 'Teacher Data Saved'], 200);
                } else {
                    return response()->json(['error' => 'Teacher Data empty'], 400);
                }
            } else {
                return response()->json(['error' => 'Otp is not correct']);
            }
        } else {
            return response()->json(['error' => 'Otp is not correct']);
        }
    }
}
