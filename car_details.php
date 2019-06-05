
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | car details</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/car_details.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


<script>
               $(document).ready(function(){
                  $("#summary").click(function(){
                      $("#dsummary").show();
                      
                      $("#dspec").hide();
                      $("#dcolor").hide();
                      $("#summary").css("border-style","solid");
                      $("#spec").css("border-style","none");
                      $("#color").css("border-style","none");
                      
                    });
                    $("#spec").click(function(){
                      $("#dspec").show();
                      $("#dsummary").hide();
                      $("#dcolor").hide();
                      $("#spec").css("border-style","solid");
                      $("#summary").css("border-style","none");
                      $("#color").css("border-style","none");
                      
                    });
                      $("#color").click(function(){
                      $("#dcolor").show();
                      $("#dsummary").hide();
                      $("#dspec").hide();
                      $("#color").css("border-style","solid");
                      $("#summary").css("border-style","none");
                      $("#spec").css("border-style","none");
                      
                    });
                 });
                  
        </script>


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
$man=$_GET['man'];
$v=$_GET['veh'];
$vr=$_GET['vari'];
//echo "__".$man."__".$v."__",$vr;
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
	 <?php
                      $q="select * from veh_detail where v_name='$v' and manufature='$man'";
                      $vh=mysql_query($q);
                      while($veh=mysql_fetch_row($vh)){
                          //echo $veh[0];
                          $l="select * from veh_variant where v_id='$veh[0]'and variant='$vr'";
                          $k=mysql_query($l);
                          while($vri=mysql_fetch_row($k)){
                              //echo $vri[0].$veh[0];
                    
                              
                              ?>

	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head"><?php echo $veh[2]." ".$veh[1]." ".$vri[2]; ?></h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>

	</div>
</div>










<div class="workspace">
                <div class="contents">
                   
                    <script type="text/javascript">
           var slideimages = new Array(); // create new array to preload images
           
           slideimages[0] = "url(<?php echo $veh[21];?>)"; // set image src property to image path, preloading image in the process
         
           slideimages[1] = "url(<?php  echo $veh[22];?>)";
           
           slideimages[2] = "url(<?php echo $veh[23];?>)";
           
           slideimages[3] = "url(<?php echo $veh[24];?>)";
        </script>
                    <br><br>
                    <div class="cardata">
                        
                        <div class="imcar" id="slide" style="background-color: #ccffff">
         <script type="text/javascript">
           var slideimages = new Array(); // create new array to preload images
           
           slideimages[0] = "url(<?php echo $veh[21];?>)"; // set image src property to image path, preloading image in the process
         
           slideimages[1] = "url(<?php  echo $veh[22];?>)";
           
           slideimages[2] = "url(<?php echo $veh[23];?>)";
           
           slideimages[3] = "url(<?php echo $veh[24];?>)";
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
                        <div class="cdet">
                            <!-- <h2 style="color: #000099;"><?php echo $veh[2]." ".$veh[1]." ".$vri[2]; ?></h2> -->
                            <br><h2>Vehicle Type &nbsp;: <?php echo $veh[3];?> </h2>
                            <br><h2>Fuel Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $vri[4]; ?> </h2>
                            <br><h2>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	: <span class="fa fa-inr"></span> <span style="font-size: 1.2em !important;"><?php echo $vri[3]; ?></span></h2>
                            
                        </div>
                        
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                    <div class="chead">
                        <div class="menu" id="summary" style="border-style:solid;">
                            <br> <center><label>SUMMARY</label></center><br>
                        </div>
                        <div class="menu" id="spec" style="border-style: none;">
                            <br><center><label>FULL SPECIFICATION</label></center><br>
                        </div>
                        <div class="menu" id="color" style="border-style: none;">
                            <br><center> <label>COLOURS</label></center><br>
                        </div>
                    </div>
                    <br><br><br><br>
                    
                 <div class="dsummary" id="dsummary"><br><br>
                     <div class="data">
                         <div class="var1"><h3>Vehicle Type<span>:</span></h3></div>  
                         <div class="value"> <?php echo $veh[3];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Fuel<span>:</span></h3></div>  
                         <div class="value"> <?php echo $vri[4];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Length<span>:</span></h3></div>  
                         <div class="value"> <?php echo $veh[11];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Width<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[12];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Height<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[13];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Displacement<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[6];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Mileage<span>:</span></h3></div>  
                         <div class="value">  <?php echo $vri[25];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Seating Capacity<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[8];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Fuel Type<span>:</span></h3></div>  
                         <div class="value">  <?php echo $vri[4]; ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>MAX POWER<span>:</span></h3></div>  
                         <div class="value"> <?php echo $veh[10];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Transmission Type<span>:</span></h3></div>  
                         <div class="value"> <?php echo $vri[6];?> </div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Air Conditioner<span>:</span></h3></div>  
                         <div class="value"> 
                             <?php if($vri[7]!=""){ ?>
                      				<span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?>
                       
                        </div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Power Window<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[12]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Central Locking<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[9]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Anti-Lock Braking System<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[21]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Air Bags<span>:</span></h3></div>  
                         <div class="value">   <?php if($vri[22]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                 </div>




                 <div class="dspec" id="dspec" style="background-color: white;">
                     <br><br>
                     <div class="data">
                         <div class="var1"><h3>Mileage<span>:</span></h3></div>  
                         <div class="value">  <?php echo $vri[25];?></div>
                     </div>
                     
                     <div class="data">
                         <div class="var1"><h3>Length<span>:</span></h3></div>  
                         <div class="value"> <?php echo $veh[11];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Width<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[12];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Height<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[13];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Wheel Base<span>:</span></h3></div>  
                         <div class="value"> <?php echo $veh[15];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Ground Clearance<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[14];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Weight<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[16];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Boot Space<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[17];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Turning Radius <span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[18];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Tyre Front<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[19];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Tyre Back<span>:</span></h3></div>  
                         <div class="value">  <?php echo $veh[20];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Transmission<span>:</span></h3></div>  
                         <div class="value">  <?php echo $vri[5];?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>No. of Gears<span>:</span></h3></div>  
                         <div class="value">  <?php
                      
                         if($vri[5]=="manual")
                         { ?>
                        <h3><?php echo $vri[6];?>
                      <?php }
                      else{?> Not Applicable
                         
                      <?php } ?></div>
                     </div>
                     
                     <div class="data">
                         <div class="var1"><h3>Air Conditioner<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[7]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Climate Control<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[8]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Central Lock<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[9]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Audio Player<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[10]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Power Steering<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[11]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Power Window<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[12]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Automatic Steering Adjustment<span>:</span></h3></div>  
                         <div class="value"> <?php if($vri[13]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Electric Seat<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[14]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Steering Control<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[15]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Rear AC Vent<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[16]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Remote Boot<span>:</span></h3></div>  
                         <div class="value"> <?php if($vri[17]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Rear Wiper<span>:</span></h3></div>  
                         <div class="value"> <?php if($vri[18]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Leather Seats<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[19]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Electric Mirror<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[20]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Anti-Lock Braking System<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[21]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Air Bag<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[22]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Parking Sensor<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[23]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                     <div class="data">
                         <div class="var1"><h3>Traction<span>:</span></h3></div>  
                         <div class="value">  <?php if($vri[24]!=""){ ?>
                      <span class="fa fa-check"></span>
                       			<?php }
                        		 else { ?>
                      				<span class="fa fa-times"></span>
                     		 	<?php } ?></div>
                     </div>
                 </div>
                   <?php
                           }
                          
                          }                    
                    ?>
                    <br><br><br>
                 <div class="dcolor" id="dcolor">
                     
                     <?php
                         $w="select * from color_selector where man='$man' and veh='$v'";
                          $e=mysql_query($w);
                          while($cl=mysql_fetch_row($e))
                          {    
                      ?>
                     <div class="col">
                         <div class="cl" style="background-color: <?php echo $cl[3];?>">
                          
                          </div>
                         <div class="cldata">
                            <center> <label><br> <?php echo $cl[4];?></label></center>
                         </div>
                     </div>

                     


                              
                          <?php }  ?>
                         
                 </div>
            </div>
        </div>













<br><br><br><br>


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