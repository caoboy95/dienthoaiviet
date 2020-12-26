
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="icon" href="/image/icon/LOGO-2.png" type="image/icon type">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/css/layout-HomePage.css">
	<link rel="stylesheet" type="text/css" href="/css/navbar-footer.css">
	<link rel="stylesheet" type="text/css" href="/css/layout-product.css">
	<link rel="stylesheet" type="text/css" href="/css/layout-listphones.css">
	<link rel="stylesheet" type="text/css" href="/css/user/login.css">
	<link rel="stylesheet" type="text/css" href="/css/user/sigup.css">
	<link rel="stylesheet" type="text/css" href="/css/layout-sim-page.css">
	<link rel="stylesheet" type="text/css" href="/css/layout-hirepurchase.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- js -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
 
</head>
<body>

	
	@yield('content')
	
	@include('footer')
	@include('navbar')	

</body>
</html>