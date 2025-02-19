<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Contact">
    <meta name="description" content="">
    <title>Contact</title>
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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('script/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('script/main.js') }}" defer=""></script>
    
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    
    
    
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
    <meta name="twitter:title" content="contact">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="contact">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-18a8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
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
       </div></header>
    <section class="u-clearfix u-section-1" id="sec-3bde">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h5 class="u-text u-text-1">welcome</h5>
                  <h2 class="u-custom-font u-font-ubuntu u-text u-text-2">Our Contact</h2>
                  <p class="u-text u-text-grey-40 u-text-3"> Article evident arrived express highest men did boy. Mistress sensible entirely am so. Quick can manor smart money hopes worth too. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. </p>
                  <a href="contact#sec-636f" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1">Our contact </a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <div class="u-shape u-shape-svg u-text-palette-3-base u-shape-1">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xlink:href="#svg-ee28"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-ee28"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
	c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
	c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
	C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
                  </div>
                  <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1500" data-image-height="1000"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_f00b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-text u-text-default u-text-1">Address</h3>
                  <div class="custom-expanded u-align-left u-container-style u-grey-5 u-group u-shape-rectangle u-group-1">
                    <div class="u-container-layout u-container-layout-2"><span class="u-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54.757 54.757" style=""><use xlink:href="#svg-e83a"></use></svg><svg class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px" y="0px" id="svg-e83a" style="enable-background:new 0 0 54.757 54.757;"><g><path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5
		s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"></path><path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
		L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4
		C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031
		C45.576,13.08,46.321,24.468,41.099,31.431z"></path>
</g></svg></span>
                      <h5 class="u-text u-text-2">New Cairo </h5>
                    </div>
                  </div>
                  <h3 class="u-text u-text-default u-text-3">Online</h3>
                  <div class="u-container-style u-expanded-width u-grey-5 u-group u-shape-rectangle u-group-2">
                    <div class="u-container-layout u-container-layout-3"><span class="u-align-left u-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xlink:href="#svg-3da3"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-3da3" style="enable-background:new 0 0 60 60;"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path><path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path><path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path><path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
</g></svg></span>
                      <h5 class="u-align-left u-text u-text-4">+20 123 444 55 66</h5><span class="u-icon u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xlink:href="#svg-9fcb"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-9fcb" style="enable-background:new 0 0 60 60;"><g><path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"></path><path d="M42.5,21h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,21,42.5,21z"></path><path d="M22.875,18.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,23.901,18.243,24,18.5,24c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,17.943,23.306,17.874,22.875,18.219z"></path><path d="M42.5,32h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,32,42.5,32z"></path><path d="M22.875,29.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,34.901,18.243,35,18.5,35c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,28.943,23.306,28.874,22.875,29.219z"></path><path d="M42.5,43h-16c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1S43.052,43,42.5,43z"></path><path d="M22.875,40.219l-4.301,3.441l-1.367-1.367c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2,2
		C17.987,45.901,18.243,46,18.5,46c0.22,0,0.441-0.072,0.624-0.219l5-4c0.432-0.346,0.501-0.975,0.156-1.406
		C23.936,39.943,23.306,39.874,22.875,40.219z"></path>
</g></svg></span>
                      <h5 class="u-text u-text-5">info@Aqari.com</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-4">
                  <h3 class="u-text u-text-default u-text-6">On a Map</h3>
                  <div class="custom-expanded u-grey-light-2 u-map u-map-1">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item" src="https://maps.google.com/maps?output=embed&amp;key=AIzaSyAwG7xn9uJBSYRUQmjvKbobfVPfxD8lbs8&amp;q=new%20Cairo&amp;z=13&amp;t=m" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIybmV3JTIwQ2Fpcm8lMjIlMkMlMjJ6b29tJTIyJTNBMTMlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0ElMjJBSXphU3lBd0c3eG45dUpCU1lSVVFtanZLYm9iZlZQZnhEOGxiczglMjIlMkMlMjJtYXJrZXJzJTIyJTNBJTVCJTdCJTIycG9zaXRpb24lMjIlM0ElN0IlMjJsYXQlMjIlM0EzMC4wMzEzNzEyMzYyNDc0OTQlMkMlMjJsbmclMjIlM0EzMS40NDUwODEyMzM5NzgyNyU3RCUyQyUyMnRpdGxlJTIyJTNBJTIyJTIyJTJDJTIyZGVzY3JpcHRpb24lMjIlM0ElMjIlMjIlMkMlMjJsaW5rVXJsJTIyJTNBJTIyJTIyJTJDJTIybGlua0NhcHRpb24lMjIlM0ElMjIlMjIlMkMlMjJ6b29tJTIyJTNBOSU3RCU1RCU3RA=="></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-3" id="carousel_c664">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-left-cell u-size-12 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-1">
                  <img src="{{ asset('images/5.png') }}" alt="" class="custom-expanded u-expanded-width-md u-image u-image-contain u-image-default u-image-1">
                </div>
              </div>
              <div class="u-align-center u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-size-12 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-2">
                  <img src="{{ asset('images/3.png') }}" alt="" class="custom-expanded u-expanded-width-md u-image u-image-contain u-image-default u-image-2">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-12 u-layout-cell-3">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-3">
                  <img src="{{ asset('images/4.png') }}" alt="" class="custom-expanded u-expanded-width-md u-image u-image-contain u-image-default u-image-3">
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-12 u-layout-cell-4">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-4">
                  <img src="{{ asset('images/2.png') }}" alt="" class="custom-expanded u-expanded-width-md u-image u-image-contain u-image-default u-image-4">
                </div>
              </div>
              <div class="u-align-center u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-12 u-layout-cell-5">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-5">
                  <img src="{{ asset('images/6.png') }}" alt="" class="custom-expanded u-expanded-width-md u-image u-image-contain u-image-default u-image-5">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-636f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-38 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h3 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1"> What Can We Offer for Your Business</h3>
                  <p class="u-text u-text-2">Leave your phone number and your message and we will contact you.</p>
                  <div class="u-expanded-width u-form u-form-1">

                    {{-- fl form dy htb3t lel database phone w message --}}
                    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="u-form-group u-form-name u-label-none u-form-group-1" style="padding-bottom: 5%">
        <label for="phone" class="u-label">Phone</label>
        <input type="text" placeholder="ex: 0100 123 4567 " id="phone" name="phone" class="u-border-none u-grey-5 u-input u-input-rectangle" required>
        @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        @endif
    </div>

    <div class="u-form-email u-form-group u-label-none u-form-group-2" style="padding-bottom: 5%">
        <label for="message" class="u-label">Message</label>
        <textarea placeholder="Leave Your Message Here!" id="message" name="message" class="u-border-none u-grey-5 u-input u-input-rectangle" rows="5" required></textarea>
        @if ($errors->has('message'))
            <span class="text-danger">{{ $errors->first('message') }}</span>
        @endif
    </div>

    <div class="u-align-left u-form-group u-form-submit u-label-none u-form-group-3">
        <button type="submit" class="u-border-none u-btn u-button-style u-palette-3-base u-btn-1">Submit</button>
    </div>
</form>
                    
                  </div>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-22 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <p class="u-text u-text-grey-40 u-text-3"> A monthly digest of the latest news and venenat is urna resources. our clinic was created to make your smile beautiful, healthy and snow-white.&nbsp;</p>
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-ec48"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ec48"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-palette-3-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-b862"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b862"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-palette-3-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-f498"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-f498"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                    </a>
                  </div>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact" target="_blank">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>
  
</body></html>