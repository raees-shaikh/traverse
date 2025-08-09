@extends('frontend.layouts.app')
@section('title', 'Industries We Serve | Traverse Sales')

@section('content')
    <main id="primary" class="site-main">
        <!-- start: Breadcrumb Section -->
        <section class="tj-page-header" data-bg-image="frontend/assets/images/bg/pheader-bg.webp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-page-header-content text-center">
                            <h1 class="tj-page-title text-anim">Industries</h1>
                            <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                                <span>
                                    <a href="{{ url('/') }}">
                                        <span>Home</span>
                                    </a>
                                </span>
                                <span>/</span>
                                <span>
                                    <span>Industries</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Breadcrumb Section -->

        <!-- start: Hero Section -->
        <section class="tj-hero-section-two pt-5 pb-md-5 pb-0">
            <div class="container">
                <div class="row">
                    <div class="hero-wrapper-two mb-5 pt-0 mt-5 ">
                        <div class="hero-content-two">
                            <h1 class="hero-title text-anim px-0">
                                Tailored Trade Solutions For Every <span>Industry</span>
                            </h1>
                            <div class="pt-4 wow fadeInUp" data-wow-delay="0.1s">
                                <p> From
                                    electronics to renewable energy, Traverse Sales delivers cross-border sourcing, sales,
                                    and logistics expertise customized for your vertical.</p>
                            </div>
                        </div>
                        <span class="shape-1 zoominout">
                            <img src="frontend/assets/images/chain.png" alt="Shapes">
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-xl-3 col-lg-4 mb-4 ">
                        <div class="about-button wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#explore" class="tj-primary-btn w-100">
                                <div class="btn_inner text-start">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text ">
                                        <span>Explore Industry Expertise</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 mb-4">
                        <div class="about-button wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#call" class="tj-primary-btn w-100">
                                <div class="btn_inner text-start">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>Request A Call</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="col-xl-3 col-lg-4 mb-4">
                        <div class="about-button wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#case" class="tj-primary-btn w-100">
                                <div class="btn_inner text-start">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>View Case Studies</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>

                <div class="hero_shapes ind">
                    <img src="frontend/assets/images/chain.png" alt="Shapes">
                </div>
        </section>
        <!-- end: Hero Section -->

