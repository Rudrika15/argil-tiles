<?php

namespace App\Http\Controllers\visitors;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lvtproduct;
use App\Mail\SpcQuartzExportRequestMail;

class SpcExportController extends Controller
{
    public function spcExportPage()
    {
        // $products = Lvtproduct::orderBy('names')->get();
        $products = Lvtproduct::latest()->limit(3)->get();

        return view('visitors.landing.spc-export', compact('products'));
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
New Contact / SPC Export Request

Name: {$data['name']}
Company: {$data['company_name']}
Email: {$data['email']}
ContactNo: {$data['contactno']}
Country: {$data['country']}
Message: {$data['message']}
";

    // Send email
    $recipient = config('mail.from.address');
    Mail::raw($body, function ($message) use ($recipient) {
        $message->to($recipient)
                ->subject('New Contact / SPC Export Request')
                ->from(config('mail.from.address'), config('mail.from.name'));
    });

    // Redirect back with success
    return redirect()->back()->with('success', 'Quote request sent and saved successfully.');
}

}
