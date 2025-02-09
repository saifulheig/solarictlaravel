<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | Cyber Security</title>
  <meta name="description"
    content="Cybersecurity refers to protecting computer systems, networks, and data from unauthorized access and cyber threats. It involves measures like firewalls, antivirus software, encryption, access control, and security awareness training to prevent hacking, data breaches, malware infections, and other cyberattacks. By practicing good cybersecurity, we can protect our information and avoid potential harm caused by cybercriminals.">
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
      data-bg-img="{{('home/assets/images/services/CyberSecurity/cybersecurity.jpg')}}" data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('Cyber Security</h1>
            <p class="hero-subtitle">Safeguard Your Digital Frontier: Protect Your Assets and Ensure Peace of Mind',
              $lang) !!}
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
                <p class="service-main-text">{!! translateText('Cybersecurity refers to protecting computer systems,
                  networks, and data from unauthorized access and cyber threats. It involves measures like firewalls,
                  antivirus software, encryption, access control, and security awareness training to prevent hacking,
                  data breaches, malware infections, and other cyberattacks. By practicing good cybersecurity, we can
                  protect our information and avoid potential harm caused by cybercriminals.', $lang) !!}
                </p>
              </div>

            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="va_pen_test">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('Vulnerability & Pen Test</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">A vulnerability assessment focuses on identifying vulnerabilities using
                  automated tools, while a penetration test involves actively exploiting those vulnerabilities to assess
                  the security posture of a system or network. Both VA and Pen Tests are important components of a
                  comprehensive security testing strategy to proactively identify and address security risks.', $lang)
                  !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\assesment.png')}}" alt="assesment"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start first sub service div-->
      <div id="assessments_audits">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\Audit_and_Assessment.jpg')}}"
                  alt="Audit and Assessment"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('Assessments & Audits</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">We offer superior assessment and auditing services that can detect any kind of
                  security challenge.
                  Before malicious agents can access sensitive details about your company, we are here to determine all
                  system hazards and vulnerabilities.This includes conducting vulnerability assessments, penetration
                  testing, and security audits to identify weaknesses and gaps in security measures.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="zero_trust_security">
        <div class="row service-content-area">

          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Zero Trust Security</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">This model operates on the principle of "never trust, always verify." It
                  requires authentication, authorization, and continuous monitoring for all users, devices, and
                  applications, regardless of their location or network connection. Under Zero Trust, every access
                  request is thoroughly inspected and verified based on various factors, such as user identity, device
                  health, location, behavior, and context. ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\ZeroTrust3.jpg')}}" alt="ZeroTrust"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="security_information_event_management">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\Security_Event_Management.jpg')}}"
                  alt="Security Event Management"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Security Information & Event Management</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">It assists enterprises to recognize potential security hazards and
                  vulnerabilities before they have a chance to affect corporate operations.
                  This is a solution or approach used in the field of cybersecurity to collect, analyze, and manage
                  security event data from various sources within an organization\'s IT infrastructure. SIEM systems
                  provide real-time monitoring, threat detection, and incident response capabilities to help
                  organizations identify and respond to security incidents effectively.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="data_loss_prevention">
        <div class="row service-content-area">

          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Data Loss Prevention</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">By implementing an effective DLP strategy, organizations can reduce the risk of
                  data breaches, maintain regulatory compliance, safeguard sensitive information, protect intellectual
                  property, and maintain customer trust.
                  Our aim is to prevent the unauthorized transmission, copying, or use of sensitive data within an
                  organization.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\Data_Loss_Preventions_1.png')}}"
                  alt="Data Loss Preventions"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->
      <!-- Start fifth sub service div-->
      <div id="mobile_device_management">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\mobile_management.jpg')}}"
                  alt="mobile management"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Mobile Device Management</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">Our solutions allow business administrators to remotely monitor, control, and
                  manage mobile devices such as smartphones and tablets. It provides a centralized platform to monitor,
                  secure, and support these devices, regardless of their operating systems.
                  By implementing MDM, organizations can streamline device management, enhance security, and maintain
                  control over the mobile devices used within their environment.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--End fifth sub service div-->
      <!-- Start sixth sub service div-->
      <div id="key_management">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Key Management</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Effective key management practices are essential for maintaining the security of encrypted data and
                  preventing unauthorized access or decryption. It involves the generation, distribution, storage, and
                  disposal of cryptographic keys to ensure the confidentiality, integrity, and availability of sensitive
                  information.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\CyberSecurity\Key_management_2.jpg')}}"
                  alt="Key management"></div>
            </div>
          </div>

        </div>
      </div>
      <!--End sixth sub service div-->

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