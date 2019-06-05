<?php
$name=$_POST['name'];
$country=$_POST['country'];
$path="fup/";
$fn=$_FILES['imgemb']['name'];
$path=$path.rand().rand().$fn;

$path1="../";
$path1=$path1.$path;

move_uploaded_file($_FILES['imgemb']['tmp_name'], $path1);
$r="insert into manufacture values('','$name','$country','$path')";
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$n=mysql_query($r);
if($n)
{
    ?><script>alert("Manufacture Added"); window.location="man_data.php";</script>
    <?php    
} else {?>
         <script>alert("Manufacture not Added Please Try Again..."); window.location="man_data.php";
<?php }
?>