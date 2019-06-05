  <?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("location:../home.php");
}
$user=$_SESSION['admin'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    .space > .space2 > .n{
      height: 4em;
      
    }
    .space > .space2 > .n > label{
      
      width: 40%;
      float: left;
    }
    .space > .space2 > span{
      height: 2em;
      width: 50%;
      border-color: #34495e;
      border-style: solid;
      border-width: 1px;
      float: right;
    }
    .space > .space2 > center > .but{
      border: none;
      width: 30%;
      height: 3em;
      background-color: #34495e;
      color: #fff;
      margin-top: 1em;
    }
    .space > .space2 > center > .but:hover{
      color: #fff;
      background-color: #3498db;
    }
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
			<div id="username"><?php echo $user; ?><br><span style="font-weight: normal;"><a href="../logout.php">logout</a></span></div>
		</div>




			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li ><a href="admin.php"><i class="fa fa-tachometer " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
                <li><a href="users.php"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp; Users</a></li>
                 <li ><a href="man_data.php"><span class="fa fa-gears"></span>&nbsp;&nbsp;&nbsp;&nbsp;Add Manufacture</a></li>
               
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-car"></span>&nbsp;&nbsp;&nbsp; Vehicle Details&nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
	                  <ul class="dropdown-menu" role="menu">
	                    <li class="dropdown-header">Add Car Details</li>
	                    <li><a href="veh_data.php"><span class="fa fa-car"></span>&nbsp;&nbsp;&nbsp;&nbsp;Add New Car</a></li>
                      <li><a href="car_var.php"><span class="fa fa-random"></span>&nbsp;&nbsp;&nbsp;&nbsp; Add New Varient</a></li>
                      <li><a href="add_color.php"><span class="fa fa-paint-brush"></span>&nbsp;&nbsp;&nbsp;&nbsp; Add New Car Color</a></li>
	                    
	                  </ul>
                </li>
                <li class="active"><a href="viewdealer.php"><span class="fa fa-check"></span>&nbsp;&nbsp;&nbsp;&nbsp; Validate Dealer</a></li>
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
			            <h2><span class="fa fa-check" aria-hidden="true"></span> validate Dealer <small>Validates Registerd Dealers</small></h2>
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
			          <li class="active">Dashboard / Validate dealer / Dealer Details</li>
			        </ol>
			      </div>
			    </section>


			    <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Dealer Details</h3>
              </div>
              <div class="panel-body">
                

              <div class="space">
               
                <?php
                	$id=$_GET['id'];
					mysql_connect("localhost","root","");
					mysql_select_db('car_trade');
                   $q="select * from dealer_reg where d_id='$id'";
                   $r=  mysql_query($q);
                   while($ro=mysql_fetch_row($r))
                   {   $vr=$ro[0];
                ?>
                <div class="space2">
                    
                    
                    <div class="n"><label>Dealer Name</label><?php echo $ro[1]; ?></div>
                    <div class="n"><label>Registration Number</label><?php echo $ro[2]; ?></div>
                    <div class="n"><label>Dealer Address</label><?php echo $ro[3]; ?></div>
                    <div class="n"><label>Contact No.</label><?php echo $ro[4]; ?></div>
                    <div class="n"><label>EMail-ID</label><?php echo $ro[6]; ?></div>
                    <div class="n"><label>Dealers In</label><?php echo $ro[9]; ?></div>
                    <div class="n"><label>Status</label><select name="status" id="status" style="width: 10em;"><option>Accept</option><option>Reject</option></select></div>
                    <center> <input class="but" type="button" value="UPDATE" onclick="up()"></center>
                    
                </div>
                   <?php } ?>
                
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
<script>
             function up()
             {
                 var u=document.getElementById('status').value;
                 var id=<?php echo $vr;?>;
                 window.location='cnfrmdlr.php?st='+u+'&id='+id+'';
             }
        </script>
</body>
</html>