<?php
	$make=$_POST['make'];
	$model=$_POST['model'];
	$version=$_POST['version'];
?>

<?php
                    mysql_connect("localhost","root","");
                    mysql_select_db('car_trade');
                    $q1="select * from veh_detail where v_name='$model'";
                    $r=mysql_query($q1);
                    while($ro=mysql_fetch_row($r))
                    {    
                     $v1="select * from veh_variant where v_id='$ro[0]' and variant='$version'";   
                     $r1=mysql_query($v1);
                     while($var1=mysql_fetch_row($r1))
                     {}
                     	 echo "<tr><th class=\"text-center col-md-2\">";

                         echo "<img src=\"$ro[21]\" width='150px' height='100px'>";
                         echo "<br>";
                         echo $ro[2]." <br> ".$ro[1]."<br>".$var1[2];
                 }
?>