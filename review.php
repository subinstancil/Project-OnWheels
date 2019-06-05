
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Review</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/review_style.css" rel="stylesheet" type="text/css" media="all" />
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

if(isset($_SESSION['user']))
{
    $_SESSION['pagex']="randf";
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
  $_SESSION['pagex']="newcars";
	include "banner.php";

}
 ?>


<?php

      $rv=$_GET['rv'];
      mysql_connect("localhost","root","");
      mysql_select_db('car_trade');
      $q="select * from review where rid='$rv'";
      $r=mysql_query($q);
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
	
					<?php 
                       while($ro=mysql_fetch_row($r))
                       { 
                    ?>


	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head"><?php echo $ro[7];?></h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
		</div>
	</div>







	<div class="workspace">
        
                <div class="content">
                    
                 <div class='main'>
                    
                        
                    <div class="img">
                        <img src='<?php echo $ro[21];?>' "><br>
                        
                    </div>
                    


                    <div class='ratings'>



                    
                            <h3 style='float:left;'>Overall Rating<span>:</span></h3>
                        <?php
                          $c=$ro[6];
                           if($c=="Excellent"){
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php
                           }
                           elseif ($c=="Very Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><?php
                           } elseif ($c=="Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Very Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                        ?>

                        <br>

                        <br>
                        <h3 style='float:left;'>Exterior<span>:</span></h3>
                        <?php
                          $c=$ro[14];
                           if($c=="Excellent"){
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php
                           }
                           elseif ($c=="Very Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><?php
                           } elseif ($c=="Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Very Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                        ?><br><br>
                        <h3 style="float:left;">Interior<span>:</span></h3>
                        <?php
                        $c=$ro[16];
                           if($c=="Excellent"){
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php
                           }
                           elseif ($c=="Very Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><?php
                           } elseif ($c=="Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Very Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           ?>
                               <br><br>
                        <h3 style='float:left;'>Ride Quality<span>:</span></h3>
                        <?php 
                        $c=$ro[18];
                           if($c=="Excellent"){
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php
                           }
                           elseif ($c=="Very Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><?php
                           } elseif ($c=="Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Very Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                        ?><br><br>
                        <h3 style='float:left;'>Mileage<span>:</span></h3>
                        <?php 
                        $c=$ro[10];
                           if($c=="Excellent"){
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php
                           }
                           elseif ($c=="Very Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><?php
                           } elseif ($c=="Good") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }
                           elseif ($c=="Very Bad") {
                               ?><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><?php
                           }?><br><br><br><br><br><br>
                        
                    </div>
                    </div>
                    
                    <div class='details'>
                       <h3 class="w3_agile_head">Details Of Review</h3>
                        <p class="augue_agile">Detailed review <?php echo $ro[7];?></p>
                        <br><br><br>




                        <div class="top">
                        	<h3>Maintenance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;<i class="fa fa-inr"></i> <?php echo " ".$ro[13];?>/month</h3>
                        </div>
                        
                        <div class="top">
                        <h3 >Mileage in City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $ro[11];?> kmpl</h3>
                        </div>
                        
                        <div class="top">
                        <h3 >Mileage in Highway &nbsp;: &nbsp;<?php echo $ro[12];?> km/l</h3>
                        </div>

                        <div class="bottom">
                        <br><br><br><br>
                        <h3>What's Good?</h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[8];?></p>
                        <br><br><br>
                        <h3>What can Improve?</h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[9];?></p>
                        <br><br><br>
                        <h3>Exteriors : </h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[15];?></p>
                        <br><br><br>
                        <h3>Interiors : </h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[17];?></p>
                        <br><br><br>
                        <h3>Ride Quality : </h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[19];?></p>
                        <br><br><br>
                        <h3>Other Comments : </h3><br>
                        <p style='padding-left:20%;'><?php echo $ro[20];?></p>
                        </div>
                    </div>
                       <?php }?>
                </div>
            </div>
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