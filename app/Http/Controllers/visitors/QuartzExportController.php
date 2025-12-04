<?php

namespace App\Http\Controllers\visitors;

use App\Models\Contact;
use App\Models\Quartzproduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SpcQuartzExportRequestMail;

class QuartzExportController extends Controller
{
    public function quartzExportPage()
    {
         $products = Quartzproduct::inRandomOrder()->limit(3)->get();

        return view('visitors.landing.quartz-export', compact('products'));
    }

    public function submit(Request $request)
    {
        // Validate request
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contactno' => 'required|string|max:50',
            'country' => 'required|string|max:100',
            'message' => 'nullable|string',
        ]);

        // Save to database
        Contact::create($data);

        // Prepare email body
        $body = "
New Contact / Quartz Export Request

Name: {$data['name']}
Company: {$data['company_name']}
Email: {$data['email']}
ContactNo: {$data['contactno']}
Country: {$data['country']}
Message: {$data['message']}
";

        // Send email
        $recipient = 'vishvagajjar17@gmail.com';
        Mail::raw($body, function ($message) use ($recipient) {
            $message->to($recipient)
                ->subject('New Contact / Quartz Export Request')
                ->from(config('mail.from.address'), config('mail.from.name'));
        });

        // Redirect back with success
        return redirect()->back()->with('success', 'Quote request sent and saved successfully.');
    }
}
