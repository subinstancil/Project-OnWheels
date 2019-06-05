
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | compare cars</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<link rel="stylesheet" type="text/css" href="css/main.css">
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
   th, td {
    height: 40px;
    }

    .box1,.box2,.box3,.box4,.box5,.box1_1,.box2_2,.box3_3,.box4_4,.box5_5{
      display: none;
    }
    th,td{
      color: #34495e !important;
    }
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
else if(isset($_SESSION['']))
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

<!--new cars -->






<div class="container" style="width: 100%; ">

  <div class="row" style="background-color: #424668;">
    <br><br><br>
    <div class="col-lg-2 col-lg-offset-3">
      
      <select onchange="fun(this.value)" id="make" name="make">
        <option>Select Make</option>
        <?php
      mysql_connect("localhost","root","");
      mysql_select_db("car_trade");
      $q="SELECT name FROM `manufacture`";
      $r=mysql_query($q);
      while ($row = mysql_fetch_row($r)) {
      echo "<option>$row[0]</option>"; 
      }
      
      ?>
      </select>
    </div>
    <div class="col-lg-2">
      <select onchange="fun2(this.value,make.value)" id="model" name="model">
        <option>Select Model</option>
        
      </select>
    </div>
    <div class="col-lg-2">
      <select id="version" name="version">
        <option>Select Version</option>
        
      </select>
    </div>
    <br><br><br>
    <div class="col-lg-2 col-lg-offset-5">
      <input class="buttn" type="submit" value="+ Compare" name="" onclick="compare(make.value,model.value,version.value)">
    <br><br>
   </div>
  </div>
  <br>
  <div class="row">
      <div class="col-lg-2" >
        <table class="table table-bordered table-hover" id="box0_0">
          
        </table>
      </div>


      <div class="col-lg-2" >
        <table class="table table-bordered table-hover box1_1" id="box1_1">
        </table>
      </div>
      <div class="col-lg-2" >
        <table class="table table-bordered table-hover box2_2" id="box2_2">
          
        </table>
      </div><div class="col-lg-2" >
        <table class="table table-bordered table-hover box3_3" id="box3_3">
          
        </table>
      </div><div class="col-lg-2" >
        <table class="table table-bordered table-hover box4_4" id="box4_4">
          
        </table>
      </div><div class="col-lg-2">
        <table class="table table-bordered table-hover box5_5" id="box5_5">
          
        </table>
      </div>
</div>
<div class="row">

    <div class="col-lg-2" >
        <table class="table table-bordered table-hover">
          
          <tr><th class=text-right>price</th></tr>
          <tr><th class=text-right>Body Type</th></tr>
<tr><th class=text-right>Engine cc</th></tr>
<tr><th class=text-right>Mileage</th></tr>
<tr><th class=text-right>Engine Name</th></tr>
<tr><th class=text-right>Power</th></tr>
<tr><th class=text-right>Length</th></tr>
<tr><th class=text-right>Width</th></tr>
<tr><th class=text-right>Height</th></tr>
<tr><th class=text-right>Ground Clearance</th></tr>
<tr><th class=text-right>Wheel Base</th></tr>
<tr><th class=text-right>Weight</th></tr>
<tr><th class=text-right>Boot Space</th></tr>
<tr><th class=text-right>Turning Radius</th></tr>
<tr><th class=text-right>Tyre Specs Front</th></tr>
<tr><th class=text-right>Tyre Specs Rear</th></tr>
<tr><th class=text-right>Fuel</th></tr>
<tr><th class=text-right>Gear Transmission</th></tr>
<tr><th class=text-right>No.of Gears</th></tr>
<tr><th class=text-right>Seating Capacity</th></tr>
<tr><th class=text-right>AC</th></tr>
<tr><th class=text-right>Climate Control</th></tr>
<tr><th class=text-right>Central Lock</th></tr>
<tr><th class=text-right>Player</th></tr>
<tr><th class=text-right>Power Steering</th></tr>
<tr><th class=text-right>Power Window</th></tr>
<tr><th class=text-right>Auto Steering Adjst</th></tr>
<tr><th class=text-right>Auto Adjust Seats</th></tr>
<tr><th class=text-right>Steering Controls</th></tr>
<tr><th class=text-right>Remote Boot</th></tr>
<tr><th class=text-right>Rear Wiper</th></tr>
<tr><th class=text-right>Leather Seats</th></tr>
<tr><th class=text-right>Electric Mirror</th></tr>
<tr><th class=text-right>A.B.S</th></tr>
<tr><th class=text-right>Air Bag</th></tr>
<tr><th class=text-right>Parking Sensor</th></tr>
<tr><th class=text-right>Traction</th></tr>
        </table>
      </div>

      <div class="col-lg-2">
        <table class="table table-bordered table-hover box1" id="box1">
        </table>
      </div>
      <div class="col-lg-2">
        <table class="table table-bordered table-hover box2" id="box2">
          
        </table>
      </div><div class="col-lg-2">
        <table class="table table-bordered table-hover box3" id="box3">
          
        </table>
      </div><div class="col-lg-2">
        <table class="table table-bordered table-hover box4" id="box4">
          
        </table>
      </div><div class="col-lg-2">
        <table class="table table-bordered table-hover box5" id="box5">
          
        </table>
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




<script type="text/javascript">
    $temp= 1;
    function fun($r)
    {
      $.ajax({
      type: 'post',
      url: 'script/cmpr_slct.php',
      data: {
      get_option:$r
      },
      success: function (response) {
      document.getElementById("model").innerHTML=response; 
      }
      });
    }
    function fun2($r,$t)
    {
      //alert($temp);
      $.ajax({
      type: 'post',
      url: 'script/cmpr_slct2.php',
      data: {
      get_option:$r,
      make:$t
      },
      success: function (response) {
      document.getElementById("version").innerHTML=response; 
      }
      });
    }

    function compare($make,$model,$version){
      if ($make!="Select Make" && $model!="Select Model" && $version!="Select Version") {
      if ($temp==1) {$x="box1";$y="box1_1";}
      if ($temp==2) {$x="box2";$y="box2_2";}
      if ($temp==3) {$x="box3";$y="box3_3";}
      if ($temp==4) {$x="box4";$y="box4_4";}
      if ($temp==5) {$x="box5";$y="box5_5";}
      if ($temp<6) {

      $.ajax({
      type: 'post',
      url: 'script/cmpr.php',
      data: {
      model:$model,
      make:$make,
      version:$version
      },
      success: function (response) {
      document.getElementById($x).innerHTML=response;
      document.getElementById($x).style.display='block'; 
      }
      });

      $.ajax({
      type: 'post',
      url: 'script/cmpr2.php',
      data: {
      model:$model,
      make:$make,
      version:$version
      },
      success: function (response) {
      document.getElementById($y).innerHTML=response;
      document.getElementById($y).style.display='block'; 
      document.getElementById('make').value="Select Make";
      document.getElementById('model').innerHTML="<option>Select Model</option>";
      document.getElementById('version').innerHTML="<option>Select Version</option>";
      }
      });
      $temp=$temp+1;
      }
      else{
        alert("sorry...only 5 cars can be comared at a time..")
      }
   }
    }
  </script>


</body>
</html>