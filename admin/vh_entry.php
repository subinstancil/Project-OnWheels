<?php
$v_name=$_POST['v_name'];
$manufacture=$_POST['manufacture'];
$v_type=$_POST['v_type'];
$minprice=$_POST['minprice'];
$maxprice=$_POST['maxprice'];
$cc_engine=$_POST['cc_engine'];
$color="";
$mileage=$_POST['mileage'];
$engine=$_POST['engine'];
$bhp=$_POST['bhp'];
$len=$_POST['len'];
$width=$_POST['width'];
$hgt=$_POST['hgh'];
$ge=$_POST['ge'];
$wb=$_POST['wb'];
$weight=$_POST['weight'];
$bootspace=$_POST['bootspace'];
$turn_rad=$_POST['turn_rad'];
$tyre_frnt=$_POST['tyre_front'];
$tyre_back=$_POST['tyre_back'];

$path1="fup/";
$fn1=$_FILES['img1']['name'];
$path1=$path1.rand().rand().$fn1;
$path11="../";
$path11=$path11.$path1;
move_uploaded_file($_FILES['img1']['tmp_name'],$path11);

$path2="fup/";
$fn2=$_FILES['img2']['name'];
$path2=$path2.rand().rand().$fn2;
$path22="../";
$path22=$path22.$path2;
move_uploaded_file($_FILES['img2']['tmp_name'],$path22);


$path3="fup/";
$fn3=$_FILES['img3']['name'];
$path3=$path3.rand().rand().$fn3;
$path33="../";
$path33=$path33.$path3;
move_uploaded_file($_FILES['img3']['tmp_name'],$path33);

$path4="fup/";
$fn4=$_FILES['img4']['name'];
$path4=$path4.rand().rand().$fn4;
$path44="../";
$path44=$path44.$path4;
move_uploaded_file($_FILES['img4']['tmp_name'],$path44);

mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="insert into veh_detail values('','$v_name','$manufacture','$v_type','$minprice','$maxprice','$cc_engine','$color','$mileage','$engine','$bhp','$len','$width','$hgt','$ge','$wb','$weight','$bootspace','$turn_rad','$tyre_frnt','$tyre_back','$path1','$path2','$path3','$path4')";
$r=mysql_query($q);
if($r){
    ?><script>alert("DATA ADDED SUCCESSFULLY>>>");
         window.location="veh_data.php";
       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED>>>PLEASE TRY AGAIN");
         window.location="veh_data.php";
       </script>
       <?php
}
?>
?>