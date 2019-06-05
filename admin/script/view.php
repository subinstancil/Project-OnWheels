<?php
for ($i=0; $i < $_POST["limit"] ; $i++) { 
  $name[$i]=$_POST["$i"];
  echo "$_POST[limit]";
}
$i=0;
for ($i=0; $i < $_POST["limit"] ; $i++) { 
 
echo "<div class=\"panel panel-default\">";
              echo "<div class=\"panel-heading main-color-bg\">";
                echo "<h3 class=\"panel-title\"> $name[$i]</h3>";
              echo "</div>";
              echo "<div class=\"panel-body\" style=\"overflow-y:scroll; height: 400px;\">";
                echo "<table class=\"table table-striped table-hover\">";
                  
                    
                    mysql_connect("localhost","root","");
                    mysql_select_db("vcs");
                    $sql = "SHOW COLUMNS FROM `$name[$i]`";
                    $result = mysql_query($sql);
                    $x=0;
                    echo "<tr>";
                    while($row = mysql_fetch_array($result)){
                    echo "<th>".$row['Field']."</th>";
                    $column[$x]=$row['Field'];
                    $x=$x+1;
                     }
                     echo "</tr>";
                     //$x=0;

                     $sql = "select * FROM `$name[$i]`";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result)){
                     echo "<tr>";
                     for ($i=0; $i < $x ; $i++) { 
                    
                     echo "<td>".$row[$column[$i]]."</td>";
                      }
                     echo "</tr>";
                     }
                    
    
                echo "</table>";
              echo "</div>";
              echo "</div>";

              }
?>