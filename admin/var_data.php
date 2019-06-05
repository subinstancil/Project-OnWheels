<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("location:../home.php");
}
$user=$_SESSION['admin'];
?>

<?php 
    $man=$_GET['man'];
    $veh=$_GET['veh'];
    mysql_connect("localhost","root","");
    mysql_select_db('car_trade');
    $q="select v_id from veh_detail where manufature='$man' and v_name='$veh'";
    $r=  mysql_query($q);
    while($ro=mysql_fetch_row($r))
     {
            $vid=$ro[0];  
            //echo $vid;
     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>On Wheels-admin | add varient</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<script src="ckeditor/ckeditor.js"></script>

  <style type="text/css">
    .space{
      width: 100%;
      height: 100%;
     
    }
    .space > .space2{
      width: 60%;
      position: relative;
      left: 20%;
      margin-top: 4%;
       margin-bottom: 4%;
      
    }
    .space > .space2 > form > .form1{
      height: 4em;
      
    }
    .space > .space2 > form > .form1 > label{
      
      width: 40%;
      float: left;
    }
    .space > .space2 > form > .form1 > input, .space > .space2 > form > .form1 > select{
      height: 2em;
      width: 50%;
      border-color: #34495e;
      border-style: solid;
      border-width: 1px;
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
<div class="container-fluid">
	<!--header-->
	<div class="row header11">
		<div class="col-lg-2 col-md-2 logo">
			<a href="#">ON<span>WHEELS</span></a>
		</div>
	</div>

	<!--main-->
	<div class="row main">
		

		<!--sidebar-->
		<div class="col-lg-2 col-md-2" id="sidebar">

		<div class="user">
			<div id="username"><?php echo $user; ?><br><span style="font-weight: normal;"><a href="../logout.php" class="btn btn-danger">logout</a></span></div>
		</div>




			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li ><a href="admin.php"><i class="fa fa-tachometer " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
                <li><a href="users.php"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp; Users</a></li>
                 <li ><a href="man_data.php"><span class="fa fa-gears"></span>&nbsp;&nbsp;&nbsp;&nbsp;Add Manufacture</a></li>
               
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-car"></span>&nbsp;&nbsp;&nbsp; Vehicle Details&nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Add Car Details</li>
                      <li><a href="veh_data.php"><span class="fa fa-car"></span>&nbsp;&nbsp;&nbsp;&nbsp;Add New Car</a></li>
                      <li><a href="car_var.php"><span class="fa fa-random"></span>&nbsp;&nbsp;&nbsp;&nbsp; Add New Varient</a></li>
                      <li><a href="add_color.php"><span class="fa fa-paint-brush"></span>&nbsp;&nbsp;&nbsp;&nbsp; Add New Car Color</a></li>
                      
                    </ul>
                </li>
                <li><a href="viewdealer.php"><span class="fa fa-check"></span>&nbsp;&nbsp;&nbsp;&nbsp; Validate Dealer</a></li>
                <li><a href="del_preown.php"><span class="fa fa-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp; Delete Seller</a></li>
                <li><a href="deldealer.php"><span class="fa fa-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp; Delete Dealer</a></li>
                <li><a href="viewfeedback.php"><span class="fa fa-eye"></span>&nbsp;&nbsp;&nbsp;&nbsp; View Feedback</a></li>
            </ul>
        </nav>

	<div class="well" style="margin-top: 40%;">
		<h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
	</div>        

	</div>



		<div class="col-lg-10 col-md-10 col-md-offset-2 col-md-offset-2 mainspace">
			    <header id="header">
			      <div class="container-fluid">
			        <div class="row">
			          <div class="col-md-10">
			            <h2><span class="fa fa-random" aria-hidden="true"></span> Add New Varient <small>Add New Car Varient</small></h2>
			          </div>
			          <div class="col-md-2 col-lg-2">
			            <div class="dropdown create">
			              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			                Create Content
			                <span class="caret"></span>
			              </button>
			              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
			                <li><a href="#">Add Post</a></li>
			                <li><a href="#">Add User</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			    </header>
			 
			    <section id="breadcrumb">
			      <div class="container-fluid">
			        <ol class="breadcrumb">
			          <li class="active">Dashboard / Add New Car Varient</li>
			        </ol>
			      </div>
			    </section>


			    <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Add new Varient</h3>
              </div>
              <div class="panel-body">
               



                <div class="space">
            
            <div class="space2">
                <form name="var_details" onsubmit="chk()" action="var_details.php" method="post" enctype="multipart/form-data">             
               
                   <input type="hidden" name="v_id" value="<?php echo $vid; ?>">
                <div class="form1"><label>Variant name</label><input type="text" name="variant" required=""></div>
                <div class="form1"><label>Price</label><input type="text" name="price" required=""></div>
                <div class="form1"><label>Fuel</label><input type="text" name="fuel" required=""></div>
                <div class="form1"><label>Mileage</label><input type="text" name="mileage" required=""></div>
                <div class="form1"><label>Gear Transmission</label>
                    <select name="gear" id="gear"><option>Manual</option><option>Auto</option></select></div>
                <div class="form1"><label>Number of Gear</label><input type="number" name="no_gear" required=""></div>
                <div class="form1"><label>A/c</label><input type="checkbox" name="ac" id="ac" value="y">
                  
                </div>
                <div class="form1"><label>Climate Control</label><input type="checkbox" name="clmt_cntrl" value="y" id="clmt_cntrl">
                   <script>
                      
                  
                  </script>
                </div>
                <div class="form1"><label>Central Lock</label><input type="checkbox" name="cntrl_lock" value="y" id="cntrl_lock">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>CD Player</label><input type="checkbox" name="player" value="y" id="player">
                      <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Power Steering</label><input type="checkbox" name="pow_steer" value="y" id="pow_steer">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Power Window</label><input type="checkbox" name="pow_window" value="y" id="pow_window">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Automatic Steering Adjustment</label><input type="checkbox" name="steer_adj" value="y" id="steer_adj">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Electrically Adjustable Driving Seat</label><input type="checkbox" name="ele_seat" value="y" id="ele_seat">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Steering Control</label><input type="checkbox" name="steer_cntrls" value="y" id="steer_cntrls">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Rear A/c Vent</label><input type="checkbox" name="rear_acvent" value="y" id="steer_cntrls">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Remote Boot</label><input type="checkbox" name="remote_boot" value="y" id="remote_boot">
                <script>
                     
                  
                  </script>
                </div>
                <div class="form1"><label>Rear Wiper</label><input type="checkbox" name="rear_wiper" value="y" id="rear_wiper">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Leather Seats</label><input type="checkbox" name="leather_seats" value="y" id="leather_seats">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Electrical Mirror</label><input type="checkbox" name="ele_mirror" value="y" id="ele_mirror">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>A.B.S</label><input type="checkbox" name="abs" value="y" id="abs">
                <script>
                      
                  
                  </script>
                </div>
                <div class="form1"><label>Air Bag</label><input type="checkbox" name="airbag" value="y" id="airbag">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Parking Sensor</label><input type="checkbox" name="parking_sensor" value="y" id="parking_sensor">
                <script>
                       
                  
                  </script>
                </div>
                <div class="form1"><label>Traction</label><input type="checkbox" name="traction" value="y" id="traction">
                <script>
                       
                  
                  </script>
                </div>
                
                
                <script>
                      function chk()
                      {

                       var c=document.getElementById("ac").checked;
                       if(c!="true")
                       {
                           document.getElementById("ac").value="n";
                       }
                      
                       var c=document.getElementById('traction').checked;
                       if(c!='true')
                       {
                           document.getElementById('traction').value='n';
                       }
                       
                       var c=document.getElementById('parking_sensor').checked;
                       if(c!='true')
                       {
                           document.getElementById('parking_sensor').value='n';
                       }
                       
                       var c=document.getElementById('airbag').checked;
                       if(c!='true')
                       {
                           document.getElementById('airbag').value='n';
                       }
                       
                        var c=document.getElementById('abs').checked;
                       if(c!='true')
                       {
                           document.getElementById('abs').value='n';
                       }
                       
                       
                       var c=document.getElementById('ele_mirror').checked;
                       if(c!='true')
                       {
                           document.getElementById('ele_mirror').value='n';
                       }
                       
                       var c=document.getElementById('leather_seats').checked;
                       if(c!='true')
                       {
                           document.getElementById('leather_seats').value='n';
                       }
                       
                       var c=document.getElementById('rear_wiper').checked;
                       if(c!='true')
                       {
                           document.getElementById('rear_wiper').value='n';
                       }
                       
                         var c=document.getElementById('remote_boot').checked;
                       if(c!='true')
                       {
                           document.getElementById('remote_boot').value='n';
                       }
                       
                       
                       var c=document.getElementById('steer_cntrls').checked;
                       if(c!='true')
                       {
                           document.getElementById('steer_cntrls').value='n';
                       }
                       
                       
                       var c=document.getElementById('steer_cntrls').checked;
                       if(c!='true')
                       {
                           document.getElementById('steer_cntrls').value='n';
                       }
                       
                       
                       var c=document.getElementById('ele_seat').checked;
                       if(c!='true')
                       {
                           document.getElementById('ele_seat').value='n';
                       }
                       
                       var c=document.getElementById('steer_adj').checked;
                       if(c!='true')
                       {
                           document.getElementById('steer_adj').value='n';
                       }
                       
                       var c=document.getElementById('pow_steer').checked;
                       if(c!='true')
                       {
                           document.getElementById('pow_steer').value='n';
                       }
                       
                       var c=document.getElementById('pow_window').checked;
                       if(c!='true')
                       {
                           document.getElementById('pow_window').value='n';
                       }
                       
                       
                       var c=document.getElementById('player').checked;
                       if(c!='true')
                       {
                           document.getElementById('player').value='n';
                       }
                       
                        var c=document.getElementById('clmt_cntrl').checked;
                       if(c!='true')
                       {
                           document.getElementById('clmt_cntrl').value='n';
                       }
                       
                       
                       var c=document.getElementById('cntrl_lock').checked;
                       if(c!='true')
                       {
                           document.getElementById('cntrl_lock').value='n';
                       }
                       
                       
                       
                       
                       
                   }
                  </script>
                
                
                
               <center> <input class="but" type="submit" value="Save Variant Details"/>
                </center>
            </form>
            </div>
            
        </div>




              </div>
              </div>


              


              <div class="footer align-self-end">
      			<p>Copyright OnWheels, &copy; 2017</p>
    		</div>

		</div>
	</div>

	
</div>



<!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>





<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>