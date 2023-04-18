<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{ $title ?? 'Admin Panel'}}</title>
  <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
  <link rel="icon" href="{{ asset('backend') }}/assets/images/logo.png" type="image/x-icon">
  <link href="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="{{ asset('backend') }}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('backend') }}/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="{{ asset('backend') }}/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme9">
 
<!-- Start wrapper-->
 <div id="wrapper">
 

   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="/admin">
       <img src="{{ asset('backend') }}/assets/images/logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Nusrat ta'lim</h5>
     </a>
   </div>
   

   <x-layouts.backend.navbar></x-layouts.backend.navbar>

    </div>
  
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Qidiruv">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
   
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i>
      </a>
    </li>

    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-uz mr-2"></i> Uzbek tili</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-sa mr-2"></i> Arab tili</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-us mr-2"></i> Ingliz tili</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-ru mr-2"></i> Rus tili</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-kr mr-2"></i> Koreys tili</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-tr mr-2"></i> Turk tili</li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{ asset('frontend') }}/images/user.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('frontend') }}/images/user.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-3 user-title">{{ Auth::user()->name }}</h6>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2 text-warning"></i> {{ Auth::user()->email }}</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item "><i class="icon-settings mr-2 text-info"></i> Sozlamalar</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item">
            <form action="{{ route('logout') }}" method="post">
              @csrf
                <button class="btn mr-2 logout text-white"> <i class="icon-power text-danger mr-1"></i> Chiqish</button>
            </form>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</header>


<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
  
    {{ $slot }}

  </div>
</div> 
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    
    </div>
 
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    
	<footer>
      <div class="container">
        <div class="text-center">

        </div>
      </div>
  </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Teksturalar</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradiyent Fonlar</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/bootstrap.min.js"></script>
	
  <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.js"></script>
  <script src="{{ asset('backend') }}/assets/js/sidebar-menu.js"></script>
  <script src="{{ asset('backend') }}/assets/js/jquery.loading-indicator.js"></script>
  <script src="{{ asset('backend') }}/assets/js/app-script.js"></script>
  <script src="{{ asset('backend') }}/assets/plugins/Chart.js/Chart.min.js"></script>
  <script src="{{ asset('backend') }}/assets/js/index.js"></script>

  
</body>
</html>
