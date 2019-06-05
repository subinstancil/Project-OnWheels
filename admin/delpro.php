<?php
$reg=$_GET['no'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="delete from preown_reg where regno='$reg'";
$r=mysql_query($q);
if($r)
{
    ?>
<script>
	alert("Deleted Registration Successfully");
    window.location="del_preown.php";
    
    
</script>
<?php
}else {
        
	?><script>
    
    alert("Deletetion failed");
    window.location="del_preown.php";
</script>
<?php
}
?>