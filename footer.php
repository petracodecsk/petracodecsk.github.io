
<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
			<div class="col-md-5 w3layouts_footer_grid" data-aos="fade-right">
				<h3>About <span>TECH LANKA SOLUTIONS</span></h3>
				<p> We believe that it is our talented, motivated and results-oriented team makes the difference. We work entirely from our office and do not outsource. Quality is what matters the most. </p>
				<ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			
			<div class="col-md-3 w3layouts_footer_grid" data-aos="fade-down">
				<h3>Newsletter</h3>
				<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter your email..." required="">
					<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
			</div>
			<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-right">
				<h3>Contact Us</h3>
					<ul class="con_inner_text">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>No 63 Main Street. City Paradise Supermarket, <label> Colombo 11</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@techlanka.biz</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +94 761093610 | +94 774412429</li>
						<!-- <li><span class="fa fa-clock-o" aria-hidden="true"></span> 8am to 6pm</li> -->
						<li><span class="fa fa-globe" aria-hidden="true"></span> <a href="#">info@techlanka.biz</a></li>
					</ul>

			</div>
			<!-- <div class="col-md-3 w3layouts_footer_grid" data-aos="fade-left">
				<h3>Instagram</h3>
				  <ul class="con_inner_text midimg">
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					 <li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
				 </ul>
				
			</div> -->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
			
<div class="copyright">
	<div class="container">
		<p class="copyright">© 2020 Tech Lanka Solutions. All Rights Reserved | Design by <a href="" target="_blank">Tech Lanka Solutions</a></p>
	</div>
</div>
<!-- //copyright -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- banner-type-text -->
<script src="js/typed.js" type="text/javascript"></script>
<script>
	$(function(){

		$("#typed").typed({
			// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
			stringsElement: $('#typed-strings'),
			typeSpeed: 110,
			backDelay: 500,
			loop: false,
			contentType: 'html', // or text
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); },
			resetCallback: function() { newTyped(); }
		});

		$(".reset").click(function(){
			$("#typed").typed('reset');
		});

	});

	function newTyped(){ /* A new typed object */ }

	function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->

<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- //flexSlider -->

<!-- swipe box js -->
<script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
<script type="text/javascript"> 
	$(function(){ 
		$('.row2').adipoli({
			'startEffect' : 'overlay',
			'hoverEffect' : 'sliceDown'
		}); 
	});
	
</script>
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
</script>
<!-- //swipe box js -->

<!-- Numscroller -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Numscroller -->
	
<!-- Responsive Slider script -->
<script src="js/responsiveslides.min.js"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
	});
</script>
<!-- //Responsive Slider script -->

<script src="js/SmoothScroll.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
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


<!-- move to top-js-files -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script><!-- bootstrap js file -->