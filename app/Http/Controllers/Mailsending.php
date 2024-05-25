<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact_us_mail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\EmailSending;
class Mailsending extends Controller
{
    public function sendMail()
    {
$maildata=request()->validate([
    'name'=>'required',
    'email'=>'required',
    'subject'=>'required',
    'message'=>'required',
]);

dispatch(new EmailSending($maildata['name'],$maildata['email'],$maildata['subject'],$maildata['message']));
return redirect()->back()->with('success','Your message has been sent successfully');
    }
}
