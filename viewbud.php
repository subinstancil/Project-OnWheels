
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | new cars</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/cust_style.css" rel="stylesheet" type="text/css" media="all" />
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
$c=$_GET['b1'];
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
			<h3 class="w3_agile_head">New Cars</h3>
			<p class="augue_agile">Find new cars based on category</p>
		</div>
</div>









<div class="workspace">
                <?php
                mysql_connect("localhost","root","");
                mysql_select_db("car_trade");
                if($c=='min')
                {
                    $q="select v_id,variant,price from veh_variant where price<=400000 order by v_id desc";
                }
                elseif ($c=='4to12') {
                    $q="select v_id,variant,price from veh_variant where price>400000 and price<1200000 order by v_id desc";
                    
                }
                elseif ($c=='12to40') {
                    
                   $q="select v_id,variant,price from veh_variant  where price>1200000 and price<4000000";
                   
                }
                else{
                    $q="select v_id,variant,price from veh_variant where price >= '4000000'";
                }
                

                $r=mysql_query($q);
                while($ro=mysql_fetch_row($r))
                {
                    $v="select v_name,manufature,v_type,img1 from veh_detail where v_id='$ro[0]'";
                    $vh=  mysql_query($v);
                    while($veh=  mysql_fetch_row($vh))
                    {
                
                ?>
                
                <div class="car" onclick=" window.location.href='car_details.php?man=<?php echo $veh[1];?>&veh=<?php echo $veh[0]?>&vari=<?php echo $ro[1];?>' ">
                    <div class="cimg">
                        <img src="<?php echo $veh[3]; ?>" style="width:100%; height:100%;">
                    </div>    
                    <div class="cname">
                        <a href="car_details.php?man=<?php echo $veh[1];?>&veh=<?php echo $veh[0]?>&vari=<?php echo $ro[1];?>"> <label class="cnf"style="font-size: 18px;"><br>&nbsp;<?php echo $veh[1]." ".$veh[0]." ".$ro[1];?></label></a>
                    </div>
                    <div class="cdata">
                        <br><label class="cnf1">Body Type : <?php echo $veh[2]; ?></label>
                        <br><br>
                        <label class="cnf1">Price : <?php echo $ro[2]; ?> </label>
                    </div>
                </div>
                    <?php } } ?>


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
                    
            </div>














<!--//new cars -->
	

<br><br><br><br>



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