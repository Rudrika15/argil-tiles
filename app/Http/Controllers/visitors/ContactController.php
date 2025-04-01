<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'form_name' => 'required|string',
            'form_email' => 'required|email',
            'form_phone' => 'required|string',
            'form_message' => 'required|string',
        ]);

        $data = $request->all();
        Mail::send([], [], function ($message) use ($data) {
            $message->to('rjjadav7773@gmail.com')
                    ->subject('Test Email')
                    ->setBody('<h1>Hello, ' . $data['name'] . '</h1><p>' . $data['message'] . '</p>', 'text/html');
        });
        // Mail::to($form_email)->send(new SendMail($subject,$message));
        // return back()->with('success', 'Your message has been sent successfully!');
    }
}
