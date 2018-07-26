<!-- Supportive-JavaScript -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.min.js"></script>
    <!-- Necessary-JS-File-For-Bootstrap -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>

    <!-- SmoothScroll-JavaScript -->
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar li a, .footer a[href='#myPage']").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
           
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
            });
          
            $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                  $(this).addClass("slide");
                }
                });
            });
        })
    </script>
    <!-- //SmoothScroll-JavaScript -->

    <!-- Slideanim-JavaScript -->
    <script type="text/javascript">
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    </script>
    <!-- //Slideanim-JavaScript -->

    <!-- Owl-Carousel-JavaScript -->
	<script src="{{ asset(env('THEME')) }}/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : false,
			});
		});
	</script>
    <!-- //Owl-Carousel-JavaScript -->

    <!-- Banner-Slider-JavaScript -->
	<script src="{{ asset(env('THEME')) }}/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
			  auto: true,
			  nav: true,
			  speed: 500,
			  namespace: "callbacks",
			  pager: true,
			});
		  });
	</script>
    <!-- //Banner-Slider-JavaScript -->    
    
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/            
			$().UItoTop({ easingType: 'easeOutQuart' });            
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //Slide-To-Top JavaScript -->
	   
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/move-top.js"></script>
	<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	
	<!-- FlexSlider-JavaScript -->
    <script defer src="{{ asset(env('THEME')) }}/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
<!-- //FlexSlider-JavaScript -->