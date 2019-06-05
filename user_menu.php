<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("location:home.php");
}
$user=$_SESSION['user'];
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Home</title>
 <link rel="shortcut icon" href="Image_Pro/prjct_logo.png"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/user_style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/cust_style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Varela+Round&subset=hebrew" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<!-- banner -->
	<div class="banner">
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
							<li class="active"><a href="home.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">new cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="newcars.php">Find New Cars</a></li>
									<li><a href="cmpr1.php">Compare Cars</a></li>
									<li><a href="viewreview.php">View Review</a></li>
									<li><a href="sel_dealer.php">View Dealers</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">used cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="pre_reg.php">Sell Used Cars</a></li>
									<li><a href="usedcars.php">Search Cars</a></li>
								</ul>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Review & feedback <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="review_sel_car.php">Add Review</a></li>
									<li><a href="add_feedback.php">Add Feedback</a></li>
									<li><a href="viewreview.php">View Review</a></li>
								</ul>
							</li>
							<li><a href="mail.php">Contact Us</a></li>
						</ul>
						<div class="w3_agile_login">
							<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp; <?php
                      $q="select name from user_reg where email='$user'";
                      $r= mysql_query($q);
                      while($r0=mysql_fetch_row($r))
                      {
                      
                               echo $r0[0];
                      ?>
                              </label></h2></center>
                      <?php } ?> </i></a>
						</div>
					</nav>
				</div>
			</nav>
			<div class="agileits_w3layouts_banner_info">
				<h2>on - wheels</h2>
				<p>online car portal</p>
				
			</div>
			<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
<!-- //banner -->	



<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop log">
		<input type="button" value="Logout" name="log" id="log" onclick="window.location.href='logout.php'"> 
		<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><input type="button" value="Change Password" name="chg" id="chg">
		</a>
	</div>

<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
<?php
$pre=$_SESSION['user'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
?>

		<h3>Change Password</h3>		
		<div class="agileits_modal_body">
			<form name="pre_chgpass" action="user_uppass.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
				<div class="agileits_w3layouts_user">
					<input type="text" id="email" name="email" value="<?php echo $pre;?> " required="" >
				</div>
				<div class="agileits_w3layouts_user">
					<input type="password" name="pass" id="pass" placeholder="Enter New Password" required="">
				</div>
				<div class="agileits_w3layouts_user">
					<input type="password" name="cpass" onkeyup="val()" id="cpass" placeholder="Confirm Password" required="">
				</div>
				<div class="agile_remember">
					
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="CHANGE">
			</form>
			<script type="text/javascript">
       function validate()
        {
            var p=document.pre_chgpass.pass.value;
            
            if(p.length<7)
            {
                alert("The password Length must be greater than 7 letters");
                return false;
            }
        }
        function val(){
            var password1=document.getElementById('pass').value;
            var password2=document.getElementById('cpass').value;
            
            var msg=document.getElementById('message');
            //alert(password1);
           // alert(password2);
            if(password1!=password2)
                {   
                      document.getElementById('cpass').style.background="#f9b6b6";
                msg.innerHTML="password doesn't match";
                msg.style.color="red";
                return false;
            }
            else{
               document.getElementById('cpass').style.background="#b6f9c5";
                msg.innerHTML="";
                msg.style.color="";  
                
            
            }
        }
        </script>
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

<!-- about -->
	<div class="about" id="about">
		<div class="col-md-6 agileinfo_about_left">	
			<img src="images/6.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileinfo_about_right">
			<h4>Integer sit amet nunc</h4>
			<h3>Who we are</h3>
			<p>Mauris convallis sagittis tortor. Curabitur iaculis imperdiet scelerisque. 
				Donec sit amet fringilla metus, eu aliquet elit. In nec elit gravida, interdum 
				quam quis, pellentesque nunc. Vivamus eget augue bibendum, molestie lacus in, 
				venenatis felis. Donec elementum metus non mi ullamcorper, at tempor ex feugiat.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //about -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="w3_agile_head">Testimonials</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="images/2.png" alt=" " class="img-responsive" />
									<h4>Allen parker <span>Senior Designer</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="images/6.png" alt=" " class="img-responsive" />
									<h4>Rosy James <span>Senior Designer</span></h4>
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<p><i class="fa fa-quote-right" aria-hidden="true"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<img src="images/5.png" alt=" " class="img-responsive" />
									<h4>Crisp Ally <span>Senior Designer</span></h4>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //testimonials -->
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


	<script type="text/javascript">
       function validate()
        {
            var p=document.user_reg.pass.value;
            
            if(p.length<7)
            {
                alert("The password Length must be greater than 7 letters");
                return false;
            }
            var em=document.getElementById('email').value;
            <?php 
              mysql_connect("localhost","root","");
              mysql_select_db(car_trade);
              $q="select email from user_reg";
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
<!-- //here ends scrolling icon -->
</body>
</html>