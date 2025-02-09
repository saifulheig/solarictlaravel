<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | IT Infrastructure Virtualization</title>
  <meta name="description"
    content="IT infrastructure virtualization is a fundamental technology that revolutionizes the way organizations deploy, manage, and scale their IT resources. By abstracting and consolidating physical infrastructure components into virtual instances, businesses can achieve greater efficiency, agility, and cost-effectiveness in their IT operations.">
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
      data-bg-img="{{('home/assets/images/services/IT_Infrasture_virtualization/InfraAutomation.jpg')}}"
      data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('IT Infrastructure Virtualization</h1>
            <p class="hero-subtitle">Virtualize with Confidence: Empower Agility and Efficiency to Boost Your Business
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
                <p class="service-main-text">{!! translateText('IT infrastructure virtualization is a fundamental
                  technology that revolutionizes the way organizations deploy, manage, and scale their IT resources. By
                  abstracting and consolidating physical infrastructure components into virtual instances, businesses
                  can achieve greater efficiency, agility, and cost-effectiveness in their IT operations.
                  ', $lang) !!}
                </p>
              </div>

            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="vmware_products_solutions">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('VMware Products & Solutions</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">We enable organizations to virtualize and manage their server infrastructure
                  efficiently and offer a comprehensive suite of tools
                  and features for virtualization, including high availability, disaster recovery, and centralized
                  management.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\IT_Infrasture_virtualization\VMware.png')}}" alt="VMware">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="microsoft_hyper-v_services">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\IT_Infrasture_virtualization\Microsoft.png')}}"
                  alt="microsoft"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Microsoft Hyper-V Services</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We provide features such as live migration, dynamic memory allocation, and
                  integration
                  with other Microsoft technologies, making it a popular choice for virtualization in Windows-based
                  environments. 
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="linux_kvm">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Linux KVM</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We leverage the Linux kernel\'s virtualization capabilities, providing a robust
                  and efficient platform for virtual machine management and offering features like live migration,
                  resource allocation,
                  and support for various operating systems, making it a preferred choice for Linux-based
                  virtualization.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\IT_Infrasture_virtualization\Linux.png')}}" alt="Linux KVM">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="proxmox_ve">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\IT_Infrasture_virtualization\Proxmox.png')}}" alt="Proxmox">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Proxmox VE</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">We provide a comprehensive solution for virtualization management, offering
                  features like high availability, live migration,
                  and integrated backup solutions which is known for its user-friendly interface and strong community
                  support.
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