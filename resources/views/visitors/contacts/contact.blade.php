@extends('layouts.app')
@section('content')
    <div class="heading-title container-fluid">
        <h3 class="container">Home/Contact Us</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="asset/images/argileimage/contactsimage.png" alt="" width="100%" class="contact-img">
            </div>
            <div class="col-lg-6">
                <div class="contact-form-area1">
                    <div class="contact-title">Let's Be in Touch !!!</div>

                    <form id="contact-form" name="contact_form" class="default-form" action="{{ route('send.mail') }}"
                        method="post">
                        <div class="row">
                            <div class="col-lg-10 input">
                                <input type="text" name="form_name" value="" placeholder="Your Name "
                                    required="">
                            </div>
                            <div class="col-lg-10 input">
                                <input type="email" name="form_email" value="" placeholder="Email" required="">
                            </div>
                            <div class="col-lg-10 input">
                                <input type="text" name="form_phone" value="" placeholder="Contact Number"
                                    required="">
                            </div>
                            <div class="col-lg-10 input">
                                <textarea placeholder="Message" name="form_message" required=""></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn-one"
                           >Request Price Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid contact-map p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d58841.759328259286!2d70.8633817!3d22.8169122!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39598c54ff1c773b%3A0x8d065e671b879a69!2sARGIL%20GROUP%20-%20DISPLAY%20CENTER%20National%20Highway%208A%20Anand%20Nagar%20Morbi%2C%20Gujarat%20363642!3m2!1d22.816912199999997!2d70.86338169999999!5e0!3m2!1sen!2sin!4v1742370263288!5m2!1sen!2sin" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
