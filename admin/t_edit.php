<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<script src="ckeditor/ckeditor.js"></script>
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
			<div id="round"><img src="3.jpg" height="100px" width="100px"></div>
			<div id="username">User Name<br><span style="font-weight: normal;">Admin</span></div>
		</div>




			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li><a href="admin.php"><i class="fa fa-tachometer " aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
                <li><a href="users.php"><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp; Users</a></li>
               
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-table"></span>&nbsp;&nbsp;&nbsp;&nbsp; Tables&nbsp;&nbsp;&nbsp;<span class="caret"></span></a>
	                  <ul class="dropdown-menu" role="menu">
	                    <li class="dropdown-header">Manage Tables</li>
	                    <li><a href="t_view.php"><span class="fa fa-eye"></span>&nbsp;&nbsp;&nbsp;&nbsp; View</a></li>
	                    <li><a href="t_edit.php"><span class="fa fa-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp; Edit</a></li>
	                  </ul>
                </li>
                <li ><a href="pages.php"><span class="fa fa-file-text"></span>&nbsp;&nbsp;&nbsp;&nbsp; Pages</a></li>
            </ul>
        </nav>

	<div class="well">
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
			            <h2><span class="fa fa-pencil" aria-hidden="true"></span> Table Edit <small> Edit Database Tables</small></h2>
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
			          <li><a href="admin.php"> Dashboard</a></li>
                <li class="active">Table Edit</li>
			        </ol>
			      </div>
			    </section>


          	 <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Pages</h3>
              </div>
              <div class="panel-body" style="overflow-y:scroll;">
                
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