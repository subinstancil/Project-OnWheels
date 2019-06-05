<?php
$e=$_POST['email'];
$oldp=$_POST['oldp'];
$newp=$_POST['newp'];
$add=$_POST['add'];
$cno=$_POST['cno'];
//echo $e.$newp;
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="update preown_reg SET price='$newp',mob='$cno',address='$add' where email='$e'";
$r=mysql_query($q);
if($r)
{?>
<script>alert("Price Changed Successfully"); window.location="editpreown.php";</script>
<?php    
}  else { 
?><script>alert("Price Not Changed Try again"); window.location="editpreown.php";</script>

<?php } ?>
