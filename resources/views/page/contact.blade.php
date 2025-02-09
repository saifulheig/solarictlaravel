<!DOCTYPE html>
<html lang="zxx">
<head>
    {{-- CSS link start --}}
    @include('home.css')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{-- CSS link end --}}
        <title> Solar-ICT | Contact Us</title>
        <meta name="description" content="Delivering Sustainable Positive Impact through Expertly Crafted Software Solutions. Empowering Your Business with Design, Development, and Operations.">
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
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg" data-bg-img="{{asset('home/assets/images/sections-bg-images/pattern-bg-1.jpg')}}" data-bg-opacity=".2"></div>
      <div class="particles-js" id="particles-js"></div>
      <div class="container">
        <div class="hero-text-area centerd wow fadeInUp" data-wow-delay=".2s">
          {!! translateText('
          <h1 class="hero-title ">Contact Us</h1>
          <p class="hero-subtitle ">
            Discover new opportunities for your business. We are ready to assist you every step of the way.
          ', $lang) !!}
          </p>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    @if (session('success'))
    <section class="mega-section pb-0">
      <div id="flash-message" class="text-center">
      <h4>{{ translateText(session('success'), $lang) }}</h4>
      </div>
    </section>
    @endif

    @if (session('error'))
    <section class="mega-section pb-0">
      <div id="flash-message" class="text-center">
      <h4>{{ translateText(session('error'), $lang) }}</h4>
      </div>
    </section>
    @endif

    <!-- Start contact-us -->
    <section class="contact-us  mega-section  pb-0" id="contact-us">
      <div class="container">
        <section class="contact-us-form-section mb-5" >
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
              <div class="contact-form-panel  wow fadeInUp">
                <div class="sec-heading centered    ">
                  <div class="content-area">
                  {!! translateText('
                    <h2 class=" title ">Have any Project or Idea?</h2>
                    <h4 class=" ">We would love to hear from you.
                  ', $lang) !!}
                    </h4>
                  </div>
                </div>
                <div class="contact-form-inputs" data-wow-delay=".6s">
                  <div class="custom-form-area input-boxed"> 
                    <!--Form To have user messages-->
                    <form class="main-form" id="contact-us-form" method="POST" action="{{route('contact.us')}}">
                      @csrf
                      <div class="row">
                        <div class="col-12 col-lg-6">
                          <div class="   input-wrapper">
                            <input class="text-input" id="user-name" name="name" type="text" required/>
                            <label class="input-label" for="user-name">{!! translateText('Name', $lang) !!} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="   input-wrapper">
                            <input class="text-input" id="user-email" name="email" type="email" required/>
                            <label class="input-label" for="user-email">{!! translateText('E-mail', $lang) !!} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 ">
                          <div class="   input-wrapper">
                            <input class="text-input" id="msg-subject" name="subject" type="text" required/>
                            <label class="input-label" for="msg-subject">{!! translateText('Subject', $lang) !!} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>

                        <div class="col-12 col-lg-6 ">
                          <div class="   input-wrapper">
                          
                            <label class="input-label" for="msg-service">{!! translateText('Service', $lang) !!} <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          <select name="service" id="msg-service" required>

                            <option value="" disabled selected>
                          {!! translateText('
                              Select service</option>
                            <option value="Digital Transformation">Digital Transformation</option>
                            <option value="ECloud Services">Cloud Services</option>
                            <option value="Enterprise Network & Security Solutions">Enterprise Network & Security Solutions</option>
                            <option value="Cybersecurity">Cyber Security</option>
                            <option value="IT Infrastructure Virtualization">IT Infrastructure Virtualization</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Web Application Development">Web Development</option>
                            <option value="DevOps">DevOps</option>
                            <option value="Managed and Consulting Services">IT Managed & Consulting Services</option>
                          </select>
                          ', $lang) !!}
                          </div>
                        </div>

                        <div class="col-12 ">
                          <div class="   input-wrapper">
                            <textarea class=" text-input" id="msg-text" name="message" required></textarea>
                            <label class="input-label" for="msg-text">{!! translateText('Your Message', $lang) !!} <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 submit-wrapper">
                          <!-- <button class=" btn-solid g-recaptcha" 
                              data-sitekey="6LejU4kmAAAAAKjoBl19e3XrdOP2aYSdUdAvmlav" 
                              data-callback='onSubmit' 
                              data-action='submit' type="submit">{!! translateText('Send Message', $lang) !!}</button> -->
                               <div class="g-recaptcha" data-sitekey="6LfJumsnAAAAAOtYpb8plg2K0GOCHH5AOOCMoawH"></div>
                              <br/> 
                              <!-- <input type="submit" value="Submit"> -->
                          <button class=" btn-solid" type="submit">{!! translateText('Send Message', $lang) !!}</button>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="locations-section pt-5">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">{!! translateText('Our Offices around the World', $lang) !!}</h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row">
                <div class="col-12 col-lg-4 offset-lg-4 ml-lg-4">     
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".4s ">
                    <h4 class="location-title"> Switzerland</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">Rue du jura 3 <br>1023 Crissier<br>Switzerland</p>
                    <!-- <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">email:</h6><a class="email link" href="mailto:info@solar-ict.com">info@solar-ict.com</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">phone:</h6><a class="tel link" href="tel:+41765669804">+41765669804</a>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- <div class="col-12 col-lg-4">           
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".6s">
                    <h4 class="location-title">Italy</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">Via G. Leopardi 43<br> 82010 S. Angelo A Cupolo (BN)<br> Italy</p> -->
                    <!-- <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">Email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">Phone:</h6><a class="tel link" href="tel:0123456789">+969876543210</a>
                      </div>
                    </div> -->
                  <!-- </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".8s">
                    <h4 class="location-title">Bangladesh</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">House # 10/1, Block # A, Mazukhan Bazar, Ward 40, Gazipur,<br> Bangladesh</p> -->
                    <!-- <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">Email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">Phone:</h6><a class="tel link" href="tel:0123456789">+459876543210</a>
                      </div>
                    </div> -->
                  <!-- </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>
        <section class="map-section  elf-section mb-5">
          <div class="sec-heading  centered   ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">{!! translateText('Find Us on Google Maps', $lang) !!}</h2>
            </div>
          </div>
          <div class="map-box  wow fadeInUp" data-wow-delay=".6s">
            <div class="mapouter">
              <div class="gmap_canvas">
                
                <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.1084549830792!2d6.5783393187178385!3d46.539104491383235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31a02111bb6f%3A0x786eefe814971fc0!2sRue%20du%20Jura%203%2C%201023%20Crissier%2C%20Switzerland!5e0!3m2!1sen!2sbd!4v1685248545622!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- End contact-us -->
    <!-- Start  page-footer Section-->
   
    @include('home.footer')
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    {{-- <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div> --}}
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Component-->   
        
    @include('home.script')
    <!-- <script>
      function onSubmit(token) {
        console.log(1);
        //document.getElementById("main-form").submit();
        // Perform any necessary validations
        var nameInput = document.querySelector('input[name="name"]');
        var emailInput = document.querySelector('input[name="email"]');
        var subjectInput = document.querySelector('input[name="subject"]');
        var messageInput = document.querySelector('textarea[name="message"]');
        var serviceInput = document.querySelector('select[name="service"]');

        if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || subjectInput.value.trim() === '' || messageInput.value.trim() === '' || serviceInput.value.trim() === '') {
            // Show an error message or perform any necessary actions
            alert('Please fill out the required fields!');
            return;
        }
        // If all validations pass, submit the form
        document.getElementById('contact-us-form').submit();
      }
    </script> -->
    <script>
      document.getElementById('contact-us-form').addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent the default form submission
          
          // Perform any necessary validations
          var nameInput = document.querySelector('input[name="name"]');
          var emailInput = document.querySelector('input[name="email"]');
          var subjectInput = document.querySelector('input[name="subject"]');
          var messageInput = document.querySelector('textarea[name="message"]');
          var serviceInput = document.querySelector('select[name="service"]');
 
          if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || subjectInput.value.trim() === '' || messageInput.value.trim() === '' || serviceInput.value.trim() === '') {
              // Show an error message or perform any necessary actions
              alert('Please fill out the required fields!');
              return;
          }
          // If all validations pass, submit the form
          this.submit();
      });
    </script>

  </body>
</html>