<!doctype html>
<html lang="en">
  <head>
  	<title>Stock management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('broad/css/style.css')}}">
  </head>
  <body>
		
		@include('dashboard.sidebar')
	    
	      </div>
    	</nav>

	<!-- [ Main Content ] start -->
<div class="main-container">
    <div class="content" >

        @yield('content')
	 </div>
		</div>

    <script src="{{asset('broad/js/jquery.min.js')}}"></script>
    <script src="{{asset('broad/js/popper.js')}}"></script>
    <script src="{{asset('broad/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('broad/js/main.js')}}"></script>
  </body>
</html>