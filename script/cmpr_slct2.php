<?php
if(isset($_POST['get_option']))
{
	mysql_connect("localhost","root","");
	mysql_select_db("car_trade");
	$model=$_POST['get_option'];
	$make=$_POST['make'];
	 $a="select v_id from veh_detail where v_name='$model'";
                                    $b=mysql_query($a);
                                    
                                    while ($row2=mysql_fetch_row($b))
                                    {
                                        $ba=$row2[0];
                                    }
                                    
                                    $r="select variant from veh_variant where v_id='$ba'";
                                    $q=mysql_query($r);
                                    echo "<option>Select Version</option>";
                                    while($rw=mysql_fetch_row($q))
                                      { 
                                 ?>
                                    <option><?php echo $rw[0]; ?></option>
                                      <?php
                                       }
                                   }
                                      ?>