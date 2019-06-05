

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



<!--used cars -->


<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head">Used Cars</h3>
			<p class="augue_agile">Find used cars </p>
		</div>
</div>



			<div class="workspace" style="padding: none !important;margin-top: none !important; width: 60% !important; position: relative; left: 20% !important;">
                
                <?php
                 mysql_connect("localhost","root","");
   					mysql_select_db('car_trade'); 
   						$q='select pr_id,v_name,variant,v_make,regno,km,price,image1 from preown_reg';
   						$r=mysql_query($q);
                   while($pr=mysql_fetch_row($r))
                     {  
                   ?>
                <br><div class="content" onclick="window.location.href='viewused.php?id=<?php echo $pr[0];?>'">
                    <div class="img" style="background-image: url('<?php echo $pr[7];?>'); background-size:100% 100%; background-repeat: no-repeat;">
                        <img src="" style="size:100% 100%;">
                    </div>   
                    <div class="data">
                        <a href="viewused.php?id=<?php echo $pr[0];?>" style="color:blue;float: left !important; color: #2f3031 !important; font-size: 16px !important;"><label><?php echo $pr[3]." ".$pr[1]." ".$pr[2]." ";?></label></a><br><br><br><br>
                        <label style="float: right;">Price&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="fa fa-inr"></span>&nbsp;<?php echo $pr[6];?></label><br>
                        <label style="float: right;">KMs Run &nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pr[5];?></label><br>
                        <label style="float: right;">Registration No &nbsp;: &nbsp;<?php echo $pr[4];?></label>
                    </div>
                </div>
                     <?php } ?>
            </div>



<!--used cars -->






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