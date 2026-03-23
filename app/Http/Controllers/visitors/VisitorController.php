<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\InquiryFormMail;
use App\Models\Blog;
use App\Models\Catelogue;
use App\Models\Contact;
use App\Models\Inquiry;
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
    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('visitors.blog.blog', compact('blogs'));
    }
    public function blogdetails($slug)
    {

        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('visitors.blog.blogdetails', compact('blog'));
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
        $request->validate([
            'form_name' => 'required|string|max:255',
            'form_email' => 'required|email',
            'form_phone' => 'required|string',
            'form_message' => 'required|string',
        ]);


        $name = $request->input('form_name');
        $email = $request->input('form_email');
        $phone = $request->input('form_phone');
        $message = $request->input('form_message');

        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->contactno = $phone;
        $contact->message = $message;
        $contact->save();


        // Send the email using the ContactFormMail Mailable
        Mail::to('social.media@argiltiles.com')  // Replace with your own email address
            ->send(new ContactFormMail($name, $email, $phone, $message));

        // Redirect back with success message
        return response()->json(['success' => true]);
    }

    public function sendinquiry(Request $request)
    {


        // Validate the form data
        $request->validate([
            'form_name' => 'required|string|max:255',
            'form_email' => 'required|email',
            'form_phone' => 'required|string',
            'form_message' => 'required|string',
        ]);


        $name = $request->input('form_name');
        $email = $request->input('form_email');
        $phone = $request->input('form_phone');
        $message = $request->input('form_message');

        $inquiry = new Inquiry();
        // return $inquiry;
        $inquiry->subject = $request->product_name;
        // $inquiry->subject = 'Product Inquiry';
        $inquiry->name = $name;
        $inquiry->email = $email;
        $inquiry->phone = $phone;
        $inquiry->message = $message;
        $inquiry->details = $request->product_details;
        // $inquiry->details = 'spc';
        $inquiry->save();

        $message = "Product Name : " . $request->product_name . " \n  " . $message;
        // Send the email using the ContactFormMail Mailable
        Mail::to('social.media@argiltiles.com')  // Replace with your own email address
            ->send(new InquiryFormMail($name, $email, $phone, $message));

        // Redirect back with success message
        return response()->json(['success' => true]);
    }

    public function spcproducts()
    {
        $data = Lvtproduct::orderBy('names')->paginate(6); // 9 items per page (adjust as needed)

        return view('visitors.products.spc products.spcproducts', compact('data'));
    }
    public function spcproductinquiry($slug)
    {

        // $data= Lvtproduct::find($id);
        $data = Lvtproduct::where('slug', $slug)->firstOrFail();

        return view('visitors.products.spc products.spcproductinquiry', compact('data'));
    }

    public function quartzsurface()
    {
        $data = Quartzproduct::where('status','Active')->orderBy('id', 'desc')->get();
        return view('visitors.products.quartz surface.quartzsurface', compact('data'));
    }
    public function quartzinquiry($slug)
    {

        // $data= Quartzproduct::find($id);
        $data = Quartzproduct::where('slug', $slug)->firstOrFail();
        return view('visitors.products.quartz surface.quartzsurfaceinquiry', compact('data'));
    }
}
