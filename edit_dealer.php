
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | New Cars</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/cust_style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/user_style.css" rel="stylesheet" type="text/css" media="all" />
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
  .val{
                    margin-left: 25px;
                    display:none;
                    color:red;
                    
                }


                .space > .space2{
      width: 60%;
      position: relative;
      left: 20%;
       margin-bottom: 4%;
      
    }
    .space > .space2 > form > .n{
      height: 3em;
      
    }
    .space > .space2 > form > .n > label{
      
      width: 40%;
      float: left;
    }
    .space > .space2 > form > .n > input{
      height: 2em;
      width: 50%;
      border-color: #34495e;
      border-style: solid;
      border-width: 1px;
      padding-left: 2em;
    }
    .space > .space2 > form > center > .but{
      border: none;
      width: 30%;
      height: 3em;
      background-color: #34495e;
      color: #fff;
      margin-top: 1em;
    }
    .space > .space2 > form > center > .but:hover{
      color: #fff;
      background-color: #3498db;
    }
</style>

</head>
	
<body>
<?php 
session_start();
$_SESSION['pagex']="edtdlr";
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

<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head">Update Dealer Details</h3>
			<p class="augue_agile">Update Dealer information</p>
		</div>
</div>


          

<?php
$dealer=$_SESSION['manufacture'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="select * from dealer_reg where email='$dealer'";
$r=  mysql_query($q);
?>





  <div class="space">
                <div class="space1">
                    
                </div>
                <div class="space2">
                    <?php
                      while($ro=  mysql_fetch_row($r))
                      {
                    ?>
                    
                    <form name="dealer_reg" action="updealer.php" method="post" enctype="multipart/form-data">
                    <div class="n"><label>Dealer Name</label><input type="text" name="d_name" required value="<?php echo $ro[1];?>"></div>
                    <div class="n"><label>Registration Number</label><input type="text" name="d_reg" required value="<?php echo $ro[2];?>"></div>
                    <div class="n"><label>Dealer Address</label><input type="text" name="address" required value="<?php echo $ro[3];?>"><label class="val" id="dadd">Please Enter Data</label></div>
                    <div class="n"><label>Contact No.</label><input type="text" name="phone" required value="<?php echo $ro[4];?>"><label class="val" id="dph">Please Enter Data</label></div>
                   <input type="hidden" name="email" id="email" value="<?php echo $dealer;?>"><label class="val" id="demail">Please Enter Data</label>
                    
                    <div class="n"><label>Manufacturer</label><input type="text" name="man" id="man" required value="<?php echo $ro[9];?>"><label class="val" >Passwords donot Match</label></div>
               <center> <input class="but" type="submit" value="UPDATE"></center>
                    </form>
                      <?php } ?>
                </div>
                
                <div class="space3">
                    
                </div>
            </div>










<!--//new cars -->
	

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
       function validate()
        {
            var p=document.dealer_reg.pass.value;
            
            if(p.length<7)
            {
                alert("The password Length must be greater than 7 letters");
                return false;
            }
            var em=document.getElementById('email').value;
            <?php 
              mysql_connect("localhost","root"."");
              mysql_select_db('car_trade');
              $q="select email from dealer_reg where status='wait' or staus='Accept'";
              $r=  mysql_query($q);
              while($ro=  mysql_fetch_row($r)){
                    
                  ?>
                      if(em===<?php echo $ro[0]; ?>)
                      {
                          alert("Email ID already Found....Please Give a different ID");
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



</body>
</html>