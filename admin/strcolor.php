<?php
$man=$_GET['man'];
$veh=$_GET['veh'];
$ccol=$_GET['ccol'];
$a="#";
$c=$a.$ccol;
$cname=$_GET['cname'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="insert into color_selector values('','$man','$veh','$c','$cname')";
$r=  mysql_query($q);
if($r){
    ?><script> alert("Car Colour Added Successfully");
             window.location='add_color.php';
      </script>
        <?php
}
else {  
    ?> <script>alert("Colour Not Added Please try Again");
           window.location="add_color.php";
    </script>
      
        <?php
}

?>