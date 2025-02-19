<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Company, ​We create brands and experiences that drive remarkable change, ​Our Leadership and People, ​Start your free trial today, Contact Us">
    <meta name="description" content="">
    <title>About</title>
    <style>
      /* Style the dropdown button */
      .dropbtn {
        background-color: #ffffff;
        color: white;
      
        font-size: 16px;
        border: none;
        cursor: pointer;
      }
      
      /* Dropdown button on hover & focus */
      .dropbtn:hover, .dropbtn:focus {
        background-color: #ffffff;
      }
      
      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        
          right: -364px;
        display: inline-block;
      }
      
      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      /* Links inside the dropdown */
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }
      
      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      /* Change the background color of the dropdown button when the dropdown content is shown */
      .dropdown:hover .dropbtn {
        background-color: #ffffff;
      }
      </style>
      <link rel="stylesheet" href="{{ asset('css/about.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('script/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('script/main.js') }}" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{ asset('images/TopBarLogo.svg') }}",
		"sameAs": [
				"www.facebook.com",
				"twitter.com",
				"instagram.com",
				"linkedin.com"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="about">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="about">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-18a8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="250" data-image-height="111">
          <img class="u-logo-image u-logo-image-1" src="{{ asset('images/TopBarLogo.svg') }}">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="SM">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-effect-duration u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="dropdown">
            <img class="dropbtn" src="{{ asset('images/Profile.svg') }}" alt="" data-image-width="64" data-image-height="32" data-href="#">
            <!-- <button class="dropbtn">Dropdown</button> -->
            <div class="dropdown-content">
                <ul style="list-style: none;">
                <p>&nbsp;&nbsp; Hi {{ Auth::user()->first_name }}</p>
                {{-- <li style="margin-right: 15%"><a href="login">Login</a></li>
                <li style="margin-right: 15%"><a href="register">Sign Up</a></li> --}}
  
                <li style="margin-right: 15%"><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  >Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                  </form>
              </li>
       
              </ul>
              </div>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-6" href="home" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-6" href="about" target="_blank" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-6" href="contact" target="_blank" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about" target="_blank">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact" target="_blank">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        {{-- <!-- <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{ asset('images/Profile.svg') }}" alt="" data-image-width="64" data-image-height="32" data-href="#"> --> --}}
      </div></header>
    <section class="u-align-left u-clearfix u-white u-section-1" id="carousel_6610">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h2 class="u-align-left u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0"> Company</h2>
                  <h6 class="u-align-left u-text u-text-default u-text-2"> Elementum eu facilisis sed odio morbi quis</h6>
                  <p class="u-align-left u-text u-text-3"> Massa ultricies mi quis hendrerit dolor magna eget est. Lacinia at quis risus sed vulputate odio ut enim blandit. Auctor elit sed vulputate mi sit. Massa tincidunt dui ut ornare lectus. Turpis egestas sed tempus urna et. Diam vulputate ut pharetra sit amet aliquam id. Nisi est sit amet facilisis. In nisl nisi scelerisque eu ultrices vitae.&nbsp;Massa ultricies mi quis hendrerit dolor magna eget est. Lacinia at quis risus sed vulputate odio ut enim blandit. Auctor elit sed vulputate mi sit.</p>
                  <a href="contact" class="u-active-palette-1-light-2 u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-palette-3-base u-radius u-text-active-white u-text-hover-white u-btn-2">Contact Us</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="custom-expanded u-image u-image-circle u-image-1" alt="" data-image-width="2000" data-image-height="1333" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0"></div>
                  <ul class="u-custom-list u-file-icon u-text u-text-default u-text-5">
                    <li style="padding-left: 8px;">
                      <div class="u-list-icon u-text-palette-1-light-1">
                        <div>●</div>
                      </div> Interior Design<br>
                    </li>
                    <li style="padding-left: 8px;">
                      <div class="u-list-icon u-text-palette-1-light-1">
                        <div>●</div>
                      </div>Creative Team
                    </li>
                    <li style="padding-left: 8px;">
                      <div class="u-list-icon u-text-palette-1-light-1">
                        <div>●</div>
                      </div>Project Management<br>
                    </li>
                    <li style="padding-left: 8px;">
                      <div class="u-list-icon u-text-palette-1-light-1">
                        <div>●</div>
                      </div>Creative Direction<br>
                    </li>
                    <li style="padding-left: 8px;">
                      <div class="u-list-icon u-text-palette-1-light-1">
                        <div>●</div>
                      </div>About Studio
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-container-align-center u-white u-section-2" id="carousel_6939" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-align-left u-container-style u-layout-cell u-size-18-xl u-size-21-lg u-size-25-md u-size-25-sm u-size-25-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <div class="custom-expanded u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-1" data-href="#" data-animation-name="customAnimationIn" data-animation-duration="1500">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                          <h5 class="u-align-left u-text u-text-1"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-1"><img src="{{ asset('images/3405554-c2fb1ca3.png') }}" alt=""></span>&nbsp;​UI/UX Design
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-2" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                          <h5 class="u-align-left u-text u-text-2"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-2"><img src="{{ asset('images/596092-43696d9d.png') }}" alt=""></span>&nbsp;​Digital Marketing
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-3" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                          <h5 class="u-align-left u-text u-text-3"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-3"><img src="{{ asset('/images/1436404-f90e125b.png') }}" alt=""></span>&nbsp;​App Development&nbsp;<br>
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-4" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                          <h5 class="u-align-left u-text u-text-4"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-4"><img src="{{ asset('images/1388394-b61fac07.png') }}" alt=""></span>&nbsp;Graphic Design
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-5" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="1000">
                        <div class="u-container-layout u-similar-container u-container-layout-6">
                          <h5 class="u-align-left u-text u-text-5"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-5"><img src="{{ asset('images/1014398-982e6642.png') }}" alt=""></span>&nbsp;​Logo Design
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-6" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="1250">
                        <div class="u-container-layout u-similar-container u-container-layout-7">
                          <h5 class="u-align-left u-text u-text-6"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-6"><img src="{{ asset('images/10332393-34b3c4fc.png') }}" alt=""></span>&nbsp;​Website Design
                          </h5>
                        </div>
                      </div>
                      <div class="u-border-2 u-border-palette-1-light-2 u-container-align-left u-container-style u-list-item u-radius-15 u-repeater-item u-shape-round u-list-item-7" data-href="#" data-animation-direction="Up" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="1500">
                        <div class="u-container-layout u-similar-container u-container-layout-8">
                          <h5 class="u-align-left u-text u-text-7"><span class="u-file-icon u-icon u-text-palette-3-base u-icon-7"><img src="{{ asset('images/10302417-9f53fbac.png') }}" alt=""></span>&nbsp;​SEO and ​Branding
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-container-align-left u-container-style u-layout-cell u-size-35-md u-size-35-sm u-size-35-xs u-size-39-lg u-size-42-xl u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-valign-middle u-container-layout-9">
                  <h2 class="u-align-left u-text u-text-default u-text-8" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0"> We create brands and experiences that drive remarkable change</h2>
                  <p class="u-align-left u-text u-text-9">Sample text. Click to select the Text Element.&nbsp;Tincidunt eget nullam non nisi est. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Quis ipsum suspendisse ultrices gravida dictum. Justo nec ultrices dui sapien eget mi. Turpis egestas maecenas pharetra convallis posuere morbi. Urna duis convallis convallis tellus.</p>
                  <a href="#" class="u-active-palette-1-light-2 u-align-left u-border-active-black u-border-hover-black u-border-none u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-3-base u-palette-1-light-1 u-radius u-btn-1"> Our Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-clearfix u-container-align-center u-white u-section-3" id="carousel_2085">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1"> Our Leadership and People</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="598" data-image-height="598" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-2" style="font-weight: bold;">Eyad Osama</h5>
                <p class="u-align-center u-text u-text-3"> BackEnd Developer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-4">Shimaa Saied</h5>
                <p class="u-align-center u-text u-text-5">UI/UX Designer</p>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div alt="" class="u-image u-image-circle u-image-3" data-image-width="598" data-image-height="598" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-6">Ahmed Hegazy</h5>
                <p class="u-align-center u-text u-text-7"> Front-End Developer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div alt="" class="u-image u-image-circle u-image-4" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-8">Ahmed Nabil</h5>
                <p class="u-align-center u-text u-text-9">Flutter Developer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div alt="" class="u-image u-image-circle u-image-5" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-10"> Ahmed Samy</h5>
                <p class="u-align-center u-text u-text-11">Flutter Developer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <div alt="" class="u-image u-image-circle u-image-6" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-12">Assem Ramdan</h5>
                <p class="u-align-center u-text u-text-13">Creative Content</p>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div alt="" class="u-image u-image-circle u-image-7" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-14">Mohamed Ashraf</h5>
                <p class="u-align-center u-text u-text-15">BackEnd Developer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div alt="" class="u-image u-image-circle u-image-8" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-16">&nbsp;Omar Essam</h5>
                <p class="u-align-center u-text u-text-17">UI/UX Designer</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-opacity u-opacity-90 u-repeater-item u-shape-rectangle">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div alt="" class="u-image u-image-circle u-image-9" data-image-width="626" data-image-height="417" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0"></div>
                <h5 class="u-align-center u-text u-text-16">&nbsp;Mai Farah</h5>
                <p class="u-align-center u-text u-text-17">BackEnd Developer </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- l goz2 elle fo2 da a5r l section --}}

    <section class="u-clearfix u-container-align-center u-white u-section-4" id="sec-9464">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                  <h2 class="u-align-left u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0">Contact Us</h2>
                  <p class="u-align-left u-text u-text-2"> We are here to meet any business need and to promote your company online!</p>
                  <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-3">
                    <span style="font-weight: 700;">Phone</span>: <a href="tel:201501477886" class="u-active-none u-border-active-black u-border-hover-grey-75 u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-3-light-2 u-text-hover-palette-1-light-1 u-text-palette-3-base u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">20 123456789</a>
                    <br>
                    <span style="font-weight: 700;">Location</span>: New Cairo<br>
                    <span style="font-weight: 700;">Mail</span>: <a href="mailto:maahmed14785@gmail.com?subject=question" class="u-active-none u-border-active-black u-border-hover-grey-75 u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-3-light-2 u-text-hover-palette-1-light-1 u-text-palette-3-base u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">test@aqari.com</a>
                  </h5>
                </div>
              </div>
              <div class="u-container-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <img class="u-image u-image-contain u-image-default u-image-1" data-image-width="1700" data-image-height="2001" src="{{ asset('images/22678026_IconBusinessv3_1_.png') }}" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="0">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-white" id="sec-bea3"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="300" data-image-height="133">
          <img src="{{ asset('images/TopBarLogo.svg') }}" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-3372"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3372"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://www.twitter.com"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-7dbe"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7dbe"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram.com" target="_blank" href="https://www.instagram.com"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-3"><img src="{{ asset('images/3955024.png') }}" alt=""></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href="https://www.linkedin.com"><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-8a6c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8a6c"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{ asset('images/SolidColorIcon1.svg') }}" alt="" data-image-width="84" data-image-height="112">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="">
          <div class="menu-collapse" style="font-size: 1.5rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-effect-duration u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-2bae"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-2bae" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav1 u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="home" target="_blank" style="padding: 10px 16px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="faq" style="padding: 10px 16px;">FAQs</a>
</li><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="contact" target="_blank" style="padding: 10px 16px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home" target="_blank">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="faq">FAQs</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact" target="_blank">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
  
</body></html>