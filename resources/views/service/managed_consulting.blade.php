<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | IT Managed & Consulting Services</title>
  <meta name="description"
    content="Our IT Managed & Consulting Services provide professional assistance and guidance to organizations regarding their technology needs. These services include managing IT infrastructure, providing IT support, ensuring network security, migrating to the cloud, strategic planning, project management, auditing and compliance, and vendor management. Our services help businesses optimize their IT systems, improve efficiency, enhance security, and align technology initiatives with business goals.">
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
      data-bg-img="{{('home/assets/images/services/it_managed_consulting/it_managed_consulting.jpg')}}"
      data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('IT Managed & Consulting Services</h1>
            <p class="hero-subtitle">Empower Your Business - with our holistic IT managed and consulting solutions,
              tailored to your needs
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
                <p class="service-main-text">{!! translateText('Our IT Managed & Consulting Services provide
                  professional assistance and guidance to organizations regarding their technology needs. These services
                  include managing IT infrastructure, providing IT support, ensuring network security, migrating to the
                  cloud,
                  strategic planning, project management, auditing and compliance, and vendor management. Our services
                  help businesses
                  optimize their IT systems, improve efficiency, enhance security, and align technology initiatives with
                  business goals.
                  ', $lang) !!}
                </p>
              </div>

            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="service_desk">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('Service Desk </h4>
                <div class="line-on-side "> </div>
                <p class="service-text">Our Service Desk is a centralized support function and we provide technical
                  assistance and issue resolution to end-users within an organization. It serves as a primary contact
                  point for reporting and resolving IT-related problems, using a ticketing system to track and manage
                  incidents. The Service Desk troubleshoots issues, provides guidance, communicates updates, and
                  escalates complex problems to higher-level support teams.
                  Our goal is to minimize downtime and ensure smooth IT operations while delivering excellent customer
                  service.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{('home/assets/images/services/it_managed_consulting/service_desk.png')}}" alt="Service Desk">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="microsoft_365_platform">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\it_managed_consulting\microsoft_365.png')}}"
                  alt="microsoft 365"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Microsoft 365 Platform Administration </h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Experience the full potential of Microsoft 365 with our expert administration
                  services. Streamline your operations, enhance productivity, and optimize your Microsoft 365
                  environment. Our experienced team takes care of the complexities, allowing you to focus on what
                  matters most - your business.
                  Simplify your Microsoft 365 experience and unlock its true power with our trusted administration
                  expertise.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="it_network_and_security">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('IT Network and Security Maintenance</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Our IT network and security maintenance service involves ongoing monitoring,
                  optimization,
                  and protection of your network infrastructure. It includes activities such as network monitoring,
                  patch management,
                  configuration management, firewall management, vulnerability assessments, incident response planning,
                  user awareness
                  training, backup and disaster recovery, and compliance with industry regulations. These measures help
                  ensure the
                  performance, reliability, and security of the network, protecting client data and systems from threats
                  and vulnerabilities.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\it_managed_consulting\it_network_and_security.png')}}"
                  alt="it network and security"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="system_windows_and_linux">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\it_managed_consulting\system_windows.png')}}"
                  alt="system windows"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('System Windows and Linux Support </h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Experience seamless support for your Windows and Linux systems with our expert
                  team.
                  We provide comprehensive assistance to ensure the smooth operation of your IT infrastructure.
                  From troubleshooting and maintenance to software updates and security enhancements, we have you
                  covered. T
                  rust our experienced professionals to keep your systems running at their best, regardless of the
                  operating system.
                  Simplify your IT support and empower your business with our Windows and Linux support services.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->

      <!-- Start fifth sub service div-->
      <div id="it_consulting_services">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('IT Consulting Services </h2>
                <div class="line-on-side "> </div>
                <p class="service-text">IT consulting services provide expert guidance and support to businesses for
                  strategic planning,
                  technology assessments, vendor management, project management, cloud strategy and migration,
                  cybersecurity consulting,
                  data analytics, IT governance and compliance, training and change management, and IT outsourcing. Our
                  expert consultants
                  help businesses optimize technology investments, improve efficiency, enhance security, and stay
                  competitive.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\it_managed_consulting\it_consulting _services.png')}}"
                  alt="it consulting service"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fifth sub service div-->

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