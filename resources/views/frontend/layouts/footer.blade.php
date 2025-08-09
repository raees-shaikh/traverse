<!-- start: Footer Area -->
<footer class="tj-footer-area">
    <div class="footer-top-area fix py-5">
        <div class="container">
            <div class="row rg-50 line">
                <div class=" col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-1 ">
                        <div class="footer-logo">
                            <a href="/">
                                <img src="frontend/assets/images/traverse_logo_rs.jpg" alt="travserselogo" class="rounded">
                            </a>
                        </div>
                        <p class="desc w-100 mt-4">
                            Our B2B e-commerce platform offers a seamless experience for businesses to discover,
                            connect, and purchase products in bulk. Whether you're a wholesaler, manufacturer, or
                            retailer, our platform provides an easy way to manage orders, track shipments, and access
                            competitive pricing. With a broad range of categories, secure payment methods, and dedicated
                            customer support, we empower businesses to thrive and scale.
                        </p>
                        <div class="footer-social mt-4">
                            <h5 class="title">Follow Us :</h5>
                            <ul>
                              <li class="linkedin">
                                            <a target="_blank"
                                                href="#"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>

                                         <li class="insta">
                                    <a href="https://www.instagram.com/traversesales/profilecard/?igsh=cTJ2bTQ1NDI2ZHh5"
                                        target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="facebook">
                                    <a target="_blank"
                                        href="https://www.facebook.com/people/Traverse-Sales/pfbid0i6tJS3jz9KuabSGxSFYkAHnzm6KWfy1L1G42gAk2So2rbpsvymMoyYeGr3fnqz5Rl/?rdid=6ko1Lmho0JY8x1Hq&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Cr9xqKwKs%2F"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>

                                <li class="twitter">
                                    <a href="https://x.com/traversesales?t=fK2K7RZ_rRuxN2LKMfekiw&s=09"
                                        target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li class="pinterest">
                                    <a href="https://pin.it/6ta6fSh6t" target="_blank"><i
                                            class="fa-brands fa-pinterest"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-6 col-sm-6 px-xl-5">
                    <div class="footer-widget footer1-col-3 widget_nav_menu">
                        <div class="footer-title">
                            <h4 class="title mb-4">Useful Links</h4>
                        </div>
                        <div class="widget-menu ">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/industries') }}">Industries</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ's</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget footer1-col-2 widget_nav_menu px-0">
                        <div class="footer-title">
                            <h4 class="title mb-4">Contact Us</h4>
                        </div>
                        <div class="widget-menu">
                            <ul>
                                <li class="d-flex"><i class="tji-location text-white mt-1"></i> <span
                                        class="mx-2">B Wing, 6th Floor, Supreme Business Park, Cliff Avenue Unit No. B, 501/a, Hiranandani Gardens, Powai, Mumbai - 400076.
                                    </span></li>
                                <li class="d-flex"><i class="tji-phone text-white mt-1"></i> <a class="mx-2"
                                        href="tel:919033331155">+91-9033331155</a></li>
                                <li class="d-flex"><i class="tji-email text-white mt-1"></i> <a class="mx-2"
                                        href="mailto:response@traversesales.com">response@traversesales.com</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area p-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content-area py-0">

                        <div class="copyright-text">
                            <p>
                                © {{ date('Y') }} All Rights Reserved Traverse Sales Solutions Pvt Ltd. |
                                Designed &
                                Developed By <a href="https://acetrot.com/" target="_blank"
                                    class="active-clr-bottom">Acetrot</a>
                            </p>
                        </div>
                        {{-- <div class="copyright-menu">
                            <ul>
                                <li><a href="/">Policy & Privacy</a></li>
                                <li><a href="/">Terms & Conditions</a></li>
                                <li><a href="{{ url('/faq') }}">FAQ's</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start: back to top -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn style-3">
            <i class="tji-arrow-up"></i>
            <span>GOTOP</span>
        </button>
    </div>
    <!-- end: back to top -->
</footer>
<!-- end: Footer Area -->

<!-- JS here -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="frontend/assets/js/bootstrap.bundle.min.js"></script>

<script src="frontend/assets/js/gsap.min.js"></script>
<script src="frontend/assets/js/gsap-scroll-to-plugin.min.js"></script>
<script src="frontend/assets/js/gsap-scroll-trigger.min.js"></script>
<script src="frontend/assets/js/gsap-split-text.min.js"></script>
<script src="frontend/assets/js/smooth-scroll.min.js"></script>

<script src="frontend/assets/js/appear.min.js"></script>
<script src="frontend/assets/js/wow.min.js"></script>
<script src="frontend/assets/js/odometer.min.js"></script>
<script src="frontend/assets/js/jquery-knob.js"></script>
<script src="frontend/assets/js/swiper.min.js"></script>
<script src="frontend/assets/js/nice-select.js"></script>
<script src="frontend/assets/js/venobox.min.js"></script>
<script src="frontend/assets/js/meanmenu.js"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

<script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#1abc9c'
            });
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#2196f3'
            });
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a'
            });
        @endif
    @else
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#3b3f5c'
            });
        @endif
    @endif
</script>
