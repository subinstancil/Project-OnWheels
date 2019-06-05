<?php
$c=$_GET['q'];
?>

                                <option>--Select Variant--</option>
                                <?php
                                    mysql_connect("localhost","root","");
                                    mysql_select_db("car_trade");
                                    $a="select v_id from veh_detail where v_name='$c'";
                                    $b=mysql_query($a);
                                    
                                    while ($row2=mysql_fetch_row($b))
                                    {
                                        $ba=$row2[0];
                                    }
                                    
                                    $r="select variant from veh_variant where v_id='$ba'";
                                    $q=mysql_query($r);
                                    while($rw=mysql_fetch_row($q))
                                      { 
                                 ?>
                                    <option><?php echo $rw[0]; ?></option>
                                      <?php
                                       }
                                      ?>
                                    
