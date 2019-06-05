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
                     {
                    ?>
                 
                  <tr><td class="text-center col-md-2"><span class="fa fa-inr"></span> <?php echo $var1[3];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[3]; ?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[6]; ?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $var1[25];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[9];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[10];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[11];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[12];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[13]; ?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[14];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[15];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[16];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[17];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[18];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[19];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $ro[20];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $var1[4];?></td></tr>
                  <tr><td class="text-center col-md-2"><?php echo $var1[5];?></td></tr>
                      <?php
                      
                         if($var1[5]=="manual")
                         { ?>
                       <tr><td class=text-center><?php echo $var1[6];?></td></tr>
                      <?php }
                      else{?> <tr><td class=text-center>Not Applicable</td></tr>
                         
                      <?php } ?>

                  <tr><td class=text-center><?php echo $ro[8];?></td></tr>
                     
                  
                  <?php for($i=7;$i<24;$i++){?>
                  <tr><td class=text-center>
                      <?php if($var1[$i]!=""){ ?>
                      <span class="fa fa-check" style="font-size: 1em !important; font-weight: bolder !important;"></span>
                       
                      <?php }
                         else { ?>
                      <span class="fa fa-times" style="font-size: 1em !important; font-weight: bolder !important;"></span>
                      <?php } ?>
                    </td></tr>
                      <?php }?>
                  
                  <?php
     
                    }
                    
                      }
                      
                  ?>