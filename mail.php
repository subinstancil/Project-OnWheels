
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Contact Us</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<?php 
session_start();
$_SESSION['pagex']="contactus";
if(isset($_SESSION['user']))
{
    include "user_banner.php";
}
else if(isset($_SESSION['manufacture']))
{
	 include "manufacture_banner.php";
   }
else if(isset($_SESSION['admin']))
{
   }
else if(isset($_SESSION['preown']))
{
   include "preown_banner.php";
}
else{
	include "banner.php";
}
 ?>



<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>
<!-- mail -->
	

	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head">Contact Us</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>

			<div class="w3_agile_mail_grids_agile">
				<div class="col-md-8 w3_agile_mail_left">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form method="post" action="contact.php" enctype="multipart/form-data">
							<span>
								<i>Name</i>
								<input type="text" name="name" placeholder=" " required="">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="email" placeholder=" " required="">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="sub" placeholder=" " required="">
							</span>
							<span>
								<i>Message</i>
								<textarea name="msg" placeholder=" " required=""></textarea>
							</span>
							<input type="submit" value="Submit Now">
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4 w3_agile_mail_right">
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Mail Us</h3>
						<a href="mailto:info@example.com">info@onwheels.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Address</h3>
						<p>PO Box 691523 Adoor , kerala</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Phone</h3>
						<p>+(91) 8943 312 403</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
<div class="footer">
		<div class="container">
			<h2><a href="index.html">On - Wheels</a></h2>
			<h3>(+91) 8943 312 403</h3>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value="Subscribe">
			</form>
			<div class="agileits_w3layouts_nav">
				<div class="agileits_w3layouts_nav_left">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="usedcars.php">used cars</a></li>
						<li><a href="newcars.php">new cars</a></li>
						<li><a href="mail.php">contact Us</a></li>
					</ul>
				</div>
				<div class="agileits_w3layouts_nav_right">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>© 2017 onwheels. All rights reserved | Design by <a>subin stancil</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
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
<!-- //here ends scrolling icon -->
</body>
</html>