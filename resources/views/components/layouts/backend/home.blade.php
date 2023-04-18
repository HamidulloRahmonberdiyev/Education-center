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

  

  </div>
  
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
    </ul>   
    <ul class="navbar-nav align-items-center right-nav-link">
      <li class="nav-item">
        <form action="{{ route('logout') }}" method="post">
          @csrf
            <button class="btn mr-2 logout text-white">Logout</button>
        </form>
      </li>
    </ul>
  </nav>
</header>


  <div class="container">
  
    {{ $slot }}

  </div>
 
 
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    
	<footer>
      <div class="container">
        <div class="text-center">

        </div>
      </div>
  </footer>
	<!--End footer-->
	
   
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
