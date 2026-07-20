<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Mail\ExportFormMail;
use App\Mail\InquiryFormMail;
use App\Models\Blog;
use App\Models\CaseStudy;
use App\Models\Catelogue;
use App\Models\Cms;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Lvtproduct;
use App\Models\MetaPropertyBlog;
use App\Models\Quartzproduct;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitorController extends Controller
{
   public function home()
{
    // $testimonials = Testimonial::where('status', 'active')
    //     ->orderBy('display_order')
    //     ->take(3)
    //     ->get();

    $testimonials = Testimonial::inRandomOrder()->take(3)->get();

    return view('visitors.home.home', [
        'testimonials' => $testimonials
    ]);
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
       $blogs = Blog::latest()->paginate(9);
        return view('visitors.blog.blog', compact('blogs'));
    }
    // public function blogdetails($slug)
    // {

    //     $blog = Blog::where('slug', $slug)->firstOrFail();
    //     return view('visitors.blog.blogdetails', compact('blog'));
    // }
    public function blogdetails($slug)
{
    $blog = Blog::select(
                'blogs.*',
                'meta_property_blogs.author'
            )
            ->leftJoin(
                'meta_property_blogs',
                'blogs.id',
                '=',
                'meta_property_blogs.blogId'
            )
            ->where('blogs.slug', $slug)
            ->firstOrFail();

    return view('visitors.blog.blogdetails', compact('blog'));
}
    public function catalogue()
    {

        return view('visitors.catalogue.catalogue');
    }
    public function contact()
    {
        
    $testimonials = Testimonial::where('status', 'active')
        ->inRandomOrder()
        ->take(3)
        ->get();

    return view('visitors.contacts.contact', [
        'testimonials' => $testimonials
    ]);
        // return view('visitors.contacts.contact');
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
        $faqs = Faq::where('is_spc',1)->get();
        return view('visitors.products.spc products.spcproducts', compact('data','faqs'));
    }
    public function spcproductinquiry($slug)
    {
        // $data= Lvtproduct::find($id);
        $data = Lvtproduct::where('slug', $slug)->firstOrFail();
        return view('visitors.products.spc products.spcproductinquiry', compact('data'));
    }

    public function quartzsurface()
    {
        // $data = Quartzproduct::where('status', 'Active')->orderBy('id', 'desc')->get();
        $data = Quartzproduct::where('status', 'Active')->orderBy('id', 'desc')->paginate(9);
        $faqs = Faq::where('is_quartz', 1)->get();
        return view('visitors.products.quartz surface.quartzsurface', compact('data','faqs'));
    }
    public function quartzinquiry($slug)
    {

        // $data= Quartzproduct::find($id);
        $data = Quartzproduct::where('slug', $slug)->firstOrFail();
        return view('visitors.products.quartz surface.quartzsurfaceinquiry', compact('data'));
    }
    public function exports()
    {
        return view('visitors.exports.exports');
    }
    public function exportusa()
    {
        return view('visitors.exports.usa');
    }
    public function exportuae()
    {
        return view('visitors.exports.uae');
    }
    public function exportcanada()
    {
        return view('visitors.exports.canada');
    }
    public function exportuk()
    {
        return view('visitors.exports.uk');
    }
    public function exportaustralia()
    {
        return view('visitors.exports.australia');
    }
    public function exportrussia()
    {
        return view('visitors.exports.russia');
    }

    public function exportmail(Request $request)
    {
        try {
            $validated = $request->validate([
                'form_name' => 'required|string|max:255',
                'form_email' => 'required|email',
                'form_phone' => 'required|string',
                'category' => 'required|string',
                'export_country' => 'nullable|string|max:100',
                'form_message' => 'nullable|string',
            ]);

            Mail::to('social.media@argiltiles.com')
                ->send(new ExportFormMail(
                    $validated['form_name'],
                    $validated['form_email'],
                    $validated['form_phone'],
                    $validated['category'],
                    $validated['export_country'] ?? 'Global',
                    $validated['form_message'] ?? ''
                ));

            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to send message right now. Please try again.',
            ], 500);
        }
    }

    public function new_sitemap(Request $request){

        $blogs = Blog::where('status', 'active')->get();

         $authors = MetaPropertyBlog::select('author')
        ->whereNotNull('author')
        ->where('author', '!=', '')
        ->distinct()
        ->get();


        $caseStudies = CaseStudy::where('status', 'published')->get();

        $testimonials = Testimonial::where('status', 'active')->get();
        
        $cmsPages = Cms::where('status', 1)->get();

        return response()
            ->view('new_sitemap', compact(
                'blogs',
                'authors',
                'caseStudies',
                'testimonials',
                'cmsPages'
            ))
            ->header('Content-Type', 'application/xml');

    }

    public function html(Request $request){
       $blogs = Blog::where('status', 'active')->get();

    $caseStudies = CaseStudy::where('status', 'published')->get();

    $authors = MetaPropertyBlog::select('author')
        ->whereNotNull('author')
        ->where('author', '!=', '')
        ->distinct()
        ->get();

    $cmsPages = Cms::where('status', 1)->get();

    return view('new_sitemap_html', compact(
        'blogs',
        'caseStudies',
        'authors',
        'cmsPages'
    ));
}
}
