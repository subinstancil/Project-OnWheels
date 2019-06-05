<?php
$email=$_POST['email'];
$sub=$_POST['sub'];
$feedback=$_POST['feedback'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="insert into feedback values('$email','','$sub','$feedback')";
$r=  mysql_query($q);
if($r){
    ?><script>alert("DATA ADDED SUCCESSFULLY>>>");
         window.location="home.php";
       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED>>>PLEASE TRY AGAIN");
         window.location="home.php";
       </script>
       <?php
}
?>