<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
    }

    public function generateOTP()
    {
        return rand(1000, 9999);
    }

    public function sendOTP($to, $otp)
    {
        $this->client->messages->create(
            $to,
            [
                'from' => config('twilio.from'),
                'body' => "Your OTP is: {$otp}"
            ]
        );
    }
}
