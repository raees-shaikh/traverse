@extends('frontend.layouts.app')
@section('title', 'FAQ')

@section('content')

   <main id="primary" class="site-main">
      <!-- start: Breadcrumb Section -->
      <section class="tj-page-header" data-bg-image="frontend/assets/images/bg/pheader-bg.webp">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tj-page-header-content text-center">
                     <h1 class="tj-page-title text-anim">Frequently Asked Questions (FAQs)</h1>
                     <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                           <a href="{{url('/')}}">
                              <span>Home</span>
                           </a>
                        </span>
                        <span>/</span>
                        <span>
                           <span>FAQ</span>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end: Breadcrumb Section -->
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
                     <div class="accordion tj-faq-style style-2" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                           <h2 class="accordion-header active">
                              <!-- button -->
                              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne-1"
                                 aria-expanded="false">
                                  What types of businesses do you work with?
                              </button>
                           </h2>
                           <!-- content -->
                           <div id="collapseOne-1" class="accordion-collapse collapse show"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>We primarily serve B2B clients — including startups, SMEs, and mid-market enterprises — that require international sourcing, logistics, and trade enablement services.
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes. Our global supplier database spans multiple industries, including niche sectors. We can assist with vendor discovery, sampling, and quality verification.
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Absolutely. We handle complete onboarding, listing optimization, SEO, and compliance documentation for B2B and B2C platforms.
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Our sourcing and logistics support spans India, China, Vietnam, UAE, Turkey, and across the EU and GCC regions.
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>We typically respond within 1 business hour for standard inquiries. Complex projects may take 24–48 hours for detailed proposals.
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes. Clients can engage us for end-to-end or modular services like freight forwarding, customs clearance, and bonded storage.</p>
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
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 <p>Yes. We are ISO 9001:2015 certified and fully compliant with BIS, FDA, CE, and ESG regulations.</p>
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
                        <a href="{{url('/contact')}}" class="tj-primary-btn white-btn">
                           <div class="btn_inner">
                              <div class="btn_icon">
                                 <span>
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                 </span>
                              </div>
                              <div class="btn_text">
                                 <span>Lets talk now</span>
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
    <title>Frequently Asked Questions | Traverse Sales Support & Info</title>
   <meta property="og:image" content="https://traversesales.com/assets/faq.jpg" /> 
   <meta property="og:url" content="https://traversesales.com/faq" />
   <meta property="og:type" content="website" />
     <meta name="description" content="Find quick answers to common questions about our sourcing model, AI technologies, shipping timelines, compliance processes, and more." />
   <meta property="og:title" content="Frequently Asked Questions | Traverse Sales Support & Info" />
   <meta property="og:description" content="Get answers on AI-powered sourcing, pricing, industry focus, delivery timelines, and customer support at Traverse Sales." />
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