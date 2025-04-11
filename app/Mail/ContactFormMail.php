<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $userMessage;

    // Constructor to pass data
    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->userMessage = $message;
    }

    // Build the email
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact_form')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone' => $this->phone,
                        'userMessage' => $this->userMessage,
                    ]);
    }

}
