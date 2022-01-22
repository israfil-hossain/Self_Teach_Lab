<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    {{-- <!--====== Title ======--> --}}
    <title>SelfTeach-Lab</title>
    
    {{-- <!--====== Favicon Icon ======--> --}}
    <link rel="shortcut icon" href="asset/images/logo/icon2.png" type="image/png">

    {{-- <!--====== Slick css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/slick.css')}}">

    {{-- <!--====== Animate css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    
    {{-- <!--====== Nice Select css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}">
    
    {{-- <!--====== Nice Number css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/jquery.nice-number.min.css')}}">

    {{-- <!--====== Magnific Popup css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    {{-- <!--====== Bootstrap css ======--> --}}
    {{-- <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"> --}}
    
    
    {{-- <!--====== Fontawesome css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
    
    {{-- <!--====== Default css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/default.css')}}">
    
    {{-- <!--====== Style css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    
    {{-- <!--====== Responsive css ======--> --}}
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">

     {{-- --====== Card css ======- --}}
     <link rel="stylesheet" href="{{asset('asset/css/card.css')}}">
     
     
      {{-- Bootstrap CSS --}}
     <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
     
     <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">

     <link rel="stylesheet" href="{{ asset('backend/fonts/web-icons/web-icons.min599c.css?v4.0.2') }}">
     <link rel="stylesheet" href="{{ asset('backend/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <a href="{{ route('home') }}">
                                    <img src="{{asset('asset/images/logo/Selfteach.png')}}" alt="Logo" style="height: 80px;">
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-3 col-lg-2 col-xl-2 d-none d-sm-block">
                        @if(Auth::check() && !Auth::user()->hasRole('instructor') && !Auth::user()->hasRole('admin'))
                        <span class="become-instructor" href="{{ route('login') }}" data-toggle="modal" data-target="#myModal">Become Instructor</span>
                        @endif
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                            @guest
                            <li> 
                                {{-- <img src="{{asset('asset/images/logo/login.png')}}" alt="icon" style="Width:30px;height:30px;text-decoration:none;">        --}}
                                <a class="btn btn-learna" href="{{route('login')}}"><b>Login / Sign Up</b></a>  
                            </li>
                            @else
                            <div class="dropdown float-xl-left float-sm-right float-right">
                               
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"role="button" id="dropdownMenuButtonRight" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span >{{ Auth::user()->first_name }} </span>
                                </button>
                                {{-- <span id="dropdownMenuButtonRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} &nbsp;<i class="fa fa-caret-down"></i></span> --}}
                                  
                               <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonRight">
                                  
                                  @if(Auth::user()->hasRole('instructor'))
                                  <a class="dropdown-item" href="{{ route('instructor.dashboard') }}" >
                                      <i class="fa fa-sign-out-alt"></i> Instructor
                                  </a>
                                  @endif
              
                                  <a class="dropdown-item" href="{{ route('my.courses') }}" >
                                      <i class="fa fa-sign-out-alt"></i> Dashboard
                                  </a>
                                  <div class="dropdown-divider"></div>
              
                                  <a class="dropdown-item" href="{{ route('logOut') }}" >
                                      <i class="fa fa-sign-out-alt"></i> Logout
                                  </a>
                               </div>
                               
                            </div>
                            {{-- @if(Auth::user()->hasRole('student')) --}}
                            {{-- <li class="menu-item menu-item-has-children parent">
                                <div class="btn-group">
                                    <img src="{{asset('asset/images/logo/login.png')}}" alt="icon" style="Width:50px;height:50px;">&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"role="button" id="Dropdown_1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span >{{ Auth::user()->first_name }} </span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="Dropdown_1">
                                        <li class="dropdown-item">
                                            <a title="Dashboard" href="#">Dashboard</a> 
                                        </li>
                                        </li>
                                        <li class="dropdown-item">
                                            <a title="Buy-Token" href="#">BuyToken</a> 
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-item" href="{{route('logOut')}}">Logout</a>
                                        </li>
                                    </ul> --}}
                                {{-- </div> --}}
                            {{-- </li> --}}
                            
                            {{-- @if(Auth::user()->hasRole('instructor')) --}}
                            {{-- <li class="menu-item menu-item-has-children parent"> --}}
                                
                                {{-- <div class="btn-group"> --}}
                                {{-- <img src="{{asset('asset/images/logo/login.png')}}" alt="icon" style="Width:50px;height:50px;">&nbsp;&nbsp;&nbsp; --}}
                                {{-- <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" role="button" id="Dropdown_2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="">Instructor({{Auth::user()->first_name}})</span>
                                </button>
                                    
                                    <ul class="dropdown-menu" aria-labelledby="Dropdown_2">
                                        <li class="dropdown-item">
                                            <a title="Dashboard" href="{{route('instructor.dashboard')}}">Dashboard</a> 
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endif --}}
                        @endguest                                     
                    </div>
                </div>
                
            </div> 
            <!-- container  -->
        </div> 
        <!-- header top -->
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    
                                    <li class="nav-item">
                                        <a class="active" href="{{route('home')}}">Home</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="/freequiz">Free Quiz</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('classicquiz')}}">Classic Quiz</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a  href="#">Courses</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('course.list') }}">Course-list</a></li>
                                            <li>
                                                <div class="dropdown float-left" >
                                                    <span id="dropdownMenuButton" data-toggle="dropdown">Categories &nbsp;<i class="fa fa-caret-down"></i></span>
                                                      <?php 
                                                          $categories = App\Http\SiteHelpers::active_categories();
                                                      ?>
                                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      @foreach ($categories as $category)
                                                          <a class="dropdown-item" href="{{ route('course.list','category_id[]='.$category->id) }}">
                                                              <i class="fa {{ $category->icon_class }} category-menu-icon"></i>
                                                              {{ $category->name}}
                                                          </a>
                                                      @endforeach
                                                    </div>
                                                  </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('blogs') }}">Blogs</a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('instructor.list') }}">Instructors Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('page.about') }}">About Us</a>
                                    </li>
                                      <li class="nav-item">
                                        <a href="{{ route('page.contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->

            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->

    <div id="sidebar">
        <ul>
           <li><a href="javascript:void(0)" class="sidebar-title">Categories</a></li>
           @foreach ($categories as $category)
           <li>
                <a href="{{ $category->slug }}">
                    <i class="fa {{ $category->icon_class }} category-menu-icon"></i>
                    {{ $category->name}}
                </a>
           </li>
           @endforeach
        </ul>
    </div>
    @yield('content')
  
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="{{asset('asset/images/logo/icon2.png')}}" alt="Logo" style="height: 175px;"></a>
                            </div>
                            <p>We are selfTeachLab.We Provided Online Course.Our Quiz Section is open for EveryOne Who want to Earn Money with play Quiz.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Quick Link</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="{{ route('course.list') }}"><i class="fa fa-angle-right"></i>Courses List</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Free Quiz</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Classic Quiz</a></li>
                                <li><a href="{{ route('blogs') }}"><i class="fa fa-angle-right"></i>Blogs List</a></li>
                                <li><a href="{{ route('instructor.list') }}"><i class="fa fa-angle-right"></i>Our Teacher</a></li>
                            </ul>

                        </div> <!-- footer link -->
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Resources</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('page.about') }}"><i class="fa fa-angle-right"></i>About Us</a></li>
                                <li><a href="{{ route('page.contact') }}"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                                <li><a href="{{ route('register') }}"><i class="fa fa-angle-right"></i>Register Page</a></li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-angle-right"></i>Login Page</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Top Catagories</h6>
                            </div>
                            <ul>
                                @foreach ($categories as $category)
                                @if($loop->iteration <= 4)
                                    <li><a href="{{ route('course.list','category_id[]='.$category->id) }}">{{ $category->name}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        {{-- <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                 <h6>Contact Us</h6> 
                            </div>
                            
                        </div> <-- footer address --> --}}
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Copyright © 2021, <b>SelfTeachLab.</b>&nbsp; <i>All rights reserved.</i></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    <!-- The Modal start -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header bi-header ">
              <h5 class="col-12 modal-title text-center bi-header-seperator-head">Become an Instructor</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
             
          <div class="becomeInstructorForm">
             <form id="becomeInstructorForm" class="form-horizontal" method="POST" action="{{ route('become.instructor') }}">
              {{ csrf_field() }}
              {{-- @csrf --}}
                  <div class="px-4 py-2">
                      <div class="form-group">
                          <div class="row">
                              <div class="col-6">
                                  <label>First Name</label>
                                  <input type="text" class="form-control form-control-sm" placeholder="First Name" name="first_name">
                              </div>
                              <div class="col-6">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control form-control-sm" placeholder="Last Name" name="last_name">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Contact Email</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Contact Email" name="contact_email">
                      </div>
  
                      <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Phone" name="mobile">
                      </div>
  
                      <div class="form-group">
                          <label>BkashID</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Bkash ID" name="Bkash_id">
                      </div>
  
                      <div class="form-group">
                          <label>Biography</label>
                          <textarea class="form-control form-control" placeholder="Biography" name="biography"></textarea>
                      </div>
  
                      <div class="form-group mt-4">
                          <button type="submit" class="btn btn-lg btn-block login-page-button">Submit</button>
                      </div>
  
                  </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
      <!-- The Modal end -->
    
    </body>    
    <!--====== jquery js ======-->
    <script src="{{asset('asset/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('asset/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    {{-- <script src="{{('asset/js/bootstrap.min.js')}}"></script> --}}
    
    <!--====== Slick js ======-->
    <script src="{{('asset/js/slick.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{('asset/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{('asset/js/waypoints.min.js')}}"></script>
    <script src="{{('asset/js/jquery.counterup.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('asset/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('asset/js/validator.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('asset/js/ajax-contact.js')}}"></script>
   

    <!--====== Main js ======-->
    <script src="{{asset('asset/js/main.js')}}"></script>
    {{-- <script src="{{asset('asset/js/map-script.js')}}"></script> --}}
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontend/js/fancybox.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/modernizr.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
    
    <!-- Toastr -->
    <script src="{{ asset('backend/vendor/toastr/toastr.min599c.js?v4.0.2') }}"></script>

    

    <script>
        $(window).on("load", function (e){
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
        });
    </script>
   
    <script type="text/javascript">
        $(document).ready(function()
        {   
            /* Delete record */
            $('.delete-record').click(function(event)
            {
                var url = $(this).attr('href');
                event.preventDefault();
                
                if(confirm('Are you sure want to delete this record?'))
                {
                    window.location.href = url;
                } else {
                    return false;
                }

            });

            /* Toastr messages */
            toastr.options.closeButton = true;
            toastr.options.timeOut = 5000;
            @if(session()->has('success'))
                toastr.success("{{ session('success') }}");
            @endif
            @if(session()->has('status'))
                toastr.success("{{ session('status') }}");
            @endif
            @if(session()->has('error'))
                toastr.error("{{ session('error') }}");
            @endif
            @if(session()->has('info'))
                toastr.info("{{ session('info') }}");
            @endif

            $('.mobile-nav').click(function()
            {
                $('#sidebar').toggleClass('active');
                
                $(this).toggleClass('fa-bars');
                $(this).toggleClass('fa-times');
            });

            $("#becomeInstructorForm").validate({
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    contact_email:{
                        required: true,
                        email:true
                    },
                    mobile: {
                        required: true
                    },
                    Bkash_id:{
                        required: true,
                    },
                    biography: {
                        required: true
                    },
                },
                messages: {
                    first_name: {
                        required: 'The first name field is required.'
                    },
                    last_name: {
                        required: 'The last name field is required.'
                    },
                    contact_email: {
                        required: 'The contact email field is required.',
                        email: 'The contact email must be a valid email address.'
                    },
                    mobile: {
                        required: 'The Phone field is required.'
                    },
                    Bkash_id: {
                        required: 'The Bkash id field is required.',
                    },
                    biography: {
                        required: 'The biography field is required.'
                    },
                }
            });
        });
    </script>
    @yield('javascript')
</html>
