
<?php
$email=$_GET['no'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="delete from user_reg where email='$email'";
$r= mysql_query($q);
if($r)
{
   ?><script> alert("Data Deleted Successfully");
    window.location="users.php";</script>
   <?php
}
else{
    ?><script>
    	alert("failed to delete data");
     window.location="users.php";</script><?php
}
?>