{{-- 
        <!-- start: About Section -->
        <section class="tj-about-info section-space pb-5 pt-0">
            <div class="container">
                <div class="row rg-30 justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="pricing-left-content">
                            <div class="sec-heading mb-0">
                                <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">About Our Industries</span>
                                <h2 class="sec-title text-anim">Empowering Global B2B Commerce With Innovation And Insight
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="desc mb-30 wow fadeInUp" data-wow-delay="0.3s">
                            <p> <b>Traverse Sales</b>, is more than a service provider — we are a strategic partner in your international trade journey. With a sharp focus on long-term growth, operational integrity, and client-centric execution, we simplify the global complexity for ambitious B2B players.</p>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end: About Section --> --}}

        <!-- start: Case Study Section -->
        <section class="h4-case-section section-space pb-5 pt-lg-5 pt-0">
            <div class="container">
                <div class="row rg-50">
                    <div class="col-xl-5 col-lg-5">
                        <div class="sec-heading style-3">

                            <h2 class="sec-title text-anim">Industry-Specific Solutions</h2>
                        </div>
                        <div class="case-btn wow fadeInUp " data-wow-delay="0.4s">
                            <p>Every sector comes with unique supply chain demands and compliance requirements — which is
                                why our trade services are customized for your industry. Whether it’s sourcing precise
                                electronic components or handling regulatory complexities in healthcare, our solutions
                                reduce risks, improve delivery speed, and enable sustainable expansion.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">

                        <div class="tj-faq">
                            <div class="accordion tj-faq-style style-2" id="accordionExample">
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                    <h2 class="accordion-header active">
                                        <!-- button -->
                                        <button class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-11" aria-expanded="false">
                                            
                                            Lifestyle
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-11" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We help lifestyle brands scale globally with seamless sourcing, quality control, and demand-driven logistics. Our tech-backed solutions ensure agile supply chains and faster time-to-market.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-12" aria-expanded="false">
                                            Fashion Accessories
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-12" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From trend-responsive procurement to secure global shipping, we enable brands to stay fashion-forward. Our AI-powered trade systems simplify compliance and optimize inventory flow.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                    

                                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-14" aria-expanded="false">
                                         Home & Decor
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-14" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We support home and décor businesses with curated sourcing, sustainable packaging, and smart warehousing. Navigate fluctuating demand with real-time visibility and efficient fulfilment.</p>
                                        </div>
                                    </div>
                                </div>

                                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-15" aria-expanded="false">
                                          Textiles
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-15" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our deep expertise in textile sourcing and export compliance ensures smoother transactions and global reach. We help minimize lead times while maintaining quality across the value chain.</p>
                                        </div>
                                    </div>
                                </div>

                                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-16" aria-expanded="false">
                                        Non Ferrous Metals
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-16" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Leverage our network and regulatory expertise for safe, compliant trading of non-ferrous metals. We reduce operational risk and enhance traceability from source to shipment.</p>
                                        </div>
                                    </div>
                                </div>
                   
                    </div>
                </div>
            </div>
            <div class="case-shapes move-anim">
                <img src="frontend/assets/images/chain.png" alt="Shapes">
            </div>
        </section>
        <!-- end: Case Study Section -->






        <!-- start: Evolution Section -->
        <section class="tj-evolute-area" id="explore">
            <div class="container-xxl-fluid  p-0 d-none d-xxl-block">
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="tj-evolute">
                            <span class="tj-evolute-title mb-30 wow fadeInUp" data-wow-delay="0.1s">Why Industry Expertise Matters</span>
                            <div class="desc mb-60 wow fadeInUp" data-wow-delay="0.3s">
                                <p>Each industry has its own supply chain challenges, buyer behavior, compliance
                                    requirements, and market dynamics. <b>Traverse Sales</b> applies sector-specific
                                    knowledge and proprietary AI analytics to drive smarter decisions, faster go-to-market
                                    strategies, and sustained growth — with zero guesswork.</p>
                            </div>
                            <div class="tj-evolute-counter">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tj-evolute-image hover:shine">
                            <img src="frontend/assets/images/service/growth-new.png" alt="evolute">
                            <div class="about-video-box style-2">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-xxl-none">
                <div class="row rg-50 align-items-center">
                    <div class="col-xl-6 col-12">
                        <div class="tj-evolute pt-5 pb-0">
                            <span class="tj-evolute-title mb-30 h4">Why Industry Expertise
                                Matters</span>
                            <div class="desc mb-60 wow fadeInUp" data-wow-delay="0.3s">
                                <p>Each industry has its own supply chain challenges, buyer behavior, compliance
                                    requirements, and market dynamics. <b>Traverse Sales</b> applies sector-specific
                                    knowledge and proprietary AI analytics to drive smarter decisions, faster go-to-market
                                    strategies, and sustained growth — with zero guesswork.</p>
                            </div>
                            <div class="tj-evolute-counter">

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="">
                            <img src="frontend/assets/images/service/growth-new.png" alt="evolute" class="w-100">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Evolution Section --> 



        <!-- start: Service Section -->
        <section class="tj-service-section pt-5 pb-0" id="case">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-heading">
                            <div class="sec-text">
                                <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">Best solutions</span>
                                <h2 class="sec-title text-anim">Key Industries We Empower</h2>
                            </div>
                            <div class="service-rating wow fadeInRight" data-wow-delay="0.1s">
                                <div class="star-fill">
                                    <div class="star-ratings">
                                        <div class="fill-ratings" style="width: 73%">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">Customers review (<strong>4.8</strong>/5.0)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-wrapper ind">
                            <div class="service-item service-stack">
                                <div class="service-content">
                                    <div class="service-number">
                                        <span class="active">1</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="service-text">
                                        <div class="service-icons">
                                            <img src="frontend/assets/images/icons/fashion.png" alt="Icons">
                                        </div>
                                        <h3 class="title">
                                            <a href="#"> Fashion Accessories</a>
                                        </h3>
                                        <h5 class="text-white mb-3">Fast-track fashion cycles with efficient global reach.</h5>
                                        <div class="desc">
                                            <p>From handbags and jewelry to smart wearables, we help fashion accessory brands scale with speed and consistency. Our network supports rapid onboarding, style-sensitive sourcing, and marketplace-ready fulfillment.</p>
                                        
                                            <p>• Style drop scheduling with demand forecasting</p>
                                            <p>• Pre-vetted suppliers across Asia, Africa, and EU</p>
                                            <p>• Support for labeling, packaging, and QC audits</p>

                                        </div>

                                        <h5 class="text-white my-2">AI Advantage</h5>
                                        <div class="desc">
                                            <p>Style trend detection and automated PO optimization using demand heatmaps.</p>

                                        </div>


                                    </div>
                                </div>
                                <div class="service-images hover:shine">
                                    <img src="frontend/assets/images/product/fashion.png" alt="Images">
                                </div>
                            </div>
                            <div class="service-item service-stack">
                                <div class="service-content">
                                    <div class="service-number">
                                        <span class="active">2</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="service-text">
                                        <div class="service-icons">
                                            <?xml version="1.0" encoding="utf-8" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 512 512" fill="#76c04d"><path d="M225.323 162.198C219.423 160.826 213.808 157.076 209.516 152.892C185.647 129.626 202.684 87.9003 235.58 87.7554C254.254 86.7998 269.617 100.588 273.413 118.34C274.059 121.359 274.276 124.533 275.302 127.455C277.008 132.312 280.443 135.908 280.694 141.348C281.242 153.226 267.764 162.988 256.349 163.527C255.889 165.258 255.611 167.051 255.287 168.813C266.404 176.858 270.699 183.165 279.144 192.607C282.785 193.712 287.102 193.876 290.883 194.459L357.53 204.557C371.18 206.762 388.207 214.224 397.084 201.355C397.473 187.684 407.701 191.998 407.721 199.516C407.761 213.961 396.747 228.176 382.631 231.454C375.285 233.16 362.302 232.385 354.364 232.504L298.11 233.312C306.247 264.438 304.076 276.406 298.11 305.528C304.611 305.946 311.309 305.007 317.8 304.542L356.573 301.702C373.089 300.578 393.113 298.494 397.422 320.974C398.632 327.283 397.436 336.793 396.983 343.262C395.897 358.753 393.644 377.627 393.821 392.995C398.845 394.678 417.575 401.93 421.132 404.324C429.543 409.982 425.173 422.75 415.866 424.151C410.773 424.918 383.846 424.788 379.365 423.765C366.892 420.916 364.214 410.714 362.712 399.367L360.914 386.17C359.422 375.016 357.971 360.229 355.667 349.522L289.548 368.998C284.37 370.508 279.202 372.089 273.997 373.503C260.856 377.072 263.761 376.79 252.586 383.467C221.774 401.877 184.623 407.93 149.214 410.164C128.706 411.458 115.462 420.331 96.4537 423.429C91.758 424.195 87.9991 421.503 85.8828 417.315C80.6332 406.926 95.6033 401.329 101.391 395.809C112.636 385.083 118.526 372.973 135.971 379.948C140.709 379.202 145.569 377.217 150.111 375.694C174.945 367.37 190.933 357.735 212.411 344.499C208.166 323.922 211.307 321.797 218.258 302.626C228.572 274.182 213.492 249.159 209.206 222.629C206.629 206.678 208.395 187.479 217.807 173.953C221.296 168.941 224.04 168.768 225.323 162.198ZM234.402 98.3446C204.416 101.563 200.092 143.199 227.717 151.715C228.048 150.428 228.419 149.136 228.701 147.838C227.49 146.657 226.384 145.467 225.323 144.15C221.468 140.378 218.401 135.433 218.338 129.898C218.158 114.161 244.993 122.728 253.279 104.302C247.747 100.144 241.406 97.7532 234.402 98.3446ZM260.622 113.434C249.904 126.064 241.208 125.273 228.701 130.913L228.847 131.232C231.32 136.466 237.6 140.951 238.443 146.809C238.942 150.278 235.989 166.223 234.75 169.806C232.883 175.211 225.213 178.635 221.568 190.498C213.319 217.346 224.744 234.64 229.626 259.853C231.968 271.946 231.649 279.448 231.985 291.122C247.697 301.881 266.562 306.27 285.335 307.219C286.267 305.067 287.226 302.923 288.118 300.754C294.912 278.171 294.064 255.747 287.074 233.312L266.452 233.328C261.404 233.346 256.087 233.959 251.137 232.771C225.238 226.554 227.464 186.149 259.045 186.544L260.622 186.574C257.403 184.255 245.065 175.617 244.586 172.743C244.149 170.126 245.846 158.759 246.591 155.774C249.245 145.146 261.038 161.513 270.311 142.343C268.962 137.1 265.809 132.546 264.504 127.301C263.651 123.874 262.924 116 260.622 113.434ZM254.287 197.28C243.054 200.021 239.078 214.995 250.274 221.016C255.344 223.743 266.074 222.533 272.044 222.574L282.984 222.574C279.77 214.801 275.776 206.324 270.311 199.849C265.595 198.449 259.224 196.861 254.287 197.28ZM286.152 204.691C289.172 210.529 292.194 216.356 294.377 222.574C315.045 222.412 335.735 222.332 356.399 221.897C363.623 221.745 375.138 223.06 381.821 220.682C382.714 220.285 383.635 219.915 384.485 219.432C352.647 214.934 317.668 210.441 286.152 204.691ZM229.517 302.833C224.077 317.347 217.003 328.769 224.156 344.535C230.636 358.816 246.021 367.026 261.412 365.26C274.525 363.755 299.788 354.707 313.535 350.688L354.26 338.814C367.372 334.885 365.506 342.779 367.072 353.719L371.082 382.165C371.907 388.142 373.518 404.053 375.486 408.268C378.138 413.944 383.73 413.776 389.073 413.748L406.377 413.766C409.3 413.77 412.3 413.919 415.214 413.748C408.175 409.914 400.127 407.365 392.726 404.266C379.525 398.739 382.587 399.093 383.551 384.386L386.022 345.376C386.417 338.81 388.379 327.743 386.404 321.486C381.974 307.458 365.393 311.832 354.598 312.584L308.452 315.83C281.892 317.823 267.469 319.844 241.854 308.579C237.732 306.766 233.742 304.33 229.517 302.833ZM216.862 354.21C205.075 362.447 148.324 393.416 134.495 390.719C130.674 389.973 127.23 387.386 123.333 389.719C116.337 393.909 107.141 406.1 97.4488 412.447L117.809 405.975C131.273 401.622 132.835 400.308 147.179 399.485C180.533 397.572 216.242 392.047 245.281 374.835C235.478 371.918 227.519 366.716 220.841 358.958C219.74 357.679 218.263 354.964 216.862 354.21Z"/></svg>
                                        </div>
                                        <h3 class="title">
                                            <a href="#">Lifestyle</a>
                                        </h3>
                                        <h5 class="text-white mb-3">Drive growth through sustainable sourcing and trend agility.</h5>
                                        <div class="desc">
                                            <p>We help lifestyle brands navigate global supply networks while adapting quickly to changing consumer behavior. From premium basics to wellness essentials, we support DTC and B2B brands with lean, responsive, and ethical sourcing.</p>
                                            <p>• Vendor consolidation for streamlined operations</p>
                                            <p>• SKU-level forecasting and agile production cycles</p>
                                            <p>⦁ Sustainable sourcing with full compliance traceability</p>
                                        </div>
                                        <h5 class="text-white my-2">AI Advantage</h5>
                                        <div class="desc">
                                            <p>Real-time trend mapping and supplier scorecards for smarter sourcing.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="service-images hover:shine">
                                    <img src="frontend/assets/images/product/lifestyle.png" alt="Images">
                                </div>
                            </div>
                            <div class="service-item">
                                <div class="service-content">
                                    <div class="service-number">
                                        <span class="active">3</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="service-text">
                                        <div class="service-icons">
                                            <?xml version="1.0" encoding="utf-8" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 512 512" fill="#76c04d"><path d="M422.941 251.801C412.135 255.383 404.781 246.768 396.505 241.478C386.942 235.365 380.407 235.184 369.444 235.196L332.891 235.192C320.326 235.181 312.043 235.346 301.406 242.638C296.896 245.73 293.148 250.067 287.559 251.2C279.843 252.764 272.041 247.287 270.55 239.639C268.607 229.665 276.303 225.693 281.044 218.638C285.894 211.421 285.732 204.146 285.737 195.849L285.734 153.018C285.736 146.235 286.66 138.234 284.434 131.694C281.354 122.644 271.432 116.921 270.048 108.905C268.629 100.688 273.498 93.9069 281.616 92.5613C290.065 91.8035 295.1 97.7803 301.55 102.064C313.378 109.92 323.254 109.973 337.067 109.982L354.6 109.983C372.023 109.976 387.172 111.675 401.96 100.183C407.649 95.7629 413.289 90.7918 421.119 93.266C427.25 95.2031 431.363 100.736 431.434 107.116C431.513 114.265 426.028 117.984 422.027 123.021C414.147 132.944 414.496 141.381 414.499 153.122L414.493 193.483C414.474 205.902 414.274 214.834 423.926 224.485C426.487 227.045 429.494 229.437 431.054 232.788C434.77 240.766 430.434 248.369 422.941 251.801ZM282.865 101.758C274.293 105.173 282.248 112.253 285.908 116.343C295.337 126.88 295.202 137.763 295.205 151.18L295.216 191.711C295.212 205.08 295.329 217.546 285.781 228.279C283.371 230.988 278.21 234.612 280.066 238.83C283.305 246.194 290.693 238.662 293.862 236.197C305.857 226.871 317.18 225.764 331.463 225.765L368.246 225.776C386.813 225.751 393.984 227.451 409.067 238.657C412.553 241.247 416.159 245.26 420.718 242.411C425.237 237.926 421.302 235.392 418.039 231.835C404.784 217.387 405.203 210.094 405.215 191.478L405.208 149.998C405.17 136.684 405.968 126.675 415.685 115.934C417.972 113.405 420.886 111.112 422.173 107.881C421.095 94.4225 408.129 107.891 403.811 110.645C388.004 120.728 372.062 119.28 354.006 119.282L336.525 119.277C320.01 119.265 308.211 118.378 294.279 108.495C290.921 106.114 287.146 101.916 282.865 101.758Z"/><path d="M172.374 113.88C170.617 114.164 168.843 113.477 167.737 112.083C166.63 110.689 166.364 108.806 167.04 107.16C167.716 105.513 169.229 104.361 170.996 104.147C173.653 103.825 176.079 105.688 176.454 108.338C176.83 110.988 175.016 113.451 172.374 113.88Z"/><path d="M173.034 186.3C162.665 186.335 157.933 179.52 151.15 172.777C143.428 165.101 133.023 156.396 140.552 143.965C143.86 138.503 161.854 118.833 170.447 119.271C178.124 116.78 183.131 123.619 187.829 128.299C192.032 132.487 200.428 139.633 203.16 144.619C209.78 156.697 199.317 165.739 191.865 173.113C186.407 178.514 181.305 185.636 173.034 186.3ZM170.447 127.544C165.834 129.637 143.891 147.891 147.555 155.633C149.23 159.173 166.3 177.994 173.034 177.378C177.851 175.602 193.469 159.488 195.201 155.912C196.106 154.044 196.063 151.565 195.381 149.635C194.368 146.772 176.886 127.114 170.447 127.544Z"/><path d="M371.554 210.192C364.792 210.532 357.858 210.207 351.079 210.207C336.045 210.205 313.26 213.487 310.609 192.366C309.978 187.342 310.553 181.713 310.556 176.618L310.522 161.187C310.494 147.214 312.583 135.898 328.88 133.922L355.966 133.915C368.197 133.91 384.32 132.299 388.363 147.98C390.488 156.225 389.231 166.964 389.228 175.47C389.221 192.543 391.416 205.184 371.554 210.192ZM331.271 143.394C316.363 144.139 319.915 160.383 319.908 170.704C319.904 176.761 319.465 184.367 319.953 190.238C320.993 202.734 334.081 200.754 342.963 200.752L368.657 200.734C373.211 200.627 378.185 197.937 379.281 193.19C380.549 187.698 380.121 161.504 379.717 154.373C378.954 140.914 366.346 143.388 356.716 143.383L331.271 143.394Z"/><path d="M129.126 156.777C126.596 157.217 124.171 155.577 123.637 153.065C123.104 150.553 124.654 148.07 127.145 147.445C128.839 147.02 130.631 147.555 131.815 148.839C132.999 150.123 133.387 151.952 132.827 153.606C132.266 155.261 130.846 156.477 129.126 156.777Z"/><path d="M214.856 157.059C212.245 157.442 209.809 155.664 209.379 153.06C208.948 150.457 210.683 147.989 213.278 147.512C214.998 147.196 216.756 147.833 217.874 149.178C218.993 150.524 219.297 152.368 218.672 154.002C218.046 155.636 216.587 156.805 214.856 157.059Z"/><path d="M173.118 200.974C170.567 201.609 167.973 200.099 167.268 197.567C166.562 195.034 168.001 192.4 170.513 191.626C172.201 191.106 174.038 191.543 175.31 192.767C176.582 193.992 177.088 195.811 176.633 197.517C176.177 199.223 174.831 200.546 173.118 200.974Z"/><path d="M96.1078 291.059C97.7405 273.102 109.182 257.999 127.294 254.35C132.703 253.26 138.614 253.681 144.12 253.682L256.314 253.69C281.186 252.981 302.359 263.708 305.425 290.652C314.673 290.925 319.564 297.242 319.873 306.083C320.302 318.319 319.9 330.68 319.919 342.932L319.94 358.83C319.966 381.26 312.113 396.015 287.739 396.79C290.236 401.656 301.61 414.74 296.94 418.379C291.397 422.699 288.368 415.393 285.962 411.659C282.746 406.669 279.583 401.566 276.058 396.79L143.375 396.79L124.827 396.79C123.024 400.27 111.591 418.725 108.881 419.693C105.539 420.886 101.722 417.649 102.854 414.119C104.136 410.125 111.439 401.389 113.961 396.79C96.258 398.468 81.5777 385.477 80.7942 367.78C80.5869 363.097 80.7359 358.353 80.7396 353.664L80.7226 312.471C80.7022 300.046 81.821 291.583 96.1078 291.059ZM135.408 263.162C118.343 263.479 107.309 274.386 105.338 291.059C114.272 292.566 115.574 298.055 118.529 305.493L125.902 324.522C129.664 334.265 134.051 343.952 137.102 353.941L250.794 353.937C254.344 353.937 263.24 355.588 264.305 352.16C269.416 338.358 274.778 324.654 280.226 310.983C283.643 302.408 284.915 292.119 295.83 290.652C289.777 263.047 272.186 263.154 248.834 263.16L143.134 263.147C140.589 263.144 137.942 262.979 135.408 263.162ZM94.8689 299.775C87.8474 301.374 89.938 311.58 89.9374 317.589L89.9463 356.043C89.9579 379.222 91.9396 387.819 119.092 387.591L196.059 387.572L196.059 383.784L196.059 363.276L131.182 363.297C128.412 363.31 125.467 363.509 122.722 363.203C118.046 362.683 113.237 353.102 127.267 353.941C124.903 346.545 107.797 301.726 105.678 300.445C103.55 299.158 97.526 299.742 94.8689 299.775ZM297.048 299.775C291.836 301.742 287.44 318.814 285.243 324.396L277.603 343.956C276.307 347.277 274.825 350.558 273.709 353.941C286.85 352.977 282.85 362.699 278.366 363.2C275.725 363.494 272.883 363.298 270.22 363.297L205.484 363.276L205.484 387.572C207.284 387.545 209.101 387.471 210.899 387.572L281.609 387.579C285.577 387.577 290.139 387.794 294.023 386.985C313.841 382.855 310.546 363.157 310.553 348.249L310.557 307.867C310.479 298.036 305.548 299.746 297.048 299.775Z"/></svg>
                                        </div>
                                        <h3 class="title">
                                            <a href="#"> Home & Decor</a>
                                        </h3>
                                        <h5 class="text-white mb-3">Scale design-led products with smart logistics and marketplace precision</h5>
                                        <div class="desc">
                                            <p>From statement furniture to everyday kitchenware, we empower home & décor brands to navigate cross-border logistics, retail onboarding, and cost efficiency—without compromising on brand aesthetic or quality. Whether you're a DTC innovator or B2B wholesaler, we enable global expansion tailored to consumer preferences and seasonal demand patterns.</p>
                                           
                                            <p>⦁ Seamless onboarding to Amazon, Flipkart, Noon & other retail channels</p>
                                            <p>⦁ Smart inventory sync & global fulfillment planning across regions</p>
                                            <p>⦁ Vendor negotiation & pricing optimization for increased margins</p>

                                        </div>
                                        <h5 class="text-white my-2">AI Advantage</h5>
                                        <div class="desc">
                                            <p>Visual tagging for product discovery and AI-based restock forecasting to avoid out-of-stock or deadstock scenarios.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="service-images hover:shine">
                                    <img src="frontend/assets/images/product/decor.png" alt="Images">
                                </div>
                            </div>

                            <div class="service-item service-stack">
                                <div class="service-content">
                                    <div class="service-number">
                                        <span class="active">4</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="service-text">
                                        <div class="service-icons">
                                            <?xml version="1.0" encoding="utf-8" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 512 512" fill="#76c04d "><path d="M365.31 186.804C357.75 167.135 369.797 145.24 391.384 144.249C408.281 142.277 422.669 156.839 423.37 173.155C424.567 201.02 392.657 215.228 370.875 194.926C363.013 200.546 354.318 205.637 347.036 211.973C358.619 252.064 349.221 280.342 321.263 308.54C324.16 312.083 327.411 315.145 329.896 319.051C334.883 326.886 336.208 334.756 343.821 341.073C367.036 360.336 399.266 333.164 384.862 308.573C383.472 306.199 379.446 302.388 379.253 299.87C378.822 294.256 384.65 293.27 388.084 296.504C401.912 309.53 400.477 333.468 387.375 346.675C370.896 363.287 342.855 359.135 330.139 339.959C323.16 329.435 323.893 324.972 313.171 314.379C307.445 316.934 302.25 320.518 296.397 322.93C270.677 333.527 242.241 336.088 214.686 336.074C183.317 335.797 151.037 329.858 124.479 312.431C120.448 317.02 107.751 330.243 103.324 333.336C100.009 335.653 95.6547 333.67 95.7643 329.351C95.8524 325.882 113.093 310.163 116.728 306.591C90.2988 283.962 82.394 243.998 93.0409 211.698C117.157 138.536 225.182 134.043 285.521 154.284C311.89 163.13 331.125 176.846 343.76 202.195C350.713 196.762 358.32 192.19 365.31 186.804ZM390.015 153.972C378.784 155.667 371.033 166.116 372.669 177.356C374.306 188.595 384.715 196.401 395.963 194.823C407.294 193.233 415.17 182.73 413.521 171.408C411.873 160.085 401.329 152.264 390.015 153.972ZM212.653 153.968C204.642 173.455 198.598 185.398 182.22 200.442C185.075 201.606 201.645 208.439 203.237 207.995L204.258 206.916C216.233 194.071 231.628 171.363 234.935 153.968C227.578 154.48 220.049 153.878 212.653 153.968ZM199.23 155.435C176.387 154.181 137.085 168.51 121.378 183.79C125.649 184.711 129.884 185.724 134.118 186.804C146.996 189.863 159.093 193.749 171.643 196.937C182.806 187.001 193.393 174.835 199.18 160.926C200.258 158.336 203.444 154.181 199.23 155.435ZM245.177 155.435C237.513 178.222 228.909 194.116 212.653 211.973C218.396 214.684 224.428 216.777 230.259 219.29L231.654 217.957C244.779 205.219 254.152 190.171 261.135 173.329C263.122 168.537 264.194 163.444 266.442 158.743C259.38 157.506 252.309 156.195 245.177 155.435ZM275.455 161.34C270.315 179.8 261.706 196.852 250.118 212.075C246.963 216.22 242.794 219.831 239.874 224.012C243.295 225.475 254.769 231.204 257.402 231.703L257.911 231.428C275.753 214.578 289.616 192.867 294.091 168.541C288.368 165.281 281.777 163.122 275.455 161.34ZM303.349 173.047C296.778 200.094 284.942 217.183 266.442 236.613C268.461 237.887 282.68 246.902 283.924 245.648C302.143 227.375 312.688 211.116 321.263 186.804C316.392 181.254 310.028 176.258 303.349 173.047ZM114.033 192.409C109.234 199.065 104.782 206.573 102.769 214.591C110.057 214.169 117.551 215.653 124.694 216.973C179.403 227.08 253.425 261.273 299.405 292.115C304.074 295.248 308.444 298.897 313.171 301.926L315.139 300.424C319.578 296.712 324.504 290.096 328.482 287.472C270.088 243.196 193.299 209.018 121.946 194.034C119.333 193.485 116.669 192.805 114.033 192.409ZM328.482 194.926C321.792 216.199 307.87 235.483 292.151 251.007C296.527 254.021 301.304 256.505 305.883 259.197C307.145 259.963 308.421 260.513 309.783 261.069C319.182 255.208 333.37 230.951 339.355 219.29C337.859 214.046 332.62 198.558 328.482 194.926ZM99.8084 224.012C94.8506 251.802 101.541 275.779 120.192 296.353C125.406 290.237 133.384 288.91 141.003 288.079L141.003 270.953C137.173 270.962 124.948 271.911 122.279 269.443C120.508 267.806 120.63 264.023 122.369 262.408C125.458 259.539 138.477 261.114 142.58 261.104C146.917 261.093 183.443 257.527 169.489 270.953C163.228 271.099 156.958 270.792 150.698 270.953L150.698 287.472L178.395 287.483C182.745 287.481 192.3 285.779 195.694 289.242C199.198 292.818 195.143 296.775 191.375 297.223C182.901 298.23 131.236 294.539 127.918 302.362C129.081 307.405 159.424 318.238 164.282 319.6C203.682 329.686 272.203 329.899 304.47 307.703C254.946 272.999 199.126 246.419 140.659 230.809C127.511 227.298 113.497 223.868 99.8084 224.012ZM341.751 236.613C334.453 243.507 327.208 258.174 317.97 267.492C320.358 269.04 322.633 270.673 324.913 272.375C327.58 274.479 330.3 276.535 332.804 278.833C341.756 262.588 340.76 253.508 341.954 236.874L341.751 236.613Z"/></svg>
                                        </div>
                                        <h3 class="title">
                                            <a href="#">Textiles</a>
                                        </h3>
                                        <h5 class="text-white mb-3">Simplify procurement from fiber to finished fabric.</h5>
                                        <div class="desc">
                                            <p>Whether you're sourcing organic cotton, synthetics, or blends, our textile solutions ensure cost-efficiency and compliance across the board. We assist brands and mills with sampling, certification, and import/export logistics.</p>
                                        
                                            <p>• Support for OEKO-TEX®, GOTS, and REACH certifications</p>
                                            <p>• Custom dyeing and finishing workflows</p>
                                            <p>• Multi-country vendor benchmarking and lab test integration</p>
                                        </div>
                                        <h5 class="text-white my-2">AI Advantage</h5>
                                        <div class="desc">
                                            <p>Auto-classification of textile specs and supplier rating via compliance history.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="service-images hover:shine">
                                    <img src="frontend/assets/images/product/textile.png" alt="Images">
                                </div>
                            </div>
                            <div class="service-item">
                                <div class="service-content">
                                    <div class="service-number">
                                        <span class="active">5</span>
                                        <span>/5</span>
                                    </div>
                                    <div class="service-text">
                                        <div class="service-icons">
                                           <?xml version="1.0" encoding="utf-8" ?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 512 512" fill="#76c04d"><path d="M197.875 380.438L169.395 380.45C152.854 380.451 137.72 380.765 122.26 373.741C106.965 366.792 95.9277 354.03 94.1999 337.121C93.1329 326.679 93.3167 329.6 87.7004 320.5C83.5144 313.718 73.9129 300.573 70.9763 294.429C62.9136 277.56 74.037 266.983 84.8673 256.483L104.07 237.544C117.735 224.221 119.216 225.076 125.614 207.248C139.777 167.783 166.915 161.61 206.355 159.31C223.945 158.284 225.707 156.352 242.092 151.464C259.162 146.373 297.693 133.712 314.772 132.604C330.751 131.494 335.026 138.806 342.583 150.57C355.67 170.939 361.737 185.239 382.135 200.037C389.196 205.159 396.325 210.186 403.544 215.081C418.088 224.943 420.765 225.635 423.07 244.36C424.304 254.381 424.946 267.252 427.013 276.817C430.136 291.27 443.702 303.382 443.743 317.693C443.783 331.751 430.63 339.685 421.211 347.822C389.383 375.319 369.491 380.461 329.858 380.444L197.875 380.438ZM315.925 143.603C309.62 144.135 303.576 145.916 297.494 147.558C279.623 152.384 261.796 157.181 244.043 162.437C224.985 168.081 225.84 169.489 205.086 170.447C172.366 171.957 148.876 177.121 136.778 209.575C129.199 229.908 128.044 229.675 112.54 244.857L92.5393 264.647C78.1335 278.896 75.0033 280.881 86.5588 297.789L95.2772 310.675C95.2194 266.466 129.447 268.06 141.083 238.88C152.55 210.124 154.422 212.13 184.526 212.982C209.959 214.144 237.003 198.098 262.549 199.036C298.345 200.351 324.332 236.475 351.407 254.671C358.219 252.8 364.774 251.566 371.845 251.312C383.087 250.908 401.208 255.395 408.027 243.592C414.024 233.212 404.474 229.348 397.393 224.434C386.875 217.134 372.546 208.177 363.21 199.518C356.571 193.361 351.912 185.379 346.959 177.89L334.287 158.731C326.232 161.494 317.513 165.961 310.647 171.016C307.446 173.373 298.608 183.62 295.245 174.13C291.896 164.679 320.047 153.362 327.915 148.841C324.717 144.56 320.999 143.308 315.925 143.603ZM257.939 210.348C233.041 212.802 209.768 225.389 184.345 224.09C160.574 222.876 159.99 220.426 151.934 242.004C148.048 252.411 140.257 260.902 132.157 268.276C112.664 286.022 107.899 286.283 106.13 312.922C105.611 320.731 104.563 329.156 105.373 336.947C107.285 355.353 125.177 365.669 141.874 368.155C150.314 369.412 159.051 368.983 167.56 368.983L329.525 368.97C322.808 334.97 280.416 326.197 255.12 348.3C252.122 350.919 248.751 355.983 244.28 353.091C237.301 348.576 244.591 342.407 248.261 339.284C281.685 310.84 331.888 324.987 341.249 368.97C355.184 368.992 368.357 367.045 381.062 361.134C393.791 355.292 418.309 337.518 428.265 326.455C438.246 315.364 426.247 303.564 421.189 293.342C415.217 281.273 414.822 269.414 413.101 256.433C398.866 264.6 393.118 262.678 376.951 262.386C352.299 261.939 342.631 272.28 323.945 286.855C299.811 305.679 269.39 310.757 239.759 302.737C215.737 296.235 193.638 283.485 169.238 278.336C165.698 277.589 160.896 277.508 158.872 273.966C157.341 271.285 158.464 268.004 161.206 266.605C166.722 263.79 195.352 274.518 202.156 277.112C234.415 289.408 265.166 303.971 299.687 288.492C312.61 282.698 328.018 269.142 339.986 260.35C335.413 256.154 330.427 252.439 325.763 248.343C308.519 233.196 282.606 208.3 257.939 210.348Z"/><path d="M257.939 250.779C253.767 250.692 249.435 246.847 252.036 242.47C254.085 239.023 264.217 238.313 269.179 235.114C272.689 232.851 275.615 228.786 279.714 227.785C282.495 227.944 285.241 229.961 285.808 232.784C287.456 240.992 264.081 249.833 257.939 250.779Z"/><path d="M274.061 266.994C267.558 266.888 263.365 256.493 279.714 253.574C286.859 254.01 288.34 263.85 274.061 266.994Z"/><path d="M364.643 310.675C360.429 310.851 356.507 307.144 358.662 302.76C360.389 299.248 368.566 296.145 372.193 294.778C376.528 294.458 380.063 298.99 377.803 303.062C376.129 306.076 368.026 309.645 364.643 310.675Z"/><path d="M367.912 334.973C364.003 334.869 359.085 330.786 361.936 326.689C365.147 322.075 376.171 324.255 383.188 319.004C386.69 316.384 387.882 311.639 392.452 310.675C400.612 311.482 399.289 318.299 395.338 323.11C388.326 331.648 378.464 333.972 367.912 334.973Z"/></svg>
                                        </div>
                                        <h3 class="title">
                                            <a href="#">Non Ferrous Metals</a>
                                        </h3>
                                        <h5 class="text-white mb-3">Secure critical raw materials with global consistency.</h5>
                                        <div class="desc">
                                            <p>From copper and aluminum to rare earth elements, our platform enables stable procurement and logistics for non-ferrous metals. We serve manufacturers across energy, construction, and electronics sectors.</p>
                                           
                                            <p>• Bulk shipment support with hedged pricing options</p>
                                            <p>• Assistance with HS codes and BIS certification</p> 
                                            <p>• Global warehouse visibility and delivery scheduling</p>
                                        </div>
                                        <h5 class="text-white my-2">AI Advantage</h5>
                                        <div class="desc">
                                            <p>Price volatility prediction and contract-based inventory auto-reordering.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-images hover:shine">
                                    <img src="frontend/assets/images/product/metal.png" alt="Images">
                                </div>
                            </div>

                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Service Section -->






        <!-- start: Evolution Section -->
        <section class="tj-evolute-area py-5">
            <div class="container-xxl-fluid  p-0 d-none d-xxl-block">
                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="tj-evolute">
                            <span class="tj-evolute-title mb-30 wow fadeInUp" data-wow-delay="0.1s">Industry Not Listed? Let’s Customize.</span>
                            <div class="desc mb-60 wow fadeInUp" data-wow-delay="0.3s">
                                <p>We routinely work with emerging sectors and hybrid business models. Contact us to build a
                                    custom solution for your vertical.</p>

                                <p><b>How AI Personalizes Every Industry Strategy</b></p>
                                <p>Smart Filtering: Match the best suppliers per category and region</p>
                                <p>Market Pulse: Analyze buyer behavior shifts before your competition</p>
                                <p>Compliance Radar: Monitor changing regulations in real time</p>
                                <p>Growth Engine: Uncover white-space opportunities and unmet demand</p>
                            </div>
                            <div class="tj-evolute-counter">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tj-evolute-image hover:shine">
                            <img src="frontend/assets/images/service/manufacture.png" alt="evolute">
                            <div class="about-video-box style-2">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-xxl-none">
                <div class="row rg-50 align-items-center">

                    <div class="col-xl-6 col-12 order-xl-1 order-2">
                        <div class="">
                            <img src="frontend/assets/images/service/manufacture.png" alt="evolute" class="w-100">

                        </div>
                    </div>
                    <div class="col-xl-6 col-12 order-xl-2 order-1">
                        <div class="tj-evolute py-0 pt-2">
                            <span class="tj-evolute-title mb-30 h4">Industry Not Listed? Let’s
                                Customize.</span>
                            <div class="desc mb-60 wow fadeInUp" data-wow-delay="0.3s">
                                <p>We routinely work with emerging sectors and hybrid business models. Contact us to build a
                                    custom solution for your vertical.</p>
                                <p><b>How AI Personalizes Every Industry Strategy</b></p>
                                <p>Smart Filtering: Match the best suppliers per category and region</p>
                                <p>Market Pulse: Analyze buyer behavior shifts before your competition</p>
                                <p>Compliance Radar: Monitor changing regulations in real time</p>
                                <p>Growth Engine: Uncover white-space opportunities and unmet demand</p>
                            </div>
                            <div class="tj-evolute-counter">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end: Evolution Section -->


        <!-- start: About Section -->
        <section class="tj-about-section-two section-space py-5" id="call">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-wrapper">
                            <div class="about-images-group-one hover:shine wow fadeInUp">
                                <img src="frontend/assets/images/service/book.png" alt="Images">
                                {{-- <div class="about-author">
                           <div class="signature">
                              <img src="frontend/assets/images/about/signature.png" alt="Images">
                           </div>
                           <div class="author-name">
                              <h5 class="title">Burdee Nicolas</h5>
                              <span class="sub-title">Co. Founder</span>
                           </div>
                        </div> --}}
                            </div>
                            <div class="about-content-two">
                                <div class="sec-heading style-2">

                                    <h2 class="sec-title text-anim">Ready To Explore A Tailored Industry Solution?</h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="0.3s">
                                        <p>Let’s tailor a solution for your business with the right mix of strategy, data,
                                            and execution.</p>
                                    </div>
                                    <div class="about-feature-item wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="feature-box">
                                            <div class="feature-left">

                                                <div class="about-button">
                                                    <a href="{{ url('/contact') }}" class="tj-primary-btn">
                                                        <div class="btn_inner">
                                                            <div class="btn_icon">
                                                                <span>
                                                                    <i class="tji-arrow-right"></i>
                                                                    <i class="tji-arrow-right"></i>
                                                                </span>
                                                            </div>
                                                            <div class="btn_text">
                                                                <span>Book a Free Strategy Call</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="funfact-item-two">
                                <div class="funfact-box">
                                    <div class="number"><span class="odometer" data-count="15"></span>+</div>
                                    <span class="sub-title">Years of experience in global trade.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: About Section -->

        <!-- start: Faq Section -->
        <section class="tj-faq-area section-space py-5">
            <div class="container">
                <div class="col">
                    <div class="sec-heading mb-0 text-center mb-4">
                        <h2 class="sec-title text-anim"> Frequently Asked Questions (FAQs)</h2>
                    </div>
                </div>
                <div class="row rg-50 justify-content-between">

                    <div class="col-12">
                        <div class="tj-faq">
                            <div class="accordion tj-faq-style style-2" id="accordionExample2">
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                                    <h2 class="accordion-header active">
                                        <!-- button -->
                                        <button class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-1" aria-expanded="false">
                                            What types of businesses do you work with?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>We primarily serve B2B clients — including startups, SMEs, and mid-market
                                                enterprises — that require international sourcing, logistics, and trade
                                                enablement services.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-2" aria-expanded="false">
                                            Can you help us find suppliers for a niche product?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Yes. Our global supplier database spans multiple industries, including niche
                                                sectors. We can assist with vendor discovery, sampling, and quality
                                                verification.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-3" aria-expanded="false">
                                            Do you offer support for Amazon, Noon, or Flipkart sellers?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Absolutely. We handle complete onboarding, listing optimization, SEO, and
                                                compliance documentation for B2B and B2C platforms.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-4" aria-expanded="false">
                                            What countries do you source from or support trade with?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Our sourcing and logistics support spans India, China, Vietnam, UAE, Turkey,
                                                and across the EU and GCC regions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-5" aria-expanded="false">
                                            How long does it take to get a quote after submitting an RFQ?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-5" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>We typically respond within 1 business hour for standard inquiries. Complex
                                                projects may take 24–48 hours for detailed proposals.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-6" aria-expanded="false">
                                            Do you provide logistics and warehousing as a standalone service?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-6" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Yes. Clients can engage us for end-to-end or modular services like freight
                                                forwarding, customs clearance, and bonded storage.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                                    <h2 class="accordion-header ">
                                        <!-- button -->
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-7" aria-expanded="false">
                                            Are your services compliant with international trade standards?
                                        </button>
                                    </h2>
                                    <!-- content -->
                                    <div id="collapseOne-7" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Yes. We are ISO 9001:2015 certified and fully compliant with BIS, FDA, CE,
                                                and ESG regulations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Faq Section -->


        <!-- start: Cta Section -->
        <section class="tj-cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cta-wrapper">
                            <div class="cta-title">
                                <h2 class="title text-anim"> Request a Strategy Call</h2>
                            </div>
                            <div class="cta-button wow fadeInUp" data-wow-delay="0.1s">
                                <a href="{{ url('/contact') }}" class="tj-primary-btn white-btn">
                                    <div class="btn_inner">
                                        <div class="btn_icon">
                                            <span>
                                                <i class="tji-arrow-right"></i>
                                                <i class="tji-arrow-right"></i>
                                            </span>
                                        </div>
                                        <div class="btn_text">
                                            <span>Let's talk now</span>
                                        </div>
                                    </div>
                                </a>
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
    <title>Industries We Serve | Traverse Sales</title>
    <meta name="description"
        content="Discover how Traverse Sales supports sectors like
