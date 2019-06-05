
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Feedback</title>
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
$_SESSION['pagex']="randf";
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

<?php

if(isset($_SESSION['user']))
{
   $user=$_SESSION['user']; 
}
else if(isset($_SESSION['preown']))
{
   $user=$_SESSION['preown']; 
}
 else {
           $user="";    
}
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
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
			<h3 class="w3_agile_head">Feedback Form</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
			</div></div>


			



			<style type="text/css">
				.feedback{
					width: 40%;
					position: relative;
					left: 30%;
					
				}
				.n > label{
					width: 40%;
					height: 2em;
					margin-bottom: 1em;
					
				}
				.n > .input{
					height: 2em;
					width: 60%;
				}
				.n > textarea{
					width: 100%;
					height: 10em;
				}
				.but{
					width: 40%;
					height: 3em; 
					background-color: #2c3e50;
					color: #fff;
				}
				.but:hover{
					background-color: #3498db;
					color: #fff;
				}
			</style>






			<div class="workspace" style="margin-bottom: 10em;">
                <div class="feedback">
                    <form name="feedback" action="savefeed.php" method="post" enctype="multipart/form-data">
                    
                    
                    <div class="n"> 
                        <label>Email</label><input class="input" type="email" name="email"  value="<?php echo $user;?> " required>                                    
                    </div>
                    <div class="n"> 
                          <label>Subject</label><input class="input" type="text" name="sub" required>                                    
                    </div>
                    
                    <div class="n" > 
                        <label>Feedback</label><textarea name="feedback" rows="20" cols="55" required> </textarea>                                   
                    </div>
                    <br>
                    <center><input type="submit" value="SUBMIT" class="but"></center>
                    </form>
                </div>
            </div>


















			
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