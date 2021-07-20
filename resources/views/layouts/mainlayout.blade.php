<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/css/templatemo-style.css">
    
    @stack('after-style')
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
   <!--  <script src="/js/jquery-3.3.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body id="reportsPage">
    <div class="" id="home">
        @include('includes.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('includes.footer')
    </div>

    
    <!-- https://jquery.com/download/ -->
    <script src="/js/moment.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="/js/tooplate-scripts.js"></script>
    @stack('after-script')
    <!---->
</body>

</html>