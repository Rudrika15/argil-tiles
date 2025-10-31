<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Mail\SpcExportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SpcExportController extends Controller
{
    //
    // SpcExportController.php
    public function submit(Request $request)
    {
        // Validate & store / send email
        // Example: Mail::to('export@argilgroup.com')->send(new ExportLeadMail($request->all()));


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:10',
            'country' => 'required|string|max:100',
            'message' => 'nullable|string',
        ]);

        Mail::to('social.media@argiltiles.com')
            ->send(new SpcExportMail($validated));

        return back()->with('success', 'Your quote request has been submitted!');
    }
}
