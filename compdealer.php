
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Dealer Details</title>
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


<style type="text/css">
	.workspace{
		width: 60%;
		position: relative;
		left: 20%;
		
		margin-bottom: 10em;
	}
	.content{
		height: 5em;
		border-style: solid;
		border-color: rgba(60,60,60,.3);
		border-width: 1px;
		border-left-color: #fff;
		margin: 1em 0em;
	}
	.img{
		width: 30%;
		height: 100%;
		float: left;
	}
	.data{
		width: 70%;
		float: left;
		padding: 1.5em;

	}
	.content:hover{
		box-shadow: 1px 1px 10px;
		cursor: pointer;
	}
	.data a{color: #000 !important;}
</style>


</head>
	
<body>
<?php 
session_start();
$_SESSION['pagex']="newcars";
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
$id=$_GET['id'];
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
			<h3 class="w3_agile_head">Dealer Details</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
			</div></div>

			<style type="text/css">
				.n{
					margin-bottom: 1em;
					font-size: 1.2em;
					margin-left: 7em;
				}
				.n > label{
					width: 40%;
				
				}
				.n > label > span{
					float: right;
				}
				.n > span{
					margin-left: 3em;
				}
			</style>


			<div class="space" style="margin-bottom: 3em;"> 
                
                <?php
                   $q="select * from dealer_reg where d_id='$id'";
                   $r=  mysql_query($q);
                   while($ro=mysql_fetch_row($r))
                   {   $vr=$ro[0];
                ?>
                <div class="space2" style="width: 60%;position: relative;left: 20%;">
                    
      
                    <div class="n"><label>Dealer Name<span>:</span></label><span><?php echo $ro[1]; ?></span></div>
                    <div class="n"><label>Registration Number<span>:</span></label><span><?php echo $ro[2]; ?></span></div>
                    <div class="n"><label>Dealer Address<span>:</span></label><span><?php echo $ro[3]; ?></span></div>
                    <div class="n"><label>Contact No.<span>:</span></label><span><?php echo $ro[4]; ?></span></div>
                    <div class="n"><label>EMail-ID<span>:</span></label><span><?php echo $ro[6]; ?></span></div>
                    <div class="n"><label>Dealers In<span>:</span></label><span><?php echo $ro[9]; ?></span></div><br>
                    
                    <center> </center>
                    
                </div>
                   <?php } ?>
                
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