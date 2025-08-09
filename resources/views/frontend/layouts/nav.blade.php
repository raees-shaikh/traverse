
   {{-- <div class="mouseCursor cursor-outer"></div>
   <div class="mouseCursor cursor-inner"><span>Drag</span></div> --}}

   <!-- Preloader Start -->
   <div class="preloader">
      <div class="loading-container">
         <div class="loading"></div>
         <div id="loading-icon"><img src="frontend/assets/images/fav.png" alt="loader"></div>
      </div>
   </div>
   <!-- Preloader End -->


   <!-- start: Hamburger Menu -->
   <div class="body-overlay"></div>
   <div class="hamburger-area" data-lenis-prevent="">
      <div class="hamburger_bg"></div>
      <div class="hamburger_wrapper">
         <div class="hamburger_top d-flex align-items-center justify-content-between">
            <div class="hamburger_logo">
               <a href="{{url('/')}}" class="mobile_logo">
                  <img src="frontend/assets/images/traverse_logo_rs.jpg" alt="Logo" class="rounded">
               </a>
            </div>
            <div class="hamburger_close">
               <button class="hamburger_close_btn hamburgerCloseBtn"><i class="fa-thin fa-times"></i></button>
            </div>
         </div>

         <div class="hamburger_menu">
            <div class="mobile_menu"></div>
         </div>

         <div class="hamburger-infos">
            <h4 class="hamburger-title">Contact info</h4>
            <div class="contact-info">
               <div class="contact_item">
                  <span class="subtitle">Email</span>
                  <div class="text"><a class="link" href="mailto:response@traversesales.com">response@traversesales.com</a></div>
               </div>
               <div class="contact_item">
                  <span class="subtitle">Phone</span>
                  <div class="text"><a class="link" href="tel:919033331155">+91-9033331155</a></div>
               </div>
               <div class="contact_item">
                  <span class="subtitle">Location</span>
                  <div class="text">B Wing, 6th Floor, Supreme Business Park, Cliff Avenue Unit No. B, 501/a, Hiranandani Gardens, Powai, Mumbai - 400076.</div>
               </div>
            </div>
         </div>
         <div class="hamburger-socials">
            <h4 class="hamburger-title">Follow us</h4>
            <ul>
             <li class="linkedin">
                  <a target="_blank"  href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                  <li class="insta">
                  <a href="https://www.instagram.com/traversesales/profilecard/?igsh=cTJ2bTQ1NDI2ZHh5" target="_blank"><i class="fa-brands fa-instagram"></i></a>
               </li>
               <li class="facebook">
                  <a target="_blank" href="https://www.facebook.com/people/Traverse-Sales/pfbid0i6tJS3jz9KuabSGxSFYkAHnzm6KWfy1L1G42gAk2So2rbpsvymMoyYeGr3fnqz5Rl/?rdid=6ko1Lmho0JY8x1Hq&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Cr9xqKwKs%2F"><i class="fa-brands fa-facebook-f"></i></a>
               </li>
                 <li class="twitter">
                  <a href="https://x.com/traversesales?t=fK2K7RZ_rRuxN2LKMfekiw&s=09" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
               </li>

               <li class="pinterest">
                  <a href="https://pin.it/6ta6fSh6t" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
               </li>

            </ul>
         </div>
      </div>
   </div>
   <!-- end: Hamburger Menu -->

   <!-- start: Header Area -->
   <header class="tj-header-area header-3 header-absolute">
      <div class="header-bottom">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="header-wrapper">
                     <!-- logo -->
                     <div class="site-logo ">
                        <a class="logo" href="/">
                           <img src="frontend/assets/images/traverse_logo_rs.png" alt="logo">
                        </a>
                     </div>
                     <!-- main navigation -->
                     <div class="mainmenu menu-3 d-lg-block d-none" id="main-menu">
                        <ul>
                           <li class="{{URL::current()==url('/')? 'has-dropdown current-menu-ancestor': ''}}">
                              <a href="{{url('/')}}">Home</a>
                           </li>
                           <li class="{{URL::current()==url('/about-us')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/about-us')}}">About Us</a></li>
                           <li  class="{{URL::current()==url('/services')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/services')}}">Services</a></li>
                           <li class="{{URL::current()==url('/industries')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/industries')}}">Industries</a></li>
                           <li class="{{URL::current()==url('/contact')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/contact')}}">Contact</a></li>

                        </ul>
                     </div>

                     <div class="header_right_info d-none d-lg-inline-flex">

                        <!-- search btn -->


                        <!-- menu bar -->
                        <button class="menu_btn d-none d-xl-inline-flex">
                           Menu
                           <span class="cubes">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                           </span>
                        </button>
                        <!-- header btn -->
                        <a href="{{url('/contact')}}" class="tj-primary-btn">
                           <div class="btn_inner">
                              <div class="btn_icon">
                                 <span>
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                 </span>
                              </div>
                              <div class="btn_text">
                                 <span>Get a quote</span>
                              </div>
                           </div>
                        </a>
                     </div>

                     <!-- menu bar -->
                     <button class="menu_btn d-lg-none hamburgerBtn">
                        Menu
                        <span class="cubes">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <header class="tj-header-area header-3 header-duplicate header-sticky">
      <div class="header-bottom">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="header-wrapper">

                     <!-- logo -->
                     <div class="site-logo">
                        <a class="logo" href="{{url('/')}}">
                           <img src="frontend/assets/images/traverse_logo_rs.jpg" alt="logo" class="rounded">
                        </a>
                     </div>

                     <!-- main navigation -->
                     <div class="mainmenu d-lg-block d-none scroll-nav">
                        <ul>
                           <li class="{{URL::current()==url('/')? 'has-dropdown current-menu-ancestor': ''}}">
                              <a href="{{url('/')}}">Home</a>
                           </li>
                           <li class="{{URL::current()==url('/about-us')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/about-us')}}">About Us</a></li>
                           <li  class="{{URL::current()==url('/services')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/services')}}">Services</a></li>
                           <li class="{{URL::current()==url('/industries')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/industries')}}">Industries</a></li>
                           <li class="{{URL::current()==url('/contact')? 'has-dropdown current-menu-ancestor': ''}}"><a href="{{url('/contact')}}">Contact</a></li>

                        </ul>
                     </div>

                     <div class="header_right_info d-none d-lg-inline-flex">
                        <!-- search btn -->
                        {{-- <button class="header_search d-none d-xl-inline-flex">
                           Explore
                           <i class="tji-search"></i>
                        </button> --}}

                        <!-- menu bar -->
                        <button class="menu_btn d-none d-xl-inline-flex">
                           Menu
                           <span class="cubes">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                           </span>
                        </button>
                        <!-- header btn -->
                        <a href="{{url('/contact')}}" class="tj-primary-btn white-btn">
                           <div class="btn_inner">
                              <div class="btn_icon">
                                 <span>
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                 </span>
                              </div>
                              <div class="btn_text">
                                 <span>Get a quote</span>
                              </div>
                           </div>
                        </a>
                     </div>

                     <!-- menu bar -->
                     <button class="menu_btn d-lg-none hamburgerBtn">
                        Menu
                        <span class="cubes">
                           <span></span>
                           <span></span>
                           <span></span>
                           <span></span>
                        </span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end: Header Area -->
