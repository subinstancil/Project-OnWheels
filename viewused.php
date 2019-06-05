
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Used Cars</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/used_style.css" rel="stylesheet" type="text/css" media="all" />
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
$_SESSION['pagex']="usedcars";
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
 $q="select * from preown_reg where pr_id='$id'  ";
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
                       while($p=mysql_fetch_row($r))
                       {
                    ?>

	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head"><?php echo $p[9]." ".$p[7]." ".$p[8];?></h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
	</div></div>
			





		<div class="workspace">
                
                <div class="content">
                   
                   
                    <div class="ucardata">
                        <div class="imcar" id="slide">
                             <script type="text/javascript">
        
           var slideimages = new Array(); // create new array to preload images
           
           slideimages[0] = "url('<?php echo $p[17];?>')"; // set image src property to image path, preloading image in the process
         
           slideimages[1] = "url('<?php echo $p[18];?>')";
           
           slideimages[2] = "url('<?php echo $p[19];?>')";
           
           slideimages[3] = "url('<?php echo $p[20];?>')";
           
        </script>
        <script type="text/javascript">

                //variable that will increment through the images
                var step=0;
 
                function slideit(){
                //if browser does not support the image object, exit.
                if (!document.images)
                return;
                document.getElementById('slide').style.background = slideimages[step]+"center/100% 100% no-repeat ";
                if (step<4)
                step++;
                else
                step=0;
                //call function "slideit()" every 2.5 seconds
               setTimeout("slideit()",3500);
              }

                slideit();

          </script> 
                        </div>
                        <div class="udata">
                            
                            <br><br>
                            <h2>Price : <i class="fa fa-inr"></i><?php echo " ".$p[14]; ?></h2>
                        </div>
                        
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                    <div class="data">
                        <div class="var1"><br><h3>Vehicle Type<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[6]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Registration No.<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[10]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Year of Registration<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[11]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>KMs Run<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[12]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Mileage<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[22]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Fuel Type<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[23]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Vehicle Colour<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[13]; ?></h3></div>
                    </div>
                    
                    <div class="data"></div>
                    
                    <h3 class="w3_agile_head">Seller Details</h3>
			<p class="augue_agile"></p>



                    <div class="data"></div>
                    <div class="data">
                        <div class="var1"><br><h3>Seller Name<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[1]; ?></h3></div>
                    </div>
                    
                    <div class="data">
                        <div class="var1"><br><h3>Contact No<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[4]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Email ID<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[3]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>Contact Address<span>:</span></h3></div>  
                        <div class="value"><br><h3><?php echo " ".$p[5]; ?></h3></div>
                    </div>
                    <div class="data">
                        <div class="var1"><br><h3>RC Book Copy<span>:</span></h3></div>  
                        <div class="value"><br><a target="blank" href="viewrc.php?im=<?php echo $id ?>"><button style="width:100%; height: 70%;">View</button></a></div>
                    </div>
                    <div class="data"></div>
                       <?php } ?>
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