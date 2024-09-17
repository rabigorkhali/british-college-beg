<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._header')

  @section('stylesheets')

  
  @endsection
<meta charset="utf-8">
    <title>British Education Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" href="https://i.imgur.com/ingMWX4.png" type="image/png">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="../public/assets/assetss/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/animate.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../public/assets/assetss/css/style.css" type="text/css">
	<link rel="stylesheet" href="../public/assets/assetss/css/coloring.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="../public/assets/assetss/css/colors/blue.css" type="text/css">
  

</head>

<body id="homepage" class="homepage">
	


    <div id="wrapper" class="fullwidth no-padding">
        <div id="main">


<div id="top-bar" class="transparent dark"> 
  @include('partials._navbar')
  
 </div> 
<!-- /.preloader -->


    <div id="content">

               




    @yield('content')
    
    </div>


 </div>
  </div> <!-- end of .container -->

  <!-- New -->




  <!-- New -->




  @include('partials._footer')




</body>

</html>