                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Email</th>
                        <th></th>
                      </tr>

                      <?php 
                      if ($_POST['key']) {
                        
                      mysql_connect("localhost","root","");
                       mysql_select_db('car_trade');
                      $q="SELECT * FROM `user_reg` where name like '$_POST[key]%' OR email like '$_POST[key]%' ORDER BY `name` asc ";
                      $r=mysql_query($q);
                      $x=1;
                      while($ro=mysql_fetch_row($r))
                      {      
                      ?>  
                        <tr>
                          <td><?php echo $x; ?></td>
                          <td><?php echo $ro[0]; ?></td>
                          <td><?php echo $ro[1]; ?></td>
                          <td><?php echo $ro[2]; ?></td>
                          <td><input type="button" value="Delete" onclick="window.location.href='deluser.php?no=<?php echo $ro[2];?>'" class="btn btn-danger" /></td>
                        </tr>

               
                        <?php 
                        $x=$x+1;
                      }  


                    }
                    else {
                      mysql_connect("localhost","root","");
                     mysql_select_db('car_trade');
                      $q="select name,dob,email from user_reg order by name asc";
                      $r=mysql_query($q);
                      $x=1;
                      while($ro=mysql_fetch_row($r))
                      {      
                      ?>  
                        <tr>
                          <td><?php echo $x; ?></td>
                          <td><?php echo $ro[0]; ?></td>
                          <td><?php echo $ro[1]; ?></td>
                          <td><?php echo $ro[2]; ?></td>
                          <td><input type="button" value="Delete" onclick="window.location.href='deluser.php?no=<?php echo $ro[2];?>'" class="btn btn-danger" /></td>
                        </tr>

               
                   <?php 
                   $x=$x+1;
                   }   
                      
                    }
                      ?>

                      