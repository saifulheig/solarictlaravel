<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | Digital Marketing</title>
  <meta name="description"
    content="Digital marketing provides businesses with a wide range of opportunities to connect with their target audience, increase brand visibility, and drive customer engagement and conversions. It allows for precise targeting, measurable results, and the ability to adapt and optimize campaigns in real time for better outcomes.">
  {{-- CSS link start --}}
  @include('home.css')
  {{-- CSS link end --}}

</head>

<body>
  <!--Start Page Header-->
  <header class=" page-header inner-page-header  header-basic" id="page-header">
    <div class="container">
      @include('home.navbar')
    </div>
  </header>
  <!--End Page Header-->

  <!-- Start inner Page hero-->
  <section class="d-flex align-items-center page-hero  inner-page-hero-services " id="page-hero">
    <div class="overlay-photo-image-bg parallax"
      data-bg-img="{{('home/assets/images/services/Digital_Marketing/DigitalMarketing.jpg')}}" data-bg-opacity="1">
    </div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">
              {!! translateText('
              Digital Marketing</h1>
            <p class="hero-subtitle">
              Maximize the Potential of Your Business and Transform Your Future with Digital Marketing
              ', $lang) !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End inner Page hero-->
  <!-- Start inner Page hero-->
  <div class="service-single ">
    <div class="container">
      <div class="row">
        <!--Start service content-->
        <div class="col-12">
          <div class="service-content-area">

            <div class="service-content">
              <div class="part">
                <p class="service-main-text">{!! translateText('
                  Digital marketing provides businesses with a wide range of opportunities to connect with their target
                  audience, increase brand visibility, and drive customer engagement and conversions. It allows for
                  precise targeting, measurable results, and the ability to adapt and optimize campaigns in real time
                  for better outcomes.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="seo">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('
                  SEO – Search Engine Optimization</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Effective SEO implementation can lead to improved organic search visibility, increased website
                  traffic, higher user engagement, and ultimately, more conversions and business growth. It is an
                  ongoing process that requires continuous optimization, monitoring, and adaptation to stay ahead in
                  search engine rankings.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Digital_Marketing\SEO.jpg')}}" alt="SEO Engine"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="social_media_marketing">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Digital_Marketing\SocialMediaMarketing.jpg')}}"
                  alt="social media marketing"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('
                  Social Media Marketing</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Social media marketing provides businesses with a powerful platform to connect with their target
                  audience, increase brand awareness, drive website traffic, and generate leads. By utilizing engaging
                  content, building relationships, and leveraging paid advertising, social media marketing can be an
                  effective tool to achieve marketing goals and grow a business\'s online presence.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="email_marketing">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('
                  Email Marketing</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Email marketing allows businesses to establish direct communication with their
                  audience, nurture relationships, drive website traffic, generate leads, and increase conversions. By
                  delivering targeted and personalized content, leveraging automation, and analyzing campaign metrics,
                  businesses can optimize their email marketing efforts and achieve marketing goals effectively.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Digital_Marketing\EmailMarketing_1.png')}}"
                  alt="email marketing"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="telemarketing">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Digital_Marketing\TeleMarkeing_1.png')}}"
                  alt="telemarketing"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('
                  Telemarketing</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Telemarketing can be an effective marketing approach to reach a wide audience, engage with potential
                  customers directly, and generate sales or leads. However, it is important to consider customer
                  preferences, compliance regulations, and the overall brand reputation when implementing telemarketing
                  campaigns.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->

    </div>
  </div>
  @include('home.contact')

  @include('home.footer')
  <!-- Start back-to-top Component-->
  <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i></div>
  <!-- End back-to-top Component-->
  @include('home.script')
</body>

</html>