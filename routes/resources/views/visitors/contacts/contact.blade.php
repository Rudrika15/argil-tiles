@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Contact</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Contact</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <div class="heading-title container-fluid">
        <h2 class="container">Home/Contact Us</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/images/argileimage/contactsimage.png" alt=""
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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d58841.759328259286!2d70.8633817!3d22.8169122!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39598c54ff1c773b%3A0x8d065e671b879a69!2sARGIL%20GROUP%20-%20DISPLAY%20CENTER%20National%20Highway%208A%20Anand%20Nagar%20Morbi%2C%20Gujarat%20363642!3m2!1d22.816912199999997!2d70.86338169999999!5e0!3m2!1sen!2sin!4v1742370263288!5m2!1sen!2sin"
            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
