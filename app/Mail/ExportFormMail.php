<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExportFormMail extends Mailable
{
    use SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $category;
    public $exportCountry;
    public $msg;

    public function __construct($name, $email, $phone, $category, $exportCountry, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->category = $category;
        $this->exportCountry = $exportCountry;
        $this->msg = $msg;
    }

    public function build()
    {
        $subjectCountry = strtoupper($this->exportCountry ?: 'GLOBAL');

        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject("New Export Enquiry - {$subjectCountry}")
            ->view('emails.export_form')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'category' => $this->category,
                'exportCountry' => $this->exportCountry,
                'msg' => $this->msg,
            ]);
    }
}
