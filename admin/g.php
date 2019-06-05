  <?php
   $c=$_GET['q'];
  ?>
                                <option>--Select Car--</option>
                                <?php
                                    mysql_connect("localhost","root","");
                                    mysql_select_db("car_trade");
                                    $q="select v_name from veh_detail where manufature='$c'";
                                    $r=mysql_query($q);
                                    while($ro= mysql_fetch_row($r))
                                      { 
                                 ?>
                                    <option><?php echo $ro[0]; ?></option>
                                      <?php }?>
                                    
           

  


                            
