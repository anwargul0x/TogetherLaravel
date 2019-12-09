<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailme;


class MailController extends Controller
{
    public function Send(Request $request)
    {
        Mail::to('ahmedhasan949@gmail.com')->send(new SendMail($request));

    }
}
