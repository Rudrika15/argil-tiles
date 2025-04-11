@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Contact Argil Tiles for inquiries about
quartz slabs, pricing, and orders. Our team is ready to assist you with top-
quality artificial quartz." />
    <meta name="keywords" content="Contact Argil, Quartz Tiles Contact,
Argil Support, Argil Inquiry" />
    <meta property="og:title" content="Get in Touch with Argil Group – Contact Us
Today">
    <meta property="og:description"
        content="Have questions or need
assistance? Contact Argil Group for inquiries about our premium artificial
quartz stone slabs. We are here to help!">
    <meta property="og:image" content="https://www.argiltiles.com/images/
contact-og-image.jpg">
    <meta property="og:url" content="https://www.argiltiles.com/contact">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Get in Touch with Argil Group – Contact Us
Today">
    <meta name="twitter:description"
        content="Need help? Contact Argil Group for
inquiries about our premium artificial quartz stone slabs. Our team is ready to
assist you!">
    <meta name="twitter:image" content="https://www.argiltiles.com/path-to-contact
-image.jpg">
    <meta name="twitter:site" content="@ArgilGroup">
    <link rel="canonical" href="https://dev.argiltiles.com/contact" data-react- helmet="true">
    <title>Contact Us | Argil Tiles – Quartz Stone Manufacturers in Morbi, India</title>
@endsection


@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- page title -->
    <section class="page-title"
        style="background-image: url('https://www.kajariaceramics.com/concept-picture/high002650.jpg');">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Contact</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Contact</span>
                </div>
            </div>
        </div>
    </section>

    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h2 class="container">Home/Contact Us</h2>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/images/argileimage/contactsimage.png" alt="contact image"
                    class="img-responsive all-page-side-image">
            </div>
            <div class="col-md-6">
                <div class="contact-form-area1">
                    <div class="contact-title">Let's Be in Touch !!!</div>

                    <form id="contact-form" name="contact_form" class="default-form" action="{{ route('send.mail') }}"
                        method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 input">
                                <input type="text" name="form_name" value="" placeholder="Your Name "
                                    required="" class="inp">
                            </div>
                            <div class="col-md-10 input">
                                <input type="email" name="form_email" value="" placeholder="Email" required=""
                                    class="inp">
                            </div>
                            <div class="col-md-10 input">
                                <input type="text" name="form_phone" value="" placeholder="Contact Number"
                                    required="" class="inp">
                            </div>
                            <div class="col-md-10 input">
                                <textarea placeholder="Message" name="form_message" required="" class="inp"></textarea>
                            </div>
                            <div class="col-md-10">
                                <button type="submit" class="btn-one btn-class2 inp">Request Price Quote</button>
                                {{-- <input type="submit" class="btn-one btn-class2 inp" value="Request Price Quote"> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6098250503132!2d70.86080677429504!3d22.81691712397357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39598c54ff1c773b%3A0x8d065e671b879a69!2sARGIL%20GROUP%20-%20DISPLAY%20CENTER!5e0!3m2!1sen!2sin!4v1744186604830!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
