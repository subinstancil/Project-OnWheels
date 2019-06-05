<?php
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="insert into contactus_user values('','$name','$email','$sub','$msg')";
$r=mysql_query($q);
if($r)
   {
    ?>  <script> 
        alert("You will be contacted from us as soon  as possible");
         window.location("home.php");
         
     </script>
   <?php
   
   }
   else{?>
      <script>alert("Plesase enter the contact details");</script>
           <?php
   }
?>