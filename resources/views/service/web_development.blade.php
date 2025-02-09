<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | Web Development</title>
  <meta name="description"
    content="Web development is the process of creating websites and web applications. It involves designing the layout, functionality, and interactivity of web pages. Backend development handles server-side programming and databases, while frontend development focuses on the user interface and client-side scripting. Frameworks and tools like Django, React, and Git aid in development, and hosting providers enable deployment of websites on the internet.">
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
      data-bg-img="{{('home/assets/images/services/Web_Dev/web-development.jpg')}}" data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('Web Development</h1>
            <p class="hero-subtitle">Build Your Digital Presence and Take Your Business to New Level with a
              High-Performance Website
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
                <p class="service-main-text">{!! translateText('Web development is the process of creating websites and
                  web applications. It involves designing the layout, functionality, and interactivity of web pages.
                  Backend development handles server-side programming and databases, while frontend development focuses
                  on the user interface and client-side scripting. Frameworks and tools like Django, React, and Git aid
                  in development, and hosting providers enable deployment of websites on the internet.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="php_laravel_framework">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('PHP Laravel Framework</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">Laravel is a PHP web development framework that follows the
                  Model-View-Controller (MVC) pattern. It offers features like ORM, routing, templating, middleware,
                  migrations, authentication, caching, and task scheduling. It provides a robust and expressive syntax
                  for building modern and scalable web applications.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\Laravel_dev.jpg')}}" alt="laravel"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="asp_net_framework">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\aspnet.jpg')}}" alt="aspnet"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('ASP.NET Framework</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">It is Microsoft\'s web development framework. MVC architecture, server-side
                  technology. Razor view engine. Extensive libraries for data access, security, and integration with
                  Visual Studio. Scalable, cross-platform development.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="front_end_development">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Front-end Development</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">This service refers to the process of creating the user interface (UI) and user
                  experience (UX) of a website or web application with HTML, CSS, and JavaScript. It focuses on the
                  client-side of web development, handling the visual and interactive elements that users interact with
                  directly.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\frontend.jpg')}}" alt="frontend"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="responsive_web_design">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\responsive_design.jpg')}}" alt="responsive design">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Responsive Web Design</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">It is an approach to web development that aims to create websites that adapt and
                  respond to different screen sizes, resolutions, and devices. The goal is to provide an optimal viewing
                  and user experience across a wide range of devices, including desktop computers, laptops, tablets, and
                  mobile phones.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->
      <!-- Start fifth sub service div-->
      <div id="wordpress_themes">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('WordPress Themes</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">These are pre-designed templates that determine the appearance and layout of a
                  WordPress website. They provide a quick and convenient way to change the look and feel of a website
                  without altering its content or underlying functionality.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\WordPress.png')}}" alt="WordPress Themes"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fifth sub service div-->
      <!-- Start sixth sub service div-->
      <div id="web_api">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\Web_API.jpg')}}" alt="Web API"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Web API</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">A web API (Application Programming Interface) is a set of rules and protocols
                  that allows different software applications to communicate and interact with each other over the
                  internet. It enables applications to exchange data and perform various operations, such as retrieving,
                  creating, updating, and deleting information.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End sixth sub service div-->
      <!-- Start seventh sub service div-->
      <div id="database_management">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Database Management</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">This service refers to the process of organizing, storing, and retrieving data
                  in a structured and efficient manner. It involves the use of database management systems (DBMS) to
                  create, modify, and manage databases.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\Database.png')}}" alt="Database Management"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End seventh sub service div-->
      <!-- Start eighth sub service div-->
      <div id="website_maintenance_support">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\Web_Dev\website_man.jpg')}}" alt="website management"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Website Maintenance & Support</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">It involves the ongoing tasks and activities necessary to keep a website running
                  smoothly, secure, and up-to-date. It includes tasks like updating content, ensuring software and
                  security updates, backing up data, optimizing performance, fixing bugs, providing user support,
                  monitoring analytics, and aligned with the organization\'s goals.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End eighth sub service div-->
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