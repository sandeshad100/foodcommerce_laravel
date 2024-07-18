<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $toEmail = "ninjacoder55@gmail.com";
        $message = "Hello, Welcome to SajiloKotha";
        $subject = "Welcome to YahooBaba";

        $request = Mail::to($toEmail)->send(new welcomeemail($message, $subject));
        dd($request);
    }
}
