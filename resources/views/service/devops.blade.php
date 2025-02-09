<!DOCTYPE html>
<html lang="zxx">

<head>
  <title> Solar-ICT | DevOps</title>
  <meta name="description"
    content="DevOps is a software development approach that emphasizes collaboration, communication, and automation between software development (Dev) and IT operations (Ops) teams. It aims to streamline the software delivery process and improve the overall efficiency and quality of software development and deployment.">
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
    <div class="overlay-photo-image-bg parallax" data-bg-img="{{('home/assets/images/services/devOps/devops.jpg')}}"
      data-bg-opacity="1"></div>
    <div class="overlay-color"></div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="hero-text-area text-center text-light wow fadeInUp " data-wow-delay=".2s">
            <h1 class="hero-title  ">{!! translateText('DevOps</h1>
            <p class="hero-subtitle">Accelerate Innovation, Drive Efficiency: Embrace the Power of DevOps
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
                <p class="service-main-text">
                  {!! translateText('DevOps is a software development approach that emphasizes collaboration,
                  communication, and automation between software development (Dev) and IT operations (Ops) teams. It
                  aims to streamline the software delivery process and improve the overall efficiency and quality of
                  software development and deployment. DevOps practices involve continuous integration, continuous
                  delivery/deployment, infrastructure automation, and monitoring, enabling faster and more reliable
                  software releases. The goal of DevOps is to bridge the gap between development and operations,
                  fostering a culture of collaboration and enabling organizations to deliver software products more
                  rapidly and effectively.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--Start service content-->

      </div>
      <!-- Start first sub service div-->
      <div id="azure_devops">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h4 class="service-title">{!! translateText('Azure DevOps</h4>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  It is a comprehensive set of development tools and services provided by Microsoft to support the
                  entire software development lifecycle. It combines version control, build automation, continuous
                  integration/continuous delivery (CI/CD), project management, and collaboration tools into a single
                  platform.
                  It also integrates seamlessly with Microsoft Azure cloud services, providing a cohesive development
                  and deployment environment for cloud-based applications.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\AzureDevOps.jpg')}}" alt="AzureDevOps"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End first sub service div-->
      <!-- Start second sub service div-->
      <div id="container_platforms">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\docker_and_kubernetis_1.jpg')}}"
                  alt="docker and kubernetis"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Container Platforms</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Docker and Kubernetes are two popular technologies used in the world of software development and
                  deployment. While they serve different purposes, they are often used together to create and manage
                  scalable and portable applications.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End second sub service div-->
      <!-- Start third sub service div-->
      <div id="infrastructure_as_code">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Infrastructure as Code</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Infrastructure as Code (IaC) is an approach where infrastructure resources (such as servers, networks,
                  and databases) are managed and provisioned using code. Instead of manually configuring and managing
                  infrastructure, IaC allows you to define and automate these processes through code.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\InfrastructureAS_code1.png')}}"
                  alt="InfrastructureAS code"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End third sub service div-->
      <!-- Start fourth sub service div-->
      <div id="version_control_collaborative_coding">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\Version_control_and_collaborative_coding_1.png')}}"
                  alt="version control"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Version Control & Collaborative Coding</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  Version control is the practice of tracking and managing changes to code and files, while
                  collaborative coding involves multiple developers working together on the same codebase. These
                  practices enable teams to work efficiently, manage code changes, and collaborate effectively.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End fourth sub service div-->
      <!-- Start fifth sub service div-->
      <div id="configuration_management">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pr-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Configuration Management</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  It is the practice of systematically managing and controlling the configuration of software, systems,
                  or infrastructure components. It involves establishing and maintaining the desired state of these
                  components, ensuring consistency, and facilitating changes and updates.
                  ', $lang) !!}
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInRight" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\configuration_management.png')}}"
                  alt="configuration management"></div>
            </div>
          </div>
        </div>
      </div>
      <!--End fifth sub service div-->
      <!-- Start sixth sub service div-->
      <div id="pipeline_ci_cd">
        <div class="row service-content-area">
          <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="img-area  ">
              <div class="image   "><img class="about-img img-fluid " loading="lazy"
                  src="{{asset('home\assets\images\services\devOps\PipleLineCiCd.png')}}" alt="PipleLineCiCd"></div>
            </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center wow fadeIn " data-wow-delay="0.6s">
            <div class="service-content pl-lg-3">
              <div class="part">
                <h2 class="service-title">{!! translateText('Pipeline (CI/CD)</h2>
                <div class="line-on-side "> </div>
                <p class="service-text">
                  CI/CD (Continuous Integration/Continuous Deployment) is a software development approach that aims to
                  automate the process of integrating code changes, running tests, and deploying applications to
                  production environments. A CI/CD pipeline refers to the set of practices, tools, and processes used to
                  achieve these goals in a streamlined and efficient manner.
                  ', $lang) !!}
                </p>
              </div>
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