<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | Cloud Services</title>
  <meta name="description"
    content="We provide a flexible and scalable infrastructure for businesses, enabling them to leverage the power of the cloud for various purposes. Which provides compatibility across different operating systems and devices, allowing organizations to seamlessly integrate their operations.">
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
      data-bg-img="{{('home/assets/images/services/cloudServices/cloud_services.jpg')}}" data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('Cloud Services (Cross Plattform)</h1>
            <p class="hero-subtitle">Unleash the Power of the Cloud: Seamless Solutions for Your Business
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
                <p class="service-main-text">{!! translateText('We provide a flexible and scalable infrastructure for
                  businesses, enabling them to leverage the power of the cloud for various purposes. Which provides
                  compatibility across different operating systems and devices, allowing organizations to seamlessly
                  integrate their operations.
                  <br><br>
                  Cloud services are computing resources and applications provided over the internet. They include
                  Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS).
                  With cloud services, users can access and utilize computing resources without needing physical
                  infrastructure. It offers scalability, cost-efficiency, flexibility, and global accessibility. Popular
                  cloud service providers include AWS, Azure, and GCP.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="virtual_machine">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('Virtual Machine</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">Each virtual machine operates independently, with its own virtual hardware
                  resources, such as CPU, memory, storage, and network interfaces. It provides a cost-effective and
                  efficient way to consolidate multiple OS environments, isolate applications, and run legacy software.
                  Virtual machines are commonly used for testing, development, server consolidation, and creating
                  sandbox environments for security purposes.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\Virtual_Machine_1.png')}}"
                  alt="virtual machine"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="virtual_desktop">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\VirtualDesktop_1.png')}}"
                  alt="virtual desktop"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Virtual Desktop</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We help to enable users to access their desktop environments and applications
                  remotely, regardless of the device they are using. A virtual desktop is a way to access your
                  computer\'s desktop and applications from anywhere using a different device. It allows you to use your
                  desktop computer, with all your files and programs, remotely. So, you can work on your computer from
                  home, a cafe, or anywhere else, as long as you have an internet connection. It\'s like having your
                  computer with you wherever you go, even if you\'re using a different device.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start second sub service div-->
      <div id="virtual_networking">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Virtual Networking & Services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We offer virtual networking capabilities, allowing organizations to create and
                  manage virtual networks that span multiple platforms and locations.
                  It involves using software-based techniques to emulate network components and functions, such as
                  switches, routers, and firewalls, to provide connectivity and services. Virtual networking enables the
                  efficient sharing of network resources, improves scalability, and allows for flexible network
                  configurations without requiring physical hardware changes.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\Virtual_Network_1.png')}}"
                  alt="virtual networking and service"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="cloud_storage_and_backup_services">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\cloud_Storage.png')}}"
                  alt="cloud storage and backup"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Cloud Storage & Backup services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We provide scalable and reliable storage solutions for businesses. Organizations
                  can securely store and retrieve data in the cloud, reducing reliance on physical storage
                  infrastructure.
                  Backing up data means making extra copies of your important files so that if something happens to the
                  original files, you still have a backup copy. It\'s like creating a spare copy of your important
                  documents, photos, or other files to keep them safe in case of accidents, computer crashes, or other
                  unexpected events.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="cloud_database_services">
        <div class="row service-content-area">

          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Cloud Database Services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We aim to provide scalable and managed database solutions, eliminating the need
                  for organizations to maintain their own database infrastructure.
                  A cloud database is a database management system (DBMS) that is hosted and operated on the cloud. It
                  enables users to store, manage, and access their data over the internet, without the need for physical
                  infrastructure or on-premises servers.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\Cloud_database_1.png')}}"
                  alt="cloud database"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->
      <!-- Start fifth sub service div-->
      <div id="identity_services">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\Identity_services_1.jpg')}}"
                  alt="identify services"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Identity Services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We enable organizations to manage user identities and access controls across
                  various platforms and applications.Identity services, or IDaaS, are cloud-based solutions that manage
                  and secure user identities across systems and applications. They streamline user access, enhance
                  security, and provide centralized identity management, authentication, and authorization capabilities.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--End fifth sub service div-->
      <!-- Start sixth sub service div-->
      <div id="security_and_monitoring">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Security & Monitoring</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We offer robust security measures and monitoring capabilities to protect data
                  and applications. These services include features such as encryption, threat detection, and security
                  monitoring, helping organizations proactively identify and respond to potential security risks.
                  Security and monitoring involve implementing measures to protect systems and data from unauthorized
                  access and continuously surveilling for security incidents or performance issues.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\security_monitoring_1.png')}}"
                  alt="security monitoring"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End sixth sub service div-->
      <!-- Start seventh sub service div-->
      <div id="migration_services">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\Azure_Migration_1.png')}}"
                  alt="migration monitoring"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Migration Services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Our mission is to facilitate the smooth transition of applications, data, and
                  infrastructure from on-premises environments to the cloud or between different cloud platforms. Azure
                  migration is the process of moving on-premises applications, data, and infrastructure to Microsoft
                  Azure\'s cloud platform for increased scalability and flexibility.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--End seventh sub service div-->
      <!-- Start eighth sub service div-->
      <div id="management_and_governance">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Management & Governance</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We provide management and governance tools to monitor and optimize cloud
                  resources and services. Management and governance involve overseeing operations and establishing rules
                  and frameworks for effective decision-making, resource allocation, and compliance.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\cloudServices\management_governance_1.png')}}"
                  alt="management governance"></div>
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