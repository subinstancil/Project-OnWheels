<?php
$email=$_REQUEST['email'];
$man=$_REQUEST['man'];
$d_name=$_REQUEST['d_name'];
$d_reg=$_REQUEST['d_reg'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];


//echo $email.$man.$d_name.$d_reg.$address.$phone;

mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="update dealer_reg SET name='$d_name',reg_id='$d_reg',address='$address',phone='$phone',manufacture='$man' where email='$email'";
$r=mysql_query($q);
if($r){
    ?><script>alert("DATA UPDATED SUCCESSFULLY...");
         window.location="edit_dealer.php";
       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED...PLEASE TRY AGAIN");
         window.location="edit_dealer.php";
       </script>
       <?php
}

?>

