
<?php
$email=$_GET['no'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="delete from dealer_reg where email='$email'";
$r= mysql_query($q);
if($r)
{
   ?><script> alert("Data Deleted Successfully");
    window.location="deldealer.php";</script>
   <?php
}
else{
    ?><script>
    	alert("failed to delete data");
     window.location="deldealer.php";</script><?php
}
?>


