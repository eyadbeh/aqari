<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main2.css') }}" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/faq.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Page-2.css') }}" media="screen">
    {{-- <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen"> --}}

        <script class="u-script" type="text/javascript" src="{{ asset('script/jquery.js') }}" defer=""></script>
        <script class="u-script" type="text/javascript" src="{{ asset('script/main.js') }}" defer=""></script>
        <meta name="referrer" content="origin">
        
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        
        
    <title>FAQ Collapse</title>
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
        
          left: -24px;
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
</head>

<body>
    <nav>
        <div class="nav-content">
          <div class="logo">
            <a href="home"  data-image-width="300" data-image-height="133">
              <img src="{{ asset('images/TopBarLogo.svg') }}" alt="LOGO AQARI" style="width:200px;height:100px;">
            </a>
          </div>
          <ul class="nav-links">
            <li>
              <a href="home" class="navbar-link" data-nav-link>Home</a>
            </li>
    
            <li>
              <a href="about" class="navbar-link" data-nav-link>About</a>
            </li>
            <li>
              <a href="contact" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>


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


    
      </nav>
      <section class="home"></section>
    
    
      <script>
      let nav = document.querySelector("nav");
        window.onscroll = function() {
          if(document.documentElement.scrollTop > 20){
            nav.classList.add("sticky");
          }else {
            nav.classList.remove("sticky");
          }
        }
      </script>

    <h1>Frequently Asked Questions</h1>
    <div class="faq-container">
        <div class="faq ">
            <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
            <p class="faq-text">They make up everything</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq ">
            <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
            <p class="faq-text">They make up everything</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq ">
            <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
            <p class="faq-text">They make up everything</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq ">
            <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
            <p class="faq-text">They make up everything</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="faq ">
            <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
            <p class="faq-text">They make up everything</p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-white" id="sec-bea3"><div class="u-clearfix u-sheet u-sheet-1" style="max-height: 105px;">

      <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1" style="bottom: -75px;">
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
      <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{ asset('images/SolidColorIcon1.svg') }}" alt="" data-image-width="84" data-image-height="112" style="
      bottom: -11px;
  ">
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="">
        <div class="menu-collapse" style="font-size: 1.5rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-effect-duration u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-2bae"></use></svg>
            <svg class="u-svg-content" version="1.1" id="svg-2bae" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav1 u-spacing-30 u-unstyled u-nav-1" style="
          top: -87px;
          position: relative;
          padding-left: 519px;
      "><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="home" target="_blank" style="padding: 10px 16px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="faq" style="padding: 10px 16px;">FAQs</a>
</li><li class="u-nav-item"><a class="u-border-active-black u-border-hover-black u-button-style u-nav-link u-text-active-custom-color-6 u-text-hover-black" href="contact" target="_blank" style="padding: 10px 16px;">Contact</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home" target="_blank">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="f">FAQ</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact" target="_blank">Contact</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div></footer>
    <!-- <script src="script.js"></script> -->
    <script src="{{ asset('script/faq.js') }}"></script>
  
    <!-- 
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
      const phoneInputField = document.querySelector("#phone");
      const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
          "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
      });
    </script>
</body>

</html>