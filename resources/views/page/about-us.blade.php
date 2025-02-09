<!DOCTYPE html>
<html lang="zxx">
  <head>
    {{-- CSS link start --}}
    @include('home.css')
    {{-- CSS link end --}}
        <title> Solar-ICT |   About Us</title>
        <meta name="description" content="Delivering Sustainable Positive Impact through Expertly Crafted Software Solutions. Empowering Your Business with Design, Development, and Operations.">
  </head>
       
  <body>
    <!--Start Page Header-->
    <header class=" page-header   header-basic" id="page-header">
      <div class="container">
        @include('home.navbar')
      </div>
    </header>
    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg" data-bg-img="{{asset('home/assets/images/sections-bg-images/pattern-bg-1.jpg')}}" data-bg-opacity=".2"></div>
      <div class="particles-js" id="particles-js"></div>
      <div class="container">
        <div class="hero-text-area centerd wow fadeInUp" data-wow-delay=".2s">
        {!! translateText('
          <h1 class="hero-title"  >About Us</h1>
          <p class="hero-subtitle">
          We create IT solutions that are easy to use, efficient, secure, and reliable.
          </p>
        ', $lang) !!}
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  about Section-->
    <section class="about mega-section" id="about">
      <div class="container">
        <!-- Start first about div-->
        <div class="mt-5 mb-4 mb-lg-5" id="howWeServe">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeIn " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                {!! translateText('
                    <h2 class=" title" data-wow-delay=".4s">How we serve</h2>
                </div>
                <p class=" about-text pr-lg-3">
                  You can easily tap into flexible and scalable IT resources without the hassle of setting up a complex in-house and cloud-based infrastructure with us. Easier for you to concentrate on your main business activities while leveraging Solar-ICT\'s specialized knowledge and services to support your IT needs.
                ', $lang) !!}
                </p>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
              <div class="img-area  " >
                <div class="image   "><img class="about-img img-fluid " loading="lazy" src="{{asset('home/assets/images/about/how_we_serve2.png')}}" alt="how we serve"></div>
              </div>
            </div>
          </div>
        </div>
        <!--End first about div-->
        <!-- Start second about div-->
        <div class="my-4 mb-lg-5  " id="whoWeServe">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
              <div class="img-area  ">
                <div class="image  "><img class="about-img img-fluid " loading="lazy" src="{{asset('home/assets/images/about/who_we_serve2.png')}}" alt="who we serve"></div>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start  wow fadeIn " data-wow-delay="0.6s">
              <div class="text-area pl-lg-3">
                <div class="sec-heading  light-title ">
                {!! translateText('
                    <h2 class=" title" data-wow-delay=".4s">Who do we serve</h2>
                </div>
                <p class=" about-text">
                We serve enterprises, businesses of all sizes, startups, developers, researchers, government agencies, and non-profit organizations by providing scalable, cost-effective, and flexible solutions for their IT infrastructure and operational needs.   
                </p>
                <div class="cta-area "><a class=" btn-solid " href="'.url('contact_us').'">Get in Touch', $lang) !!}</a></div>
              </div>
            </div>
          </div>
        </div>
        <!--End second about div-->
        <!-- Start third about div-->
        <div class="mt-4">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeIn" data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                {!! translateText('
                    <h2 class=" title" data-wow-delay=".4s">What We Offer</h2>
                </div>
                <p class=" about-text pr-lg-3">
                  We are here to provide you with all the facilities for Digital Services, Data & AI, Digital Workplace, Platform & Security, Digital Transformation, Managed Services, Information Management, Software Development, Risk & Compliance and more on. 
                ', $lang) !!} 
                </p>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
              <div class="img-area  " >
                <div class="image   "><img class="about-img img-fluid " loading="lazy"  src="{{asset('home/assets/images/about/what_we_offer.png')}}" alt="what we offer"></div>
              </div>
            </div>
          </div>
        </div>
        <!--End third about div-->
      </div>
    </section>
    <!-- End  about Section-->
    <!-- Start Section-->
    <section class="about">
      <div class="container  text-center">
        <div class="row d-flex justify-content-center text-area wow fadeInUp pt-1" data-wow-delay=".4s">
          <div class="col-lg-11">
            <div class="sec-heading  centered ">
            {!! translateText('
                <h2>Our Roadmap</h2>
            </div>
            <p class=" about-text">
              Our roadmap includes infrastructure setup, deployment of a comprehensive cloud platform, security implementation, service expansion, scalability optimization, cost optimization, monitoring and analytics, disaster recovery planning, continuous 
              learning, and customer satisfaction focus.
            ', $lang) !!}   
            </p>
          </div>
        </div>
      </div>
      <div class="has-light-bg">
        <div class="container text-center ">
          <div class="row d-flex justify-content-center text-area wow fadeInUp" data-wow-delay=".4s">
            <div class="col-lg-11">
              <div class="sec-heading  centered ">
              {!! translateText('
                  <h2>Our Context</h2>
              </div>
              <p class=" about-text mb-4">
                Our focus is to empower organizations to streamline operations, innovate, and achieve their IT goals efficiently. In a rapidly evolving digital landscape, we understand the critical need for organizations to stay competitive and adapt <br>to changing market dynamics.  
              ', $lang) !!} 
              </p>
            </div>
          </div>
      </div>
      </div>
      <div class="container text-center">
          <div class="row d-flex justify-content-center text-area wow fadeInUp" data-wow-delay=".4s">
          <div class="col-lg-11">
            <div class="sec-heading  centered ">
            {!! translateText('
                <h2 >Our Beliefs</h2>
            </div>
            <p class=" about-text">
              We are here to embrace innovation and stay at the forefront of technology advancements and to ensure robust security measures to protect customer data and privacy . We are passionate about harnessing the power of innovation to create transformative solutions that drive organizational growth and competitive advantage.
            ', $lang) !!} 
            </p>
          </div>
          </div>
      </div>
      <div class="container text-center">
        <div class="row d-flex justify-content-center text-area wow fadeInUp pt-0" data-wow-delay=".4s">
          <div class="col-lg-11">
            <div class="sec-heading  centered ">
            {!! translateText('
                <h2 >Our Commitment</h2>
            </div>
            <p class=" about-text">
              Count on us for a stable and accessible cloud infrastructure reliability and scalability. We prioritize the protection of your data and infrastructure.  
              Your Satisfaction, Our Priority.
            ', $lang) !!} 
            </p>
            <div class="row d-flex justify-content-center pb-4 mb-5 mt-5">
              <div class="col-md-8">
                <img class="feature-img" src="{{asset('home/assets/images/about/our_commitment.jpg')}}" alt="our commitment">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  roadmap Section-->
    
    <!-- Start  testimonials-->
    @include('home.testimonial')
    <!-- End  testimonials-->
   
    @include('home.footer')
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i></div>
    <!-- End back-to-top Component-->   
    @include('home.script')

  </body>
</html>