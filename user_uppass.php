<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="update user_reg SET password='$pass' where email='$email'";
$r=mysql_query($q);
if($r)
{?>
<script>alert("Password Changed Successfully"); window.location="home.php";</script>
<?php    
}  else { 
?>
<script>alert("Password Not Changed Try again"); window.location="home.php";</script>
<?php } ?>
