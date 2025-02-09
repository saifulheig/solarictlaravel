<nav class="menu-navbar">
    <div class="header-logo">
      <a class="logo-link" href="{{url('/')}}"><img class="logo-img light-logo" loading="lazy" src="{{asset('home/assets/images/logo/logo2.png')}}" alt="logo"/>
      <img class="logo-img  dark-logo" loading="lazy" src="{{asset('home/assets/images/logo/logo2.png')}}" alt="logo"/></a>
    </div>
    <div class="links menu-wrapper ">
      <ul class="list-js links-list">
      
        <li class="menu-item"><a class="menu-link  " href="{{url('about')}}"> {{translateText('About Us', $lang ) }} </a></li>
        <li class="menu-item has-custom-sub-menu"><a class="menu-link  " href="#0">{{translateText('Our Services', $lang ) }}&nbsp; <i class="bi bi-chevron-down icon "> </i></a>
          <ul class="custom-sub-menu">
            <div class="container custom-sub-menu-content">
              <div class="row ">
                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                    {!! translateText('
                    <h6><a class="link color-theme color-theme" href="'.url('digital_transformation').'"><i class="flaticon-nanotechnology nav-icon"></i>Digital Transformation</a></h6>
                    <ul class="no-bullet">
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#business_email_services').'">Business Email Services</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#data_sharing_and_protection').'">Data Sharing & Protection</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#communication_services').'">Communication Services</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#mobility_and_security_services').'">Mobility & Security Services</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#business_application_management').'">Business Applications Management</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#corporate_crm_and_erp_solutions').'">Corporate CRM & ERP solutions</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#data_migration').'">Data Migration</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/digital_transformation#microsoft_365_implementation').'">Microsoft 365 Platform Implementation</a></li>
                    ', $lang) !!}
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                    <!--TO-DO fix this!-->
                    <h6><a class="link color-theme" href="{{url('cloud_services')}}"><i class="bi bi-clouds nav-icon"></i>{{translateText('Cloud Services', $lang) }}</a></h6>
                    <ul class="no-bullet">
                    {!! translateText('
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#virtual_machine').'">Virtual Machine & Desktop</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#virtual_networking').'">Virtual Networking & Services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#cloud_storage_and_backup_services').'">Cloud Storage & Backup services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#cloud_database_services').'">Cloud Database Services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#identity_services').'">Identity Services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#security_and_monitoring').'">Security & Monitoring</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#migration_services').'">Migration Services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/cloud_services#management_and_governance').'">Management & Governance</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('enterprise_network').'"><i class="flaticon-profile nav-icon"></i>Enterprise Network & Security Solutions</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#lan_implementation_migration').'">LAN Implementation & Migration</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#wan_implementation_migration').'">WAN Implementation & Migration</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#wlan_implementation_migration').'">WLAN Implementation & Migration</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#advanced_networking_features').'">Advanced Networking Features Implementations</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#network_security_implementation').'">Network Security Implementation</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#site_to_site_vpn_implementation').'">Site to Site VPN Implementation</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/enterprise_network#firewall_security_solutions').'">Firewall Security Solutions</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                  {!! translateText('
                      <h6><a class="link color-theme" href="'.url('cyber_security').'"><i class="flaticon-security nav-icon"></i>Cyber Security</a></h6>
                      <ul class="no-bullet">
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#va_pen_test').'">Vulnerability & Pen Test</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#assessments_audits').'">Assessments & Audits</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#zero_trust_security').'">Zero Trust Security</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#security_information_event_management').'">Security Information & Event Management</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#data_loss_prevention').'">Data Loss Prevention</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#mobile_device_management').'">Mobile Device Management</a></li>
                        <li><a class="footer-menu-link submenu-link" href="'.url('/cyber_security#key_management').'">Key Management</a></li>
                      </ul>
                    ', $lang) !!}
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('it_infrastucture_virtualization').'"><i class="bi bi-hdd-stack nav-icon"></i>IT Infrastructure Virtualization</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/it_infrastucture_virtualization#vmware_products_solutions').'">VMware Products & Solutions</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/it_infrastucture_virtualization#microsoft_hyper-v_services').'">Microsoft Hyper-V Services</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/it_infrastucture_virtualization#linux_kvm').'">Linux KVM</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/it_infrastucture_virtualization#proxmox_ve').'">Proxmox VE</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4 mb-3 mb-lg-5">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('digital_marketing').'"><i class="flaticon-megaphone nav-icon"></i>Digital Marketing</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/digital_marketing#seo').'">SEO – Search Engine Optimization</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/digital_marketing#social_media_marketing').'">Social Media Marketing</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/digital_marketing#email_marketing').'">Email Marketing</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/digital_marketing#telemarketing').'">Telemarketing</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('web_development').'"><i class="flaticon-web-development nav-icon"></i>Web Development</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#php_laravel_framework').'">PHP Laravel Framework</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#asp_net_framework').'">ASP.NET Framework</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#front_end_development').'">Front-end Development</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#responsive_web_design').'">Responsive Web Design</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#wordpress_themes').'">WordPress Themes</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#web_api').'">Web API</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#database_management').'">Database Management</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/web_development#website_maintenance_support').'">Website Maintenance & Support</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('devops').'"><i class="bi bi-tools nav-icon"></i>DevOps</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#azure_devops').'">Azure DevOps</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#container_platforms').'">Container Platforms</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#infrastructure_as_code').'">Infrastructure as Code</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#version_control_collaborative_coding').'">Version Control & Collaborative Coding</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#configuration_management').'">Configuration Management</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/devops#pipeline_ci_cd').'">Pipeline (CI/CD)</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-3">
                  <div class="info-content">
                  {!! translateText('
                    <h6><a class="link color-theme" href="'.url('managed_consulting').'"><i class="flaticon-technical-support nav-icon"></i>IT Managed & Consulting Services</a></h6>
                    <ul class="no-bullet">
                      <li><a class="footer-menu-link submenu-link" href="'.url('/managed_consulting#service_desk').'">Service Desk</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/managed_consulting#microsoft_365_platform').'">Microsoft 365 Platform Administration</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/managed_consulting#it_network_and_security').'">IT Network and Security Maintenance</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/managed_consulting#system_windows_and_linux').'">System Windows and Linux Support</a></li>
                      <li><a class="footer-menu-link submenu-link" href="'.url('/managed_consulting#it_consulting_services').'">IT Consulting Services</a></li>
                    </ul>
                  ', $lang) !!}
                  </div>
                </div>
                
              </div>
            </div>
          </ul>
        </li>
        {{--<li class="menu-item has-custom-sub-menu"><a class="menu-link  " href="{{url('/#projects')}}">{{translateText('Projects', $lang ) }}</i></a>
        </li>--}}
       
        <li class="menu-item"><a class="menu-link  " href="{{url('contact_us')}}">{{translateText('Contact Us',$lang )}}</a></li>

      </ul>
    </div>
    <div class="controls-box">
      <!--Menu Toggler button-->
      <div class="control  menu-toggler"><span></span><span></span><span></span></div>

      <div class= "menu-item has-sub-menu">
        <div class="dropdown language-dropdown">
          <button class="btn dropdown-toggle no-arrow menu-link no-focus" type="button" id="dropdownMenuButton">
          <i class="bi bi-globe2 icon"></i>&nbsp;{{ session()->get('locale') ? strtoupper(session()->get('locale')) : 'EN' }} 
          </button>
          <div class="dropdown-menu right-dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="footer-menu-link" href="{{url('google/translate/change?lang=EN')}}">English</a>
            <a class="footer-menu-link" href="{{url('google/translate/change?lang=FR')}}">French</a>
            <a class="footer-menu-link" href="{{url('google/translate/change?lang=DE')}}">Deutsch</a>
          </div>
        </div>
      </div>
    </div>
  </nav>