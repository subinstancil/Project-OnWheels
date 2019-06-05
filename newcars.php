
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

<div class="nwcar_main">

	
		<div class="pleft">
			<ul class="nav navbar-nav">
        <li class="active" id="mod"><a><label>Car Type</label></a></li>
				<li id="br"><a><label >Brand</label></a></li>
				<li id="bud"><a><label >Budget</label></a></li>
				<li id="fuel"><a><label>Fuel Type</label></a></li>

			</ul>
		</div>
		<div class="pright">
			
			<div class="brand" id="brdata">
                            <?php
                            mysql_connect("localhost","root","");
                            mysql_select_db('car_trade');
                            $q='select m_id,name,imgemb from manufacture order by name asc';
                            $r=  mysql_query($q);
                            while($row=  mysql_fetch_row($r))
                              {?>                            
                            <div class="emb" style="width: 100px; height: 100px; float: left; margin-left: 20px;">
                                <a style="text-decoration: none;color: #000;" href="viewb.php?m1=<?php echo $row[1]; ?>">
                                <div class="embi">
                                    <img src="<?php print_r($row[2]); ?>">
                                </div>

                                <div class='embh'>
                                   
                                        <center><?php print_r($row[1]);?></center>
                                    
                                </div>
                                    </a>
                            </div>
                              <?php } ?>
            </div>
                          
            <div class="bud" id="budata">
                                <div class="bud1">
                                   <center> <a href="viewbud.php?b1=min">
                                        <h4><label style="text-decoration: none;">
                                            Upto <br>Rs.4 Lakh</label>
                                    </h4>
                                </a></center>
                                </div>
                                <div class="bud1">
                                <center>
                                    <a href="viewbud.php?b1=4to12">
                                    <h4><label>
                                            Between<br>Rs.4 - 12 Lakh </label>
                                    </h4>
                                    </a></center>
                                </div>
                                <div class="bud1">
                                    <center><a href="viewbud.php?b1=12to40">
                                    <h4><label>
                                            Between<br>Rs.12 - 40 Lakh </label>
                                    </h4>
                                    </a></center>
                                </div>
                                <div class="bud1">
                                   <center> <a href="viewbud.php?b1=max">
                                    <h4><label>
                                            
                                            Above<br>Rs.40 Lakh</label> 
                                    </h4>
                                        </a></center>
                                </div>
            </div>
                            
            <div class="cartype" id="typedata">
                                <a style="text-decoration: none;" href="viewtype.php?t1=Hatchback">
                                <div class="ctype" id="t1">
                                    <div class="image" id="t2">
                                        <img src="Image_Pro/hatchback.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t3">
                                        <center>Hatchback</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=Sedan">
                                <div class="ctype" id="t10">
                                    <div class="image" id="t20">
                                        <img src="Image_Pro/sedan.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t30">
                                        <center>Sedan</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=SUV">
                                <div class="ctype" id="t11">
                                    <div class="image" id="t21">
                                        <img src="Image_Pro/suv-muv.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t31">
                                        <center>SUV / MUV</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=Truck">
                                <div class="ctype" id="t12">
                                    <div class="image" id="t22">
                                        <img src="Image_Pro/truck.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t32">
                                        <center>Truck</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=mini van">
                                <div class="ctype" id="t13">
                                    <div class="image" id="t23">
                                        <img src="Image_Pro/mini-van.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t33">
                                        <center>Mini Van / Van</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=station wagon">
                                <div class="ctype" id="t14">
                                    <div class="image" id="t24">
                                        <img src="Image_Pro/station waqgon.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t34">
                                        <center>Station Wagon</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=coupe">
                                
                                <div class="ctype" id="t15">
                                    <div class="image" id="t25">
                                        <img src="Image_Pro/coupe.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t35">
                                        <center>Coupe</center>
                                    </div>
                                </div>
                                </a>
                                <a style="text-decoration: none;" href="viewtype.php?t1=convertible">
                                <div class="ctype" id="t16">
                                    <div class="image" id="t26">
                                        <img src="Image_Pro/convertible.png" style="width:100%;height:100%; ">
                                    </div>
                                    <div class="content" id="t36">
                                        <center>Convertible</center>
                                    </div>
                                </div>
                                </a>
            </div>
                            <div class="fuel" id="fdata">
                                <div class="fuel1">
                                    <center><a href="viewfuel.php?f1=petrol">
                                    <br><h4><label>Petrol</label></h4>
                                    </a></center>
                                </div>
                                <div class="fuel1">
                                    <center><a href="viewfuel.php?f1=diesel">
                                    <br><h4><label>Diesel</label></h4>
                                    </a></center>
                                </div>
                                <div class="fuel1">
                                    <center><a href="viewfuel.php?f1=cng">
                                    <br> <h4><label>CNG</label></h4>
                                    </a></center>
                                    
                                </div>
                                <div class="fuel1">
                                    <center><a href="viewfuel.php?f1=hybrid">
                                    <br><h4><label>Hybrid</label></h4>
                                    </a></center>
                                </div>
                            </div>

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


<script>
               $(document).ready(function(){
              
                  $("#br").click(function(){
                      $("#brdata").show();
                      
                      $("#budata").hide();
                      $("#typedata").hide();
                      $("#fdata").hide();

                      $('#bud').removeClass('active');
                      $('#mod').removeClass('active');
                      $('#fuel').removeClass('active');
    				  $('#br').addClass('active');
                      
                  }); 
                   $("#bud").click(function(){
                      $("#brdata").hide();
                      $("#budata").show();
                      $("#bud1").show();
                      $("#typedata").hide();
                      $("#fdata").hide();

                      $('#br').removeClass('active');
                      $('#mod').removeClass('active');
                      $('#fuel').removeClass('active');
    				  $('#bud').addClass('active');
                      
                  });
                  $("#mod").click(function(){
                      $("#brdata").hide();
                      $("#budata").hide();
                      $("#typedata").show();
                      $("#fdata").hide();

                      $('#bud').removeClass('active');
                      $('#br').removeClass('active');
                      $('#fuel').removeClass('active');
    				  $('#mod').addClass('active');
                      
                  });
                  $("#fuel").click(function(){
                      $("#brdata").hide();
                      $("#budata").hide();
                      $("#typedata").hide();
                      $("#fdata").show();

                      $('#bud').removeClass('active');
                      $('#mod').removeClass('active');
                      $('#br').removeClass('active');
    				  $('#fuel').addClass('active');
                      
                      
                      
                  });
                  $("#t1").mouseover(function(){
                      $("#t2").css("opacity","1");
                      $("#t3").css("font-weight","bold");
                  });
                  $("#t1").mouseleave(function(){
                      $("#t2").css("opacity","0.5");
                      $("#t3").css("font-weight","normal");
                  });
                  $("#t10").mouseover(function(){
                      $("#t20").css("opacity","1");
                      $("#t30").css("font-weight","bold");
                  });
                  $("#t10").mouseleave(function(){
                      $("#t20").css("opacity","0.5");
                      $("#t30").css("font-weight","normal");
                  });
                  $("#t11").mouseover(function(){
                      $("#t21").css("opacity","1");
                      $("#t31").css("font-weight","bold");
                  });
                  $("#t11").mouseleave(function(){
                      $("#t21").css("opacity","0.5");
                      $("#t31").css("font-weight","normal");
                  });
                  $("#t12").mouseover(function(){
                      $("#t22").css("opacity","1");
                      $("#t32").css("font-weight","bold");
                  });
                  $("#t12").mouseleave(function(){
                      $("#t22").css("opacity","0.5");
                      $("#t32").css("font-weight","normal");
                  });
                  $("#t13").mouseover(function(){
                      $("#t23").css("opacity","1");
                      $("#t33").css("font-weight","bold");
                  });
                  $("#t13").mouseleave(function(){
                      $("#t23").css("opacity","0.5");
                      $("#t33").css("font-weight","normal");
                  });
                  $("#t14").mouseover(function(){
                      $("#t24").css("opacity","1");
                      $("#t34").css("font-weight","bold");
                  });
                  $("#t14").mouseleave(function(){
                      $("#t24").css("opacity","0.5");
                      $("#t34").css("font-weight","normal");
                  });
                  $("#t15").mouseover(function(){
                      $("#t25").css("opacity","1");
                      $("#t35").css("font-weight","bold");
                  });
                  $("#t15").mouseleave(function(){
                      $("#t25").css("opacity","0.5");
                      $("#t35").css("font-weight","normal");
                  });
                  $("#t16").mouseover(function(){
                      $("#t26").css("opacity","1");
                      $("#t36").css("font-weight","bold");
                  });
                  $("#t16").mouseleave(function(){
                      $("#t26").css("opacity","0.5");
                      $("#t36").css("font-weight","normal");
                  });
                  
               });
        </script> 



</body>
</html>