<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Product Details</title>
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
      .noti{
        position: relative;
        right: -344px;
        display: inline-block;
        top: -5px;
      }

      </style>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/product_details.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('script/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('script/main.js') }}" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
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
    <meta name="twitter:title" content="product_details">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="product_details">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-6" href="home" style="top: -3px;position: relative;right: -139px;padding: 10px 20px;">Aqari your Home</a>
</li>
</li>
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
    <section class="u-clearfix u-section-1" id="sec-ef89">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" data-interval="11000" data-u-ride="carousel" id="carousel-4457">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-4457" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-4457" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-4457" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-4457" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-4457" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-4457" data-u-slide-to="5" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="1620" data-image-height="1080">
                <img class="u-back-image u-expanded" src="{{ asset('images/pexels-photo-5699456.jpeg') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1"></div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1620" data-image-height="1080">
                <img class="u-back-image u-expanded" src="{{ asset('images/pexels-photo-3285196.jpeg') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="340" data-image-height="344">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset('images/card7.png') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="340" data-image-height="344">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset('images/card6.png') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-4"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="340" data-image-height="343">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset('images/card5.png') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-5"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-6" data-image-width="1500" data-image-height="1500">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="{{ asset('images/pexels-photo-1115804.jpeg') }}">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-6"></div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-4457" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-4457" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-7a96">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-1">This elegant and spacious family home is located in the Kista district of Stockholm, just 14 km from the Royal Swedish Opera, the Stockholm Medieval Museum and Stureplan. It is a 9 km drive from Friends Arena and 14 km from Sergels Torg Arena. <br>You can explore nearby attractions such as the Army Museum located just 15 km away and the Royal Palace located 15 km from this charming house 
        </p>
        <p class="u-text u-text-default u-text-2">Amenities</p>
        <p class="u-text u-text-default u-text-3">
          <span style="font-weight: 700;">2 Adults ,3 Children ,4 Nights | </span>Two Rooms ,Double Bed 
        </p>
        <p class="u-text u-text-custom-color-12 u-text-4">Free Wifi</p><span class="u-icon u-text-black u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 25 24" style=""><use xlink:href="#svg-57b1"></use></svg><svg class="u-svg-content" viewBox="0 0 25 24" id="svg-57b1"><path d="M2.5 9.48265C2.7944 9.20365 3.09761 8.9393 3.4087 8.6896C9.01855 4.18711 17.1911 4.45146 22.5 9.48265" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.5 12.8995C15.634 9.0335 9.366 9.0335 5.5 12.8995" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path><path d="M16.5 16.1569C14.2908 13.9477 10.7092 13.9477 8.5 16.1569" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 20C13.1904 20 13.75 19.4404 13.75 18.75C13.75 18.0597 13.1904 17.5 12.5 17.5C11.8097 17.5 11.25 18.0597 11.25 18.75C11.25 19.4404 11.8097 20 12.5 20Z" fill="currentColor"></path></svg></span>
        <p class="u-text u-text-custom-color-12 u-text-5">Parking Available</p><span class="u-file-icon u-icon u-icon-2"><img src="{{ asset('images/car.png') }}" alt=""></span>
        <p class="u-text u-text-custom-color-12 u-text-6">Restaurant</p>
        <p class="u-text u-text-custom-color-12 u-text-7">Fitness Center</p><span class="u-file-icon u-icon u-icon-3"><img src="{{ asset('images/chopsticks-fork.png') }}" alt=""></span><span class="u-file-icon u-icon u-icon-4"><img src="{{ asset('images/dumbbell.png') }}" alt=""></span>
        <p class="u-text u-text-custom-color-7 u-text-8">Bathroom</p><span class="u-file-icon u-icon u-icon-5"><img src="{{ asset('images/tub.png') }}" alt=""></span>
        <p class="u-text u-text-custom-color-12 u-text-9">Room Service</p><span class="u-file-icon u-icon u-icon-6"><img src="{{ asset('images/single-bed.png') }}" alt=""></span>
        <p class="u-text u-text-custom-color-7 u-text-10">Air Conditioning</p><span class="u-file-icon u-icon u-icon-7"><img src="{{ asset('images/heavy-wind.png') }}" alt=""></span>
        <p class="u-text u-text-custom-color-12 u-text-11">Tea/Coffee Machine</p><span class="u-file-icon u-icon u-icon-8"><img src="{{ asset('images/tea-drink.png') }}" alt=""></span>
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