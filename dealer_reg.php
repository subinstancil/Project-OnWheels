
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | dealer reg</title>
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
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">On-Wheels</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li ><a href="home.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">new cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="newcars.php">Find New Cars</a></li>
									
									<li><a href="viewreview.php">View Review</a></li>
								</ul>
							</li>
							<li class="dropdown" >
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">used cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li ><a href="pre_reg.php">Sell Used Cars</a></li>
									<li><a href="usedcars.php">Search Cars</a></li>
								</ul>
							</li>
							
							<li class="active"><a href="dealer_reg.php">dealer registration</a></li>
							<li ><a href="mail.php">Contact Us</a></li>
						</ul>
						<div class="w3_agile_login">
							<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><i class="fa fa-user" aria-hidden="true"></i></a>
						</div>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
	
<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Sign In</h3>		
		<div class="agileits_modal_body">
			<form name="login" action="c_log.php" method="post" enctype="multipart/form-data">
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="email" id="email" placeholder="Email" required="" >
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="pass" id="pass" placeholder="Password" required="">
				</div>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="Sign In">
			</form>
			<h5>Don't have an account? <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></h5>
		</div>
	</div>
	<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
		<h3>Sign Up</h3>		
		<div class="agileits_modal_body">
			<form method="post" action="reguser.php" onsubmit="return validate()" enctype="multipart/form-data">
				<h4>Profile information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="user" placeholder="Name" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="address" placeholder="Address" required="">
				</div>
				<div class="agileinfo_subscribe">
					<div >

						<input type="radio" value="male" name="gndr"><i> </i>Male <i>&nbsp;&nbsp;&nbsp;&nbsp;</i>
						<input type="radio" value="female" name="gndr"><i> </i>Female<i>&nbsp;&nbsp;&nbsp;&nbsp;</i>
						<input type="radio" nvalue="others" name="gndr"><i> </i>Others<i> </i>
					</div>
				</div>

				<div class="agileits_w3layouts_user">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<input type="text" name="mob" placeholder="Phone No" required="">
				</div><br>

				<div class="agileits_w3layouts_user">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<input type="date" name="dob" placeholder="Date of Birth" required="">
				</div><br>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-question" aria-hidden="true"></i>
					<input type="text" name="secque" placeholder="Security Question" required="">
				</div><br>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-pencil" aria-hidden="true"></i>
					<input type="text" name="answer" placeholder="Answer" required="">
				</div>

				<br>
				<h4>Login information :</h4>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" id="email" placeholder="Email" required="">
				</div>
				<div class="agileits_w3layouts_user agileits_w3layouts_user_agileits">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="pass" id="pass" placeholder="Password" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<i class="fa fa-key" aria-hidden="true"></i>
					<input type="password" name="cpass" onkeyup="val()" id="cpass" placeholder="Confirm Password" required="">
				</div>
				<div class="agileinfo_subscribe">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>i accept the terms and conditions</label>
					</div>
				</div>
				<input type="submit" value="Register">
			</form>
			<h5>Already a member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></h5>
		</div>
	</div>
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
			<h3 class="w3_agile_head">Dealer Registration Form</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
	</div>






<div class="space">
                <div class="space1">
                    
                </div>
                <div class="space2">
                    <br><br>
                    
                    <form name="dealer_reg" action="dealer.php" method="post" onsubmit="return validate()" enctype="multipart/form-data">
                    <div class="n"><label>Dealer Name</label><input type="text" name="d_name"required><label class="val" id="dname"></label></div>
                    <div class="n"><label>Registration Number</label><input type="text" name="d_reg"required><label class="val" id="dreg"></label></div>
                    <div class="n"><label>Dealer Address</label><input type="text" name="address"required><label class="val" id="dadd"></label></div>
                    <div class="n"><label>Contact No.</label><input type="text" name="phone"required><label class="val" id="dph"></label></div>
                    <div class="n"><label>EMail-ID</label><input type="email" name="email" id="email" required><label class="val" id="demail"></label></div>
                    <div class="n"><label>Password</label><input type="password" name="pass" id="pass" required><label class="val" id="dpass"></label></div>
                    <div class="n"><label>Confirm password</label><input type="password" name="cpass" id="cpass" onkeyup="val()" required><label class="val" id="dcpass"></label></div>
                    <div class="n"><label>Manufacturer</label><input type="text" name="man" id="man" required><label class="val" id="dcpass"></label></div>
                    <div class="n"><label>Dealer Emblem</label><input type="file" name="emb"></div>
                    <BR><BR><center> <input class="sub" type="submit" value="REGISTER"></center>
                    </form>
                    <br><br>
                    <script type="text/javascript">
       function validate()
        {   
        	alert("dfsdf");
        	var em=document.getElementById('email').value;
            var p=document.dealer_reg.pass.value;
            
            if(p.length<7)
            {
                alert("The password Length must be greater than 7 letters");
                return false;
            }
            <?php 
              mysql_connect("localhost","root","");
              mysql_select_db(car_trade);
              $q="select email from dealer_reg where status='wait' or status='Accept'";
              $r=  mysql_query($q);
              while($ro=  mysql_fetch_row($r)){
                    
                  ?>
                      if(em==="<?php echo $ro[0]; ?>")
                      {
                          alert("Email ID already Found....Please Give a different ID");
                          return false;
                      }
                      <?php
              }
            
            ?>
        }
        function val(){
        	alert("adfs");
            var password1=document.getElementById('pass').value;
            var password2=document.getElementById('cpass').value;
            var em=document.getElementById('email').value;
            
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