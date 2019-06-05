<link href="css/user_style.css" rel="stylesheet" type="text/css" media="all" />
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
					<h1><a class="navbar-brand" href="index.html"><span style="color: #346fbe;">O</span>n-Wheels</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li ><a href="home.php">Home</a></li>
							<li class="dropdown <?php if($_SESSION['pagex']=="newcars"){echo 'active';} ?> ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">new cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="newcars.php">Find New Cars</a></li>
									
									<li><a href="viewreview.php">View Review</a></li>
								</ul>
							</li>
							<li class="dropdown <?php if($_SESSION['pagex']=="usedcars"){echo 'active';} ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">used cars <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									
									<li><a href="usedcars.php">Search Cars</a></li>
								</ul>
							</li>
							
							<li class="<?php if($_SESSION['pagex']=="edtdlr"){echo 'active';} ?>"><a href="editpreown.php" >Edit Details</a></li>
							<li class="<?php if($_SESSION['pagex']=="randf"){echo 'active';} ?> "><a href="add_feedback.php">FeedBack</a></li>
						</ul>
						<div class="w3_agile_login">
							<a href="#small-dialog" class="play-icon popup-with-zoom-anim"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp; <?php
							$user=$_SESSION['preown'];
							mysql_connect("localhost","root","");
							mysql_select_db("car_trade");
                      $q="select name from preown_reg where email='$user'";
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
$pre=$_SESSION['preown'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
?>

		<h3>Change Password</h3>		
		<div class="agileits_modal_body">
			<form name="pre_chgpass" action="pre_uppass.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
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