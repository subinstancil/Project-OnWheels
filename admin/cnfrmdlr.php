<?php
$stat=$_GET['st'];
$id=$_GET['id'];
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="update dealer_reg SET Status='$stat' where d_id='$id'";
$r=mysql_query($q);
if($r){
    ?><script>
    	alert("DATA Updated SUCCESSFULLY...");
         window.location="viewdealer.php";

       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED...PLEASE TRY AGAIN");
         window.location="viewdealer.php";
       </script>
        
        <?php
}
//echo $stat.$id;
?>