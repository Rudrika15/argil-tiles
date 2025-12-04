<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SpcQuartzExportRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // public function build()
    // {
    //     return $this->from(config('mail.from.address'), config('mail.from.name'))
    //         ->subject('New SPC Export Quote Request')
    //         ->view('emails.spc_export_request')
    //         ->with(['data' => $this->data]);
    // }
    public function build()
{
    $text = "
New SPC Export Quote Request

Name: {$this->data['name']}
Company: {$this->data['company_name']}
Email: {$this->data['email']}
ContactNo: {$this->data['contactno']}
Country: {$this->data['country']}
Message: " . ($this->data['message'] ?? 'N/A');

    return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('New SPC Export Quote Request')
        ->text('data:text/plain,' . $text);
}

}
