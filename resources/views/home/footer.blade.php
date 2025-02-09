<footer class="page-footer dark-color-footer" id="page-footer">
    <div class="overlay-photo-image-bg" data-bg-img="{{asset('home/assets/images/sections-bg-images/footer-bg-1.jpg')}}" data-bg-opacity=".25"></div>
    <div class="container">
      <div class="row footer-cols">
        
        <div class="col-5 col-lg-3 ">
          <h2 class=" footer-col-title"><a class="link" href="{{url('/')}}">Solar - ICT</a></h2>
          <div class="footer-col-content-wrapper">
            <ul class="footer-menu ">
            {!! translateText('
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('about').'">About Us</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('about/#howWeServe').'">How We Serve</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('about/#whoWeServe').'">Who Do We Serve</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('contact_us').'">Contact Us</a>
              </li>
            ', $lang) !!}
            </ul>
          </div>
        </div>

        <div class="col-7 col-lg-5  footer-col ">
          <h2 class=" footer-col-title">{{translateText('Our Services', $lang ) }}</h2>
          {!! translateText('
          <div class="footer-col-content-wrapper">
            <ul class="footer-menu">
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('digital_transformation').'">Digital Transformation</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('cloud_services').'">Cloud Services</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('enterprise_network').'">Enterprise Network & Security Solutions</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('cyber_security').'">Cybersecurity</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('it_infrastucture_virtualization').'">IT Infrastructure Virtualization</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('digital_marketing').'">Digital Marketing</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('web_development').'">Web Development</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('devops').'">DevOps</a>
              </li>
              <li class="footer-menu-item"> <a class="footer-menu-link" href="'.url('managed_consulting').'">IT Managed & Consulting Services</a>
              </li>
            ', $lang) !!}
            </ul>
          </div>
        </div>
      
        <div class="col-12 col-lg-4 footer-col text-lg-right">
          <div class="footer-col-content-wrapper">    
            <a class="logo-link" href="{{url('/')}}">
              <img class="img-fluid footer-logo" loading="lazy" src="{{asset('home/assets/images/logo/logo.png')}}" alt="logo"/>
            </a>
            <div class="contact-info-card"><span class="info">Rue du jura 3, 1023 Crissier, Switzerland  </span></div>
            <div class="contact-info-card">
              <a class="info" href="tel:+41765669804">+41 (0) 76 566 98 04 </a>
              <a class="text-lowercase  info" href="mailto:info@solar-ict.com" target="_blank">, info@solar-ict.com</a>
            </div>
            <div class="contact-info-card">
              <div class="social-icons">
                <div class="sc-wrapper dir-row sc-size-32">
                  <ul class="sc-list">
                    <li class="sc-item " title="Linkedin"><a class="sc-link" target="_blank" href="https://www.linkedin.com/company/solar-i-c-t/" title="social media icon"><i class="fab fa-linkedin sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" target="_blank" href="https://www.youtube.com/@Solar-ICT" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="Facebook"><a class="sc-link" target="_blank" href="https://www.facebook.com/profile.php?id=100094100101140" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    {{--<li class="sc-item " title="instagram"><a class="sc-link" target="_blank" href="" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>--}}
                    {{-- <li class="sc-item " title="twitter"><a class="sc-link" target="_blank" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>--}}
                  </ul>
                </div>
              </div>
            </div>  
            <div class="contact-info-card">
              <p class="info pt-lg-5">
                {{ date('Y') }}  &copy;  <a class="link" href="{{url('/')}}">Solar - ICT</a>
              </p> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="copyrights ">
      <div class="container">
        <div class="row">
          <div class="col-12 d-md-flex justify-content-end">
            <p class="creadits">
              &copy; Copyright <a class="link" href="{{url('/')}}">Solar - ICT</a>. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div> -->
  </footer>