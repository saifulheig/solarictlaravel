<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | Enterprise Network & Security Solutions</title>
  <meta name="description"
    content="Enterprise Network & Security aim to protect enterprise networks from unauthorized access, data breaches, and other security threats, ensuring the integrity, availability, and confidentiality of critical business information and systems. It refers to the practice of establishing and maintaining a secure and efficient network infrastructure within an organization.">
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
      data-bg-img="{{('home/assets/images/services/enterpriseNetwork/enterprise_network.jpg')}}" data-bg-opacity="1">
    </div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('Enterprise Network & Security Solutions</h1>
            <p class="hero-subtitle">Empower Your Enterprise with Unparalleled Network and Security Solutions
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
                <p class="service-main-text">{!! translateText('Enterprise Network & Security aim to protect enterprise
                  networks from unauthorized access, data breaches, and other security threats, ensuring the integrity,
                  availability, and confidentiality of critical business information and systems. It refers to the
                  practice of establishing and
                  maintaining a secure and efficient network infrastructure within an organization. It involves
                  designing, implementing, and managing network systems that enable data communication, collaboration,
                  and resource sharing among employees
                  and departments, while also ensuring protection against unauthorized access, data breaches, and other
                  security threats.
                  ', $lang) !!}
                </p>
              </div>


            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="lan_implementation_migration">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('LAN Implementation & Migration</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">We implement LAN (Local Area Network) which involves setting up and configuring
                  network infrastructure within a specific geographic area, such as an office building. This includes
                  deploying switches, routers,
                  and other networking equipment to establish a reliable and efficient local network.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\Lan.jpg')}}"
                  alt="LAN implementation & migration"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="wan_implementation_migration">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\Wan.jpg')}}"
                  alt="Wan implementation & migration"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('WAN Implementation & Migration</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We implement WAN (Wide Area Network) which focuses on establishing connectivity
                  between geographically dispersed locations. It involves deploying routers, switches,
                  and other networking components to create a secure and efficient network across multiple sites. By
                  implementing or migrating to a WAN infrastructure, organizations can enjoy these advantages, improving
                  connectivity, collaboration,
                  cost efficiency, scalability, data accessibility, disaster recovery capabilities, security, and global
                  reach.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="wlan_implementation_migration">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('WLAN Implementation & Migration</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We help to implement WLAN (Wireless Local Area Network) which revolves around
                  deploying wireless
                  networking infrastructure within a specific area, enabling wireless connectivity for devices. WLAN
                  implementation
                  offers numerous advantages, including wireless connectivity, easy access, cost-effectiveness,
                  scalability, increased
                  productivity, guest access, centralized management, fast data transfer, support for IoT, and wireless
                  coverage
                  extension. These benefits make WLANs a popular choice for both residential and business environments.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\WLAN.png')}}"
                  alt="WLAN Implementation & Migration"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="advanced_networking_features">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\AdvanceNetworking.png')}}"
                  alt="Advance Networking"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Advanced Networking Features Implementations</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We focus on implementing advanced networking features and technologies to
                  enhance network performance, security, and scalability. Advanced networking features offer advantages
                  such as
                  enhanced performance, increased security, scalability, simplified management, improved reliability,
                  cost efficiency, better user experience, agility, collaboration, and future-proofing.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->
      <!-- Start fifth sub service div-->
      <div id="network_security_implementation">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Network Security Implementation</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We implement Network security which involves deploying various security measures
                  to
                  protect the enterprise network from unauthorized access, data breaches, and other cybersecurity
                  threats. Network security implementation involves the deployment of various measures
                  and practices to protect network infrastructure from unauthorized access, data breaches, and other
                  security threats. By implementing these network security measures, organizations can establish a
                  robust security posture, protect sensitive data, mitigate risks, and safeguard their network
                  infrastructure from various cyber threats.
                  It is important to regularly review and update security measures to adapt to evolving threats and
                  technologies.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\Network_security.png')}}"
                  alt="networking security"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fifth sub service div-->
      <!-- Start sixth sub service div-->
      <div id="site_to_site_vpn_implementation">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\site_to_site.png')}}" alt="site to site">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Site to Site VPN Implementation</h2>
                <div class="line-on-side "> </div>
                <p class="service-text"> We implement Site-to-Site VPN (Virtual Private Network)
                  which establishes secure connections between multiple sites or branch offices over the public
                  internet. Organizations can establish a secure and encrypted communication channel between their
                  geographically distributed sites, allowing for seamless and protected data transfer over the public
                  internet. It is important to ensure proper configuration, monitoring, and maintenance of the
                  Site-to-Site VPN to maintain its security and performance.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End sixth sub service div-->
      <!-- Start seventh sub service div-->
      <div id="firewall_security_solutions">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Firewall Security Solutions</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Our Firewall security solutions focus on implementing robust firewall systems to
                  protect the enterprise
                  network from unauthorized access and malicious activities. Firewall security solutions are tools that
                  protect networks from unauthorized access and malicious activities. They act as a barrier
                  between internal and external networks, controlling incoming and outgoing network traffic based on
                  predefined rules. By using firewall security solutions, organizations can protect their networks,
                  control network traffic, and ensure the security of sensitive data. Regular updates,
                  monitoring, and awareness of emerging threats are essential for maintaining effective firewall
                  protection.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\enterpriseNetwork\Firewall_Security_sol.png')}}"
                  alt="Firewall Security sol"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End seventh sub service div-->

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