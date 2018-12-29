<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link href="/frontend/css/laravel.min.css" rel="stylesheet">
	<!-- jQuery library -->
	<script rel="preload" src="/frontend/js/jquery.min.js" as="script"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<!-- bootstrap js library -->
	<script rel="preload" src="/frontend/js/bootstrap.min.js" as="script"></script>
</body>
</html>