<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Otp_verify extends Controller
{
    public $otp;
    public function verify()
{
    $otpaccept=request()->validate([
        'digit1'=>'required',
        'digit2'=>'required',
        'digit3'=>'required',
        'digit4'=>'required',
    ]);
    $otp=$otpaccept['digit1'].$otpaccept['digit2'].$otpaccept['digit3'].$otpaccept['digit4'];
    dd($otpaccept);
if($otpaccept['otp']==$otp){
    return redirect()->back()->with('success','Your otp is correct');
}else{
    return redirect()->back()->with('error','Your otp is not correct');
}

}
    public function sendotp()
    {
        $otp=rand(1000,9999);
    }
}
