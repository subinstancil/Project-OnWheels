<?php
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$add=$_POST['address'];
$dob=$_POST['dob'];
$gndr=$_POST['gndr'];
$mob=$_POST['mob'];
$secque=$_POST['secque'];
$ans=$_POST['answer'];

echo $user;
echo $email;
echo $pass;
echo $add;
echo $dob;
echo $gndr;
echo $mob;
echo $secque;
echo $ans;

mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="insert into user_reg values('$user','$add','$dob','$gndr','$mob','$secque','$ans','$email','$pass');";
$r= mysql_query($q);
if($r)
{
    ?>
    <script>
    alert("Go To Login For Logging In");
    window.location="home.php";
    </script>   
     <?php
}else
         {
         ?>
     <script>
          alert("Registration Failed Please Try Again");
          window.location="home.php";
     </script>
         <?php
          }

?>