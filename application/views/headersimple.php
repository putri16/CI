<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->
<!DOCTYPE html>
<html>
<head>
<title>Halaman User</title>
<link href="<?php echo base_url();?>source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>source/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>source/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url();?>source/css/hover.css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Jaunt Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>source/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>source/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script src="<?php echo base_url();?>source/js/modernizr.custom.js"></script>
<!--banner Slider starts Here-->
	  			<script src="<?php echo base_url();?>source/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto:false,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--//End-slider-script-->
<!--strikty navgation script start here-->
<script>
$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
		} else {
			$('#sticky_navigation').css({ 'position': 'relative' }); 
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});
</script>
<!--sticky navgation script end here-->
</head>
<body>

<!--header strip start here-->
<div id="sticky_navigation_wrapper">
	<div id="sticky_navigation">
<div class="h-strip">
	<div class="container">
		<div class="h-strip-main">
			<div class="h-strip-logo">
				<div class="h-strip-left">
					<h1><a href="index.html">REPUBLIKA</a></h1>
				</div>
				<div class="h-strip-right">
				  <form method="get" action="<?php echo base_url('home/cari2'); ?>">
					<input type="text" value="" placeholder="Search" name="cari" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
					<input type="submit" value="">
				  </form>
				</div>
			  <div class="clearfix"> </div>
			</div>
			<!-- top-nav -->
			<span class="menu"> </span>
			<div class="cleary"> </div>
		<div class="top-strip">
			<nav class="cl-effect-4">
				<ul class="top-nav">
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>home/login">Login</a></li>
					
				</ul>
			</nav>
		</div>
		<script>
					$( "span.menu" ).click(function() {
					  $( ".top-strip" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>
		<!-- top-nav -->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<section id="main">
<!--header strip end here-->