@extends('frontend.layouts.app')
@section('title', 'Contact Traverse Sales | Get in Touch')

@section('content')

    <main id="primary" class="site-main">
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="frontend/assets/images/bg/pheader-bg.webp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title text-anim">Contact</h1>
                            <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                                <span>
                                    <a href="{{ url('/') }}">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <span>/</span>
                                <span>
                                    <span>Contact</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Breadcrumb Section -->


        <!-- start: About Section -->
        <section class="tj-about-info section-space pt-5 pb-0">
            <div class="container">
                <div class="sec-heading mb-0 text-center mb-4">
                    <h2 class="sec-title text-anim">Get In Touch</h2>
                </div>
                <div class="row rg-30 justify-content-between">

                    <div class="col-md-12">
                        <div class="desc mb-30 wow fadeInUp text-center" data-wow-delay="0.3s">
                            <p>We’re ready to help you scale your international business. Whether you need a sourcing quote,
                                logistics assistance, or strategic advice — our global trade specialists are just a message
                                away. We typically respond within one business hour to help you move fast and confidently.
                            </p>

                        </div>

                    </div>
                </div>
            </div>

        </section>
        <!-- end: About Section -->

        <!-- start: Feature Section -->
        <section class="tj-feature-section section-bottom-space pb-5 pt-lg-3 pt-0">
            <div class="container">
                <div class=" mb-0 text-center w-100 col-12">
                    <h2 class="sec-title text-anim w-100">Global Support, Local Expertise</h2>
                </div>
                <div class="row rg-30 contact-icon mt-4">


                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-item hover-bg contact-box-card">
                            <div class="feature-icon svg-animate">
                                <i class="fa-solid fa-building theme-secondary-custom-color"></i>

                            </div>
                            <div class="feature-content">
                                <h5 class="title">Headquarters</h5>
                                <div class="desc pb-lg-5">
                                    <p>Traverse Sales Pvt. Ltd</p>
                                    {{-- <p>103, Kotecha Nagar, Rajkot, Gujarat – 360001, India.</p> --}}
                                    <p>B Wing, 6th Floor, Supreme Business Park, Cliff Avenue Unit No. B, 501/a, Hiranandani Gardens, Powai, Mumbai - 400076.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-item hover-bg contact-box-card">
                            <div class="feature-icon svg-animate">

                                <i class="fa-solid fa-location-dot theme-secondary-custom-color"></i>

                            </div>
                            <div class="feature-content">
                                <h5 class="title">
                                    Regional Offices</h5>
                                <div class="desc">
                                    <p>Dubai, UAE</p>
                                    <p>Toronto, Canada</p>
                                    <p>United Kingdom</p>
                                    <p>Singapore</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end: Feature Section -->

        <!-- start: Contact Bottom Section -->
        <section class="tj-contact-area section-bottom-space pb-5">
            <div class="container">
                <div class="row rg-50">
                    <!-- contact form -->
                    <div class="col-lg-6">
                        <div class="contact-form-one style-2 wow fadeInUp" data-wow-delay="0.1s">
                            <span class="sub-title wow fadeInUp text-primary" data-wow-delay="0.1s">Get In Touch</span>
                            <h3 class="title text-anim mb-3 mt-2">Quick <span>Inquiry</span> Form </h3>
                            <p class="mb-3">Please fill out the form below, and our team will get back to you with
                                personalized support tailored to your inquiry.</p>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="text" id="name" name="name"
                                                placeholder="Enter Full Name" minlength="3" maxlength="50" required />
                                            @if ($errors->has('name'))
                                                <div class="text-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-input">
                                            <input type="email" id="email" name="email"
                                                placeholder="Enter Your Email" minlength="3" maxlength="50" required />
                                            @if ($errors->has('email'))
                                                <div class="text-danger" role="alert">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-input">
                                            <div class="form-input">
                                                <input type="text" id="company" name="company"
                                                    placeholder="Enter Company Name" minlength="3" maxlength="50"
                                                    required />
                                                @if ($errors->has('company'))
                                                    <div class="text-danger" role="alert">
                                                        {{ $errors->first('company') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-input input-textarea">
                                            <textarea id="message" name="message" placeholder="Enter Your Message" minlength="3" maxlength="100" required></textarea>
                                            @if ($errors->has('message'))
                                                <div class="text-danger" role="alert">
                                                    {{ $errors->first('message') }}
                                                </div>
                                            @endif
                                            @if ($errors->has('recaptcha_response'))
                                                <div class="text-danger" role="alert">
                                                    {{ $errors->first('recaptcha_response') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="submit-button">
                                        <button type="submit" class="tj-primary-btn">
                                            <span class="btn_inner">
                                                <span class="btn_icon">
                                                    <span>
                                                        <i class="tji-arrow-right"></i>
                                                        <i class="tji-arrow-right"></i>
                                                    </span>
                                                </span>
                                                <span class="btn_text">
                                                    <span>Send Inquiry</span>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- contact map -->
                    <div class="col-lg-6">
                        <div class="google-map wow fadeInUp" data-wow-delay="0.3s">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7539.844208664499!2d72.89873659357912!3d19.111072900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c700125ab317%3A0x121de566e27bcbbd!2sSupreme%20Business%20Park%20B%20wing!5e0!3m2!1sen!2sin!4v1753855507111!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4197.258414643165!2d70.78129698219404!3d22.291598306229908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbb78062c385%3A0xe730683229ef40a6!2sGujarat%20Housing%20Board%20Garden!5e0!3m2!1sen!2sin!4v1749546855392!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Contact Bottom Section -->


        <!-- start: Contact Top Section -->
        <section class="tj-contact-area section-space pb-5 pt-0">
            <div class="container">

                <div class="row rg-30">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="contact-item contact-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="contact-icon">
                                <i class="fa-solid fa-info theme-secondary-custom-color"></i>
                            </div>
                            <h3 class="contact-title">General Inquiries</h3>
                            <ul class="contact-list text-center">
                                <li><i class="fa-solid fa-envelope mx-1"></i> <a href="mailto:contact@traversesales.com"
                                        target="_blank">contact@traversesales.com</a></li>
                                <li><i class="fa-solid fa-phone mx-1"></i> <a href="tel:919033331155"
                                        target="_blank">+91-9033331155</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="contact-item contact-card style-2 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="contact-icon">
                                <i class="fa-solid fa-handshake theme-secondary-custom-color"></i>
                            </div>
                            <h3 class="contact-title">Partnerships & Collaborations</h3>
                            <ul class="contact-list text-center">
                                <li> <i class="fa-solid fa-envelope mx-1"></i> <a href="mailto:partners@traversesales.com"
                                        target="_blank">partners@traversesales.com</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="contact-item contact-card style-2 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="contact-icon">
                                <i class="fa-solid fa-headset theme-secondary-custom-color"></i>
                            </div>
                            <h3 class="contact-title">Client Support</h3>
                            <ul class="contact-list text-center">

                                <li><i class="fa-solid fa-envelope mx-1"></i> <a href="mailto:response@traversesales.com"
                                        target="_blank">response@traversesales.com</a></li>
                                {{-- <li><i class="fa-solid fa-message mx-1"></i> Live Chat Available</li> --}}
                                <li><i class="fa-solid fa-clock mx-1"></i> Mon–Fri: 9AM–6PM (GMT+4)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Contact Top Section -->
        <!-- start: Cta Section -->
        <section class="tj-cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-wrapper w-100">
                            <div class="cta-title w-100 text-center">
                                <div class="footer-social text-center">
                                    <h3 class="text-white">Follow Us</h3>
                                    <ul class="contact-social-links contact text-center mx-auto">
                                      <li>
                                            <a target="_blank"
                                                href="#"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                          <li>
                                            <a href="https://www.instagram.com/traversesales/profilecard/?igsh=cTJ2bTQ1NDI2ZHh5"
                                                target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                                href="https://www.facebook.com/people/Traverse-Sales/pfbid0i6tJS3jz9KuabSGxSFYkAHnzm6KWfy1L1G42gAk2So2rbpsvymMoyYeGr3fnqz5Rl/?rdid=6ko1Lmho0JY8x1Hq&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Cr9xqKwKs%2F"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                         <li>
                                            <a href="https://x.com/traversesales?t=fK2K7RZ_rRuxN2LKMfekiw&s=09"
                                                target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                      
                                        <li>
                                            <a href="https://pin.it/6ta6fSh6t" target="_blank"><i
                                                    class="fa-brands fa-pinterest"></i></a>
                                        </li>
                                       
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <img class="cta-shape-1" src="frontend/assets/images/shapes/cta-shapes-1.png" alt="Shapes">
            <img class="cta-shape-2" src="frontend/assets/images/shapes/cta-shapes-2.png" alt="Shapes">
        </section>
        <!-- end: Cta Section -->


    </main>
@endsection

@section('metatags')
    <title>Contact Traverse Sales | Get In Touch</title>
    <meta name="description"
        content="Contact Traverse Sales for expert B2B sourcing, cross-
border logistics, and global trade support. Fast RFQ response guaranteed." />
    <meta property="og:title" content="Contact Traverse Sales – Let's Talk Global Growth" />
    <meta property="og:description"
        content="Get in touch with Traverse Sales for fast, reliable
global sourcing and B2B trade assistance." />
@endsection

@section('js')
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            // alert('hell')
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                })
            })
        }
    </script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://www.traversesales.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "https://www.traversesales.com/services"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Industries",
      "item": "https://www.traversesales.com/industries"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "About",
      "item": "https://www.traversesales.com/about"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Contact",
      "item": "https://www.traversesales.com/contact"
    }
  ]
}
</script>
@endsection
