<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<div class="container" style="    height: 10px;">
		<nav class="navbar navbar-default" style="height: 1px">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php"><img src="images/logo.png" alt="Los Angeles" style="width: 53%;margin-left: -399px;margin-top: -119px;" class="logo"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						<li><a href="#services" class="effect-3 scroll">Services</a></li>
						<li><a href="#contact" class="effect-3 scroll">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</nav>
		</div>
	</div>
</div>

<div class="banner_top">
	<div class="">
		<div class="wrapper">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
				<li>
					<div class="agile_banner_text_info " style="background: rgba(0, 0, 0, 0.52);padding: 19px;border-radius: 6px;">
						<h2 id="heading" style="font-weight: 700"></h2><br>
						<h2 id="heading">WE INSPIRE<span>THE NEXT</span> </h2>
						
						<p>Enabling businesses to get competitive edge in the market by building scalable and extensible software and web applications.</p>
						
						<a href="#contact" class="scroll">Get Started</a>
					</div>
				</li>
				
			</ul>
			<!-- Slideshow 3 Pager -->
		</div>
	</div>
</div>
<script type="text/javascript">
var string = "TECH LANKA SOLUTIONS"; /* type your text here */
var array = string.split("");
var timer;

function frameLooper () {
	if (array.length > 0) {
		document.getElementById("heading").innerHTML += array.shift();
	} else {
		clearTimeout(timer);
			}
	loopTimer = setTimeout('frameLooper()',120); /* change 70 for speed */

}
frameLooper();
</script>