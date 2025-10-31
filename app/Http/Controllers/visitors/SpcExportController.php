<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpcExportController extends Controller
{
    //
    // SpcExportController.php
    public function submit(Request $request)
    {
        // Validate & store / send email
        // Example: Mail::to('export@argilgroup.com')->send(new ExportLeadMail($request->all()));
        return back()->with('success', 'Your quote request has been submitted!');
    }
}
