<!DOCTYPE html>
<html>
<head>
    <title>Tradeaux | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset(env('THEME')) }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset(env('THEME')) }}/css/style.css" rel="stylesheet" type="text/css" media="all" />   
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/owl.carousel.css" type="text/css" media="all">
    <!-- Web-Fonts -->
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!-- //Web-Fonts -->
	<script src="{{ asset(env('THEME')) }}/js/modernizr.custom.js"></script>
</head>
<body>
    <!-- Header-Starts-Here -->
    <div class="header">
        <!-- Container -->
        <div class="container">
        <!-- Navigation -->
		    <nav class="navbar navbar-inverse">	
                @yield("navigation") 
		    </nav>
        </div>
        <!-- //Container -->

        <!-- Slider-Starts-Here -->
        <div class="slider">            
            @yield('slider')            
        </div>
        <!-- //Slider-Ends-Here -->
    </div>

    <!-- //Header-Ends-Here -->
    <div class="content">

    	<!-- Area-Starts-Here -->
            @yield('service')
        <!-- //Area-Ends-Here -->

        <!-- Offer-Starts-Here -->
        <div class="offer slideanim" id="offer">            
            @yield('offer')            
        </div>
        <!-- //Offer-Ends-Here -->

        <!-- Cover-Starts-Here -->            
            @yield('industrie')            
        <!-- //Cover-Ends-Here -->

        <!-- Details-Starts-Here -->            
            @yield('about')            
        <!-- Details-Ends-Here -->

    	<!-- Gallery-Starts-Here -->            
            @yield('gallery')            
		<!-- //Gallery-Ends-Here -->

    	<!-- Contact-Starts-Here -->        
            @yield('contact')        
		<!-- //Contact-Ends-Here -->

    </div>

	<!-- Map-iFrame -->
	<!--div class="map slideanim">
		<iframe src="https://www.google.com/maps/embed?pb=49.589596, 34.551140" allowfullscreen></iframe>
	</div-->
	<!-- //Map-iFrame -->

    <!-- Footer-Starts-Here -->
        @yield("footer")
    <!-- //Footer-Ends-Here -->
        
        @include(env("THEME") . '.script')
	
</body>
</html>