
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Sell Car</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/cust_style1.css" type="text/css" media="all" />
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
else if(isset($_SESSION['']))
{
   include "preown_banner.php";
}
else{
	include "banner.php";
}
 ?>


<!-- //pop-up-box -->
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
			<h3 class="w3_agile_head">Registration Form</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
	</div>






<div class="space">
                <div class="space1">
                    
                </div>
                <div class="space2">
                    <form name="reg_preown" action="reg_preown.php" method="post" enctype="multipart/form-data" onsubmit="return validate()" >
                        <br><br>
                    <div class="n"><label>Name</label><input class="input" type="text" name="name" required></div>
                    <div class="n"><label>Email ID</label><input class="input" type="email" name="email" required id="email"></div>
                    <div class="n"><label>Password</label><input class="input" type="password" name="pass" id="pass"></div>
                    <div class="n"><label>Confirm Password</label><input class="input" type="password" name="cpass" id="cpass" onkeyup="val()"></div>
                    <div class="n"><label>Mobile Number</label><input class="input" type="text" name="mob" required></div>
                    <div class="n"><label>Address</label><input class="input" type="text" name="address" required ></div>
                    <div class="n"><label>Vehicle Type </label><input class="input" type="text" name="vtype" required></div>
                    <div class="n"><label>Vehicle Name</label><input class="input" type="text" name="v_name" required></div>
                    <div class="n"><label>Vehicle Variant</label><input class="input" type="text" name="variant" required></div>
                    <div class="n"><label>Vehicle Manufacturer</label><input class="input" type="text" name="v_make" required></div>
                    
                    <div class="n"><label>Fuel Type</label><input class="input" type="text" name="fuel" required></div>
                    <div class="n"><label>Mileage</label><input class="input" type="text" name="mileage" required></div>
                    
                    <div class="n"><label>Registration Number</label><input class="input" type="text" name="reg_no" required></div>
                    <div class="n"><label>Year of Registration</label><input class="input" type="text" name="year_reg" required> </div>
                    <div class="n"><label>KMs Run</label><input class="input" type="text" name="km" required></div>
                    <div class="n"><label>Colour</label><input class="input" type="text" name="color" required></div>
                    <div class="n"><label>Expected Price</label><input class="input" type="text" name="price" required></div>
                    <div class="n"><label>Security Question</label><input class="input" type="text" name="secquest" required></div>
                    <div class="n"><label>Answer</label><input class="input" type="text" name="ans" required></div>
                    <div class="n"><label>Images of Car</label><input class="input" type="file" name="img1" required></div><br>
                    <div class="n"><label></label><input class="input" type="file" name="img2" required></div><br>
                    <div class="n"><label></label><input class="input" type="file" name="img3" required></div><br>
                    <div class="n"><label></label><input class="input" type="file" name="img4" required></div>
                    <div class="n"></div><br><br>
                    <div class="n"><label>Image of RC Book</label><input class="input" type="file" name="imgrc" required></div>
                    <br><br>
                    <center><input class="but" type="submit" value="REGISTER"/></center>
                </form>
                <br><br>
                
                 <script type="text/javascript">
       function validate()
        {
            var p=document.getElementById("pass").value;
            
            if(p.length<7)
            {
                alert("The password Length must be greater than 7 letters");
                return false;
            }
            var em=document.getElementById('email').value;
            <?php 
              mysql_connect("localhost","root","");
              mysql_select_db('car_trade');
              $q="select email from preown_reg";
              $r=  mysql_query($q);
              while($ro=  mysql_fetch_row($r)){
                    
                  ?>
                      if(em===<?php echo $ro[0]; ?>)
                      {
                          alert("Email ID already Found....Please Give a different ID");
                          return false;
                      }
                      <?php
              }
            
            ?>
            
        }
        function val(){
            var password1=document.getElementById('pass').value;
            var password2=document.getElementById('cpass').value;
            
            var msg=document.getElementById('message');
            //alert(password1);
           // alert(password2);
            if(password1!=password2)
                {   
                      document.getElementById('cpass').style.background="red";
                msg.innerHTML="password doesn't match";
                msg.style.color="red";
                return false;
            }
            else{
               document.getElementById('cpass').style.background="#1acb14";
                msg.innerHTML="";
                msg.style.color="";  
            
            }
        }
    </script>
                
                
                </div>
                
                <div class="space3">
                    
                </div>
 </div>




<br><br>





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