<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;

class MailController extends Controller
{
    public function sendContactMail(Request $request)
    {
        $email = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

         $contact = new Contact($email);

    }
}
