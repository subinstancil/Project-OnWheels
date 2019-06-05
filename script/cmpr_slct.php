<?php
if(isset($_POST['get_option']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("car_trade");
	$make=$_POST['get_option'];
	if($make=="Select Make")
	{
		echo "<option>Select Model</option>";
	}
	else{
	echo "<option>Select Model</option>";
	$q="select v_name from veh_detail where manufature='$make'";
	$r=mysql_query($q);
	while ($row = mysql_fetch_row($r)) {
		echo "<option>$row[0]</option>";	
		}
	}
}			
?>