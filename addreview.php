
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Add Review</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/review.css" rel="stylesheet" type="text/css" media="all" />
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
$man=$_GET['m'];
$vh=$_GET['vh'];
$mod=$_GET['var'];
$e=$_SESSION['user'];
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
			<h3 class="w3_agile_head">Write Your Car Review</h3>
			<p class="augue_agile">Share your car ownership experience by writing a review and by rating it to help others in taking the right decision.Please be descriptive and specific with your feedback on the car and how it stood to meet your expectations.</p>
			</div></div>















<form name="review" method="post" action="streview.php" enctype="multipart/form-data">

<div class="main">
                <div class="maincon">
                    
                       <input type="hidden" name="man" value="<?php echo $man;?>"/>
                       <input type="hidden" name="vh" value="<?php echo $vh;?>"/>
                       <input type="hidden" name="mod" value="<?php echo $mod;?>"/>
                       <input type="hidden" name="email" value="<?php echo $e;?>" />
                      <br>  
                  <div class="row">  <label>How Old is Your Car?(in years)<span>:</span></label>
                    <input type="text" name="old" id="old"/ required=""></div>
                    
                   <div class="row"> <label>Rate Your Car<span>:</span></label>
                    <select  name="rcar" id="rcar">
                        <option>Excellent</option>
                        <option>Very Good</option>
                        <option>Good</option>
                        <option>Bad</option>
                        <option>Very Bad</option>
                    </select></div>
                    
                   <div class="row"> <label>Title<span>:</span></label>
                    <input type="text" name="title" id="title" required=""></div>
                    
                   <div class="row"> <label>What is Good?<span>:</span></label>
                    <textarea name="good" cols="90%" rows="2%" id="good" required=""></textarea></div>
                    
                   <div class="row"> <label>What needs to improve?<span>:</span></label>
                    <textarea name="improve" cols="90%" rows="2%" id="improve" required=""></textarea></div>
                    
                   <div class="row"> <label>Rate Mileage<span>:</span></label>
                    <select name="rmil" id="rmil">
                        <option>Excellent</option>
                        <option>Very Good</option>
                        <option>Good</option>
                        <option>Bad</option>
                        <option>Very Bad</option>
                    </select></div>

                    
                    <div class="row"><label>Mileage City(km/l)<span>:</span></label><input type="text" name="mcity" id="mcity" required="" /></div>
                    
                    <div class="row"><label>Mileage Highway(km/l)<span>:</span></label><input type="text" name="mhigh" id="mhigh" required="" /></div>
                    
                    <div class="row"><label>Maintenance Cost (Monthly)<span>:</span></label><input type="number" name="mcost" id="mcost" required="" /></div>
                    
                   <div class="row"> <label> Rate Exteriors<span>:</span></label>
                    <select  name="rext" id="rext">
                        <option>Excellent</option>
                        <option>Very Good</option>
                        <option>Good</option>
                        <option>Bad</option>
                        <option>Very Bad</option>
                    </select>
                     <textarea name="rextcon" cols="90%" rows="2%" id="rextcon"></textarea></div>
                    
                   <div class="row"> <label> Rate Interiors<span>:</span></label>
                    <select  name="rint" id="rint">
                        <option>Excellent</option>
                        <option>Very Good</option>
                        <option>Good</option>
                        <option>Bad</option>
                        <option>Very Bad</option>
                    </select>
                    
                     <textarea name="rintcon" cols="90%" rows="2%" id="rintcon"></textarea></div>
                    
                    
                   <div class="row"> <label> Rate Ride Quality<span>:</span></label>
                    <select  name="rride" id="rride">
                        <option>Excellent</option>
                        <option>Very Good</option>
                        <option>Good</option>
                        <option>Bad</option>
                        <option>Very Bad</option>
                    </select>
                     <textarea name="rridecon" cols="90%" rows="2%" id="rridecon"></textarea></div>
                     
                    <div class="row"> <label> Other Comments<span>:</span></label>
                     <textarea name="comments" cols="90%" rows="2%" id="comments"></textarea></div>
                     
                    <div class="row"> <label >Submit a Picture of your Car<span>:</span></label>
                     
                     <input type="file" name="imcar" id="imcar" required="" /></div>
                     <br>
                     <center> <input type="submit" value="Submit Your Review"></center>
                    
                </div>
            </div>
</form>
<br><br><br><br><br>

















		











			
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