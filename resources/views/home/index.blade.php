<!DOCTYPE html>
<html lang="zxx">
  <head>
    {{-- CSS link start --}}
    @include('home.css')
    {{-- CSS link end --}}
        <title> Solar-ICT</title>
        <meta name="description" content="Delivering Sustainable Positive Impact through Expertly Crafted Software Solutions. Empowering Your Business with Design, Development, and Operations.">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  </head>
  <body>
    <!--Start Page Header-->
    <header class=" page-header   header-basic" id="page-header">
      <div class="container">
        {{-- Navbar start --}}

        @include('home.navbar')

        {{-- Navbar end --}}
      </div>
    </header>
    <!--End Page Header-->

    <!-- Start  Page hero-->
    
    @include('home.hero')
    <!--End of .hero-text-area-->

    <!-- End  Page hero-->

    <!-- Start  services Section-->

    @include('home.service')

    <!-- End  services Section-->

    <!-- Start  about Section-->
    @include('home.about')
    <!-- End  about Section-->

    @include('home.tools')
    
    <br>
    <br>
    <br>

    <!-- Start  testimonials Section-->
   
    @include('home.testimonial')

    <!-- End  testimonials Section-->


    <!-- Start  page-footer Section-->
    
    @include('home.footer')

    <!-- End  page-footer Section-->

    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Component-->   
        
    @include('home.script')
  </body>
</html>