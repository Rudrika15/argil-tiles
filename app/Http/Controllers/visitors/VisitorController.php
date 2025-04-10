<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Catelogue;
use App\Models\Lvtproduct;
use App\Models\Quartzproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitorController extends Controller
{
    public function home()
    {
        return view('visitors.home.home');
    }
    public function profile()
    {
        return view('visitors.corporate.profile.profile');
    }
    public function about()
    {
        return view('visitors.corporate.about.about');
    }
    public function documentaryfilm()
    {
        return view('visitors.corporate.document.documentaryfilm');
    }
    public function corevalue()
    {
        return view('visitors.corporate.core value.corevalue');
    }
    public function groupcompany()
    {
        return view('visitors.corporate.group company.groupcompany');
    }
    public function achievement()
    {
        return view('visitors.corporate.achivement.achievment');
    }
    public function plants()
    {
        return view('visitors.corporate.plants.plants');
    }
    public function quality()
    {
        return view('visitors.corporate.quality.quality');
    }
    public function catalogue()
    {

        return view('visitors.catalogue.catalogue');
    }
    public function contact()
    {
        return view('visitors.contacts.contact');
    }
    public function privacyPolicy()
    {
        return view('visitors.privacy.privacy');
    }



    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'form_name' => 'required|string|max:255',
            'form_email' => 'required|email',
            'form_phone' => 'required|string',
            'form_message' => 'required|string',
        ]);

        // Collect the validated form data
        $name = $validated['form_name'];
        $email = $validated['form_email'];
        $phone = $validated['form_phone'];
        $message = $validated['form_message'];

        // Send the email using the ContactFormMail Mailable
        Mail::to('rjjadav7773@gmail.com')  // Replace with your own email address
            ->send(new ContactFormMail($name, $email, $phone, $message));

        // Redirect back with success message
        return view('visitors.contacts.contact')->with('success', 'Your message has been sent!');

    }

    public function spcproducts()
    {
        $data = Lvtproduct::orderBy('id', 'desc')->get();
        return view('visitors.products.spc products.spcproducts',compact('data'));
    }
    public function spcproductinquiry($id){

        $data= Lvtproduct::find($id);

        return view('visitors.products.spc products.spcproductinquiry',compact('data'));
    }

    public function quartzsurface()
    {
        $data = Quartzproduct::orderBy('id', 'desc')->get();
        return view('visitors.products.quartz surface.quartzsurface',compact('data'));
    }
    public function quartzinquiry($id){

        $data= Quartzproduct::find($id);
        // $data= Lvtproduct::find($id);
        // return $data;
        return view('visitors.products.quartz surface.quartzsurfaceinquiry',compact('data'));
    }


}