electronics, apparel, wellness, industrial tools, and renewable energy with tailored trade
solutions." />
    <meta property="og:title" content="Industries Served – Electronics, Apparel, Wellness &
More" />
    <meta property="og:description"
        content="Sector-specific sourcing, compliance, and global
B2B expansion for electronics, healthcare, fashion, and renewables." />
@endsection
@section('js')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What types of businesses do you work with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We primarily serve B2B clients — including startups, SMEs, and mid-market enterprises — that require international sourcing, logistics, and trade enablement services."
      }
    },
    {
      "@type": "Question",
      "name": "Can you help us find suppliers for a niche product?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our global supplier database spans multiple industries, including niche sectors. We can assist with vendor discovery, sampling, and quality verification."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer support for Amazon, Noon, or Flipkart sellers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We handle complete onboarding, listing optimization, SEO, and compliance documentation for B2B and B2C platforms."
      }
    },
    {
      "@type": "Question",
      "name": "What countries do you source from or support trade with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our sourcing and logistics support spans India, China, Vietnam, UAE, Turkey, and across the EU and GCC regions."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to get a quote after submitting an RFQ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We typically respond within 1 business hour for standard inquiries. Complex projects may take 24–48 hours for detailed proposals."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide logistics and warehousing as a standalone service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Clients can engage us for end-to-end or modular services like freight forwarding, customs clearance, and bonded storage."
      }
    },
    {
      "@type": "Question",
      "name": "Are your services compliant with international trade standards?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We are ISO 9001:2015 certified and fully compliant with BIS, FDA, CE, and ESG regulations."
      }
    }
  ]
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