<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width = device-width, initial-scale = 1">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
  <style type="text/css">
    
    th, td {
    height: 40px;
    }

    .box1,.box2,.box3,.box4,.box5,.box1_1,.box2_2,.box3_3,.box4_4,.box5_5{
    	display: none;
    }
  </style>

</head>
<body>
<div class="container" style="width: 100%; height: 80%;">
 
    <nav class="navbar navbar-inverse bg-inverse navbar-fixed-top">
      <div class="container-fluid"> 
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="pull-left" href="#"><img src="img/logo.png" height="50" width="150"></a>
        </div>
     
        
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input id="srch" type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary" onclick="fun(srch.value)">Search</button>
          </form>

          <ul class="nav navbar-nav navbar-right">
            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">Compare Cars</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                New Cars<span class="caret">
                </span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Find New Cars</a></li>
                <li><a href="#">Compare Cars</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Upcomming Cars</a></li>
              </ul>
            </li>
        
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Used Cars<span class="caret">
                </span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Search Used Cars</a></li>
                <li><a href="#">Sell Used Cars</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Serch Used cars by city</a></li>
              </ul>
            </li>
            <li><a href="">About</a></li>
            <li class="col-lg-1"></li>
          </ul>
          
          
        </div>
    </div>
  </nav>

  <div class="row" style="background-color: #424668; height: 50%;">
  	<br><br><br>
  	<div class="col-lg-2 col-lg-offset-3">
      
  		<select onchange="fun(this.value)" id="make" name="make">
  			<option>Select Make</option>
  			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("vcs");
			$q="SELECT * FROM `car_company`";
			$r=mysql_query($q);
			while ($row = mysql_fetch_array($r)) {
			echo "<option>$row[company_name]</option>";	
			}
			
			?>
  		</select>
  	</div>
  	<div class="col-lg-2">
  		<select onchange="fun2(this.value,make.value)" id="model" name="model">
  			<option>Select Model</option>
        
  		</select>
  	</div>
  	<div class="col-lg-2">
  		<select id="version" name="version">
  			<option>Select Version</option>
  			
  		</select>
  	</div>
  	<br><br><br>
  	<div class="col-lg-2 col-lg-offset-5">
  		<input class="buttn" type="submit" value="+ Compare" name="" onclick="compare(make.value,model.value,version.value)">
  	</div>
  </div>
  <div class="row">
      <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover" id="box0_0">
          
        </table>
      </div>


      <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box1_1" id="box1_1">
        </table>
      </div>
      <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box2_2" id="box2_2">
          
        </table>
      </div><div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box3_3" id="box3_3">
          
        </table>
      </div><div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box4_4" id="box4_4">
          
        </table>
      </div><div class="col-lg-2" style="background-color:#dbdee0;">
        <table class="table table-bordered table-hover box5_5" id="box5_5">
          
        </table>
      </div>
</div>
<div class="row">

    <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover">
          <?php
          mysql_connect("localhost","root","");
          mysql_select_db("vcs");
          $sql = "SHOW COLUMNS FROM `car_details`";
          $result = mysql_query($sql);
          while($row = mysql_fetch_array($result)){
          echo "<tr><th class=text-right>".$row['Field']."</th></tr>";
          }
          ?>
        </table>
      </div>

      <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box1" id="box1">
        </table>
      </div>
      <div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box2" id="box2">
          
        </table>
      </div><div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box3" id="box3">
          
        </table>
      </div><div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box4" id="box4">
          
        </table>
      </div><div class="col-lg-2" style="background-color: #dbdee0;">
        <table class="table table-bordered table-hover box5" id="box5">
          
        </table>
      </div>

  </div>
</div>  
<script src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
    $temp= 1;
    function fun($r)
    {
      $.ajax({
      type: 'post',
      url: 'script/cmpr_slct.php',
      data: {
      get_option:$r
      },
      success: function (response) {
      document.getElementById("model").innerHTML=response; 
      }
      });
    }
    function fun2($r,$t)
    {
      //alert($temp);
      $.ajax({
      type: 'post',
      url: 'script/cmpr_slct2.php',
      data: {
      get_option:$r,
      make:$t
      },
      success: function (response) {
      document.getElementById("version").innerHTML=response; 
      }
      });
    }

    function compare($make,$model,$version){
      if ($make!="Select Make" && $model!="Select Model" && $version!="Select Version") {
      if ($temp==1) {$x="box1";$y="box1_1";}
      if ($temp==2) {$x="box2";$y="box2_2";}
      if ($temp==3) {$x="box3";$y="box3_3";}
      if ($temp==4) {$x="box4";$y="box4_4";}
      if ($temp==5) {$x="box5";$y="box5_5";}
      if ($temp<6) {

      $.ajax({
      type: 'post',
      url: 'script/cmpr.php',
      data: {
      model:$model,
      make:$make,
      version:$version
      },
      success: function (response) {
      document.getElementById($x).innerHTML=response;
      document.getElementById($x).style.display='block'; 
      }
      });

      $.ajax({
      type: 'post',
      url: 'script/cmpr2.php',
      data: {
      model:$model,
      make:$make,
      version:$version
      },
      success: function (response) {
      document.getElementById($y).innerHTML=response;
      document.getElementById($y).style.display='block'; 
      }
      });
      $temp=$temp+1;
      }
      else{
        alert("jdsfkjs")
      }
   }
    }
  </script>
</body>
</html>