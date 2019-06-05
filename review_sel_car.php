
<!DOCTYPE html>
<html lang="en">
<head>
<title>onwheels | Add Review</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
	.cmp{
		width: 80%;
		
		
	}
	select{
		margin-left: 5%;
		margin-right: 2%;
		width: 25%;
		height: 3em;
		text-align: center;
		float: left;
		/*border-style: solid;
		border-color: #3498db;*/
	}
	.btn{
		width: 30%;
		height: 3em;
		margin-bottom: 30%;
		background-color: #34495e;
		color: #fff;

	}
	.btn:hover{
		background-color: #3498db;
		color: #fff;
	}
</style>

</head>
	
<body>
<?php 
session_start();
$_SESSION['pagex']="randf";
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
<!-- mail -->
	

	<div class="mail">
		<div class="container">
			<h3 class="w3_agile_head">Select Car</h3>
			<p class="augue_agile">Vivamus eget augue bibendum, molestie lacus</p>
			</div></div>
















<center><div class="workspace">
               
                 <div class="cmp">
                                          
                    <div class="sel">
                        <div class="man">
                            <select  onchange="man1(this.value)" name="man1" id="man1">
                                <option>--Select Manufacture--</option>
                                <?php
                                    mysql_connect("localhost","root","");
                                    mysql_select_db("car_trade");
                                    $q="select name from manufacture";
                                    $r=mysql_query($q);
                                    while($ro= mysql_fetch_row($r))
                                      { 
                                    ?>
                                    <option><?php echo $ro[0]; ?></option>
                                      <?php }?>
                                    
                            </select>
                            <script>
                            
                            function man1(str)
                            {
                              if(str=="--Select Manufacture--")
                              {
                                  document.getElementById("r1").innerHTML="";
                              }
                              else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("r1").innerHTML = xmlhttp.responseText;
               }
        };
        xmlhttp.open("GET", "g.php?q=" + str, true);
        xmlhttp.send();
    }
                              
                              
                            }
                        </script>
                        </div>
                            <div class="car">
                                <select  id="r1" onchange="car1(this.value)" name="car1">
                                                                    
                                 
                                </select>
                                <script>
                                function car1(str)
                            {
                              if(str=="--Select Car--")
                              {
                                  document.getElementById("v1").innerHTML="";
                              }
                              else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("v1").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gv.php?q=" + str, true);
        xmlhttp.send();
    }
                              
                              
                            }
                                                    </script>
                            </div>
                        <div class="car">
                                <select  id="v1" name="var1">
                                    
                                    
                                </select>   
                         </div>
      <br><br><br><br><br><br>
      <input type="button" onclick="send()" value="Add Review" class="btn">
         <script>
            function send()
            {
                var man=document.getElementById('man1').value;
                var vh=document.getElementById('r1').value;
                var mod=document.getElementById('v1').value;
                window.location='addreview.php?m='+man+'&vh='+vh+'&var='+mod+'';
            }
         
         </script>
                    </div>
                                          
                
                </div>
            </div></center>









		











			
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