
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
									<li><a href="pre_reg.php">Sell Used Cars</a></li>
									<li><a href="usedcars.php">Search Cars</a></li>
								</ul>
							</li>
							
							<li><a href="dealer_reg.php">dealer registration</a></li>
							<li class="<?php if($_SESSION['pagex']=="contactus"){echo 'active';} ?> "><a href="mail.php">Contact Us</a></li>
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