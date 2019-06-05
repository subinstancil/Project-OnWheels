<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$v_id=$_POST['v_id'];
$varient=$_POST['variant'];
$price=$_POST['price'];
$fuel=$_POST['fuel'];
$transmission=$_POST['gear'];
$no_gear=$_POST['no_gear'];        
$ac=$_POST['ac'];
$clmt_cntrl=$_POST['clmt_cntrl'];
$cntrl_lock=$_POST['cntrl_lock'];
$player=$_POST['player'];
$pow_steer=$_POST['pow_steer'];
$pow_window=$_POST['pow_window'];
$steer_adj=$_POST['steer_adj'];
$ele_seat=$_POST['ele_seat'];
$steer_cntrls=$_POST['steer_cntrls'];
$rear_acvent=$_POST['rear_acvent'];
$remote_boot=$_POST['remote_boot'];
$rear_wiper=$_POST['rear_wiper'];
$leather_seats=$_POST['leather_seats'];
$ele_mirror=$_POST['ele_mirror'];
$abs=$_POST['abs'];
$airbag=$_POST['airbag'];
$parking_sensor=$_POST['parking_sensor'];
$traction=$_POST['traction'];
$mileage=$_POST['mileage'];
//echo "__".$v_id."__".$varient."__".$price."__".$fuel."__".$transmission."__".$no_gear."__".$ac."__".$clmt_cntrl."__".$cntrl_lock."__".$player."__".$pow_steer."__".$pow_window."__"
  //      
    //    .$steer_adj."__".$steer_adj."__".$ele_seat."__".$steer_cntrls."__".$rear_acvent."__".$remote_boot."__".$rear_wiper."__".$leather_seats."__".$ele_mirror."__"
      //  .$abs."__".$airbag."__".$parking_sensor."__".$traction."__".$mileage;
$q="insert into veh_variant values('','$v_id','$varient','$price','$fuel','$transmission','$no_gear','$ac','$clmt_cntrl','$cntrl_lock','$player','$pow_steer','$pow_window','$steer_adj','$ele_seat','$steer_cntrls','$rear_acvent','$remote_boot','$rear_wiper','$leather_seats','$ele_mirror','$abs','$airbag','$parking_sensor','$traction','$mileage')";
$r=mysql_query($q);
if($r){
    ?><script>//alert("DATA ADDED SUCCESSFULLY...");
         window.location="car_var.php";
       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED...PLEASE TRY AGAIN");
         window.location="car_var.php";
       </script>

       <?php
}

?>

