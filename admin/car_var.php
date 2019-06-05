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
	<title>On Wheels-admin | add varient</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<script src="ckeditor/ckeditor.js"></script>

  <style type="text/css">
    .workspace{
      width: 100%;

    }
    .workspace > .content{
      width: 60%;
      position: relative;
      left: 20%;
    }
    .workspace > .content > select{
      width: 45%;
      height: 3em;
      border-color: #34495e;
      border-style: solid;
      border-width: 1px;
      margin: 2em 0em;
      text-align: center;
    }
    .workspace > .content > center > .but{
       border: none;
      width: 30%;
      height: 3em;
      background-color: #34495e;
      color: #fff;
      margin-top: 1em;
      margin-bottom: 3em;
    }
    .workspace > .content > center > .but:hover{
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
                <li><a href="admin.php"><i class="fa fa-tachometer " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
                <li><a href="users.php"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp; Users</a></li>
                 <li><a href="man_data.php"><span class="fa fa-gears"></span>&nbsp;&nbsp;&nbsp;&nbsp;Add Manufacture</a></li>
               
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
               



                <div class="workspace">
                
                <div class="content">
            
                    <select  onchange="man1(this.value)" name="man1" id="man1" style="float: left;">
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
                        
                            
                                <select  id="r1" name="car1" style="float: right;">
                                                                    
                                 
                                </select>          
                        <center>        
                        <input class="but" type="button" onclick="send()" value="Add Variant" ></center>
                           
                        <script>
                              function send(){
                                        var man=document.getElementById('man1').value;
                                        var vh=document.getElementById('r1').value;
                                        
                                        if (vh != "" ) {
                                        window.location='var_data.php?man='+man+'&veh='+vh+'';}
                                        else{
                                          alert("please select vehicle manufacture and varient");
                                        }
                                        }
                        </script>
                        </script>
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