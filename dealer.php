<?php
$status="wait";
$man=$_POST['man'];
$d_name=$_POST['d_name'];
$d_reg=$_POST['d_reg'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$path="fup/";
$fn=$_FILES['emb']['name'];
$path=$path.rand().rand().$fn;
move_uploaded_file($_FILES['emb']['tmp_name'],$path);
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q="insert into dealer_reg values('','$d_name','$d_reg','$address','$phone','$pass','$email','$path','$status','$man')";
$r=mysql_query($q);
if($r){
    ?><script>alert("DATA ADDED SUCCESSFULLY>>>PLEASE LOGIN USING EMAIL AND PASSWORD");
         window.location="home.php";
       </script>
<?php } else { ?>
       <script>alert("DATA NOT ADDED>>>PLEASE TRY AGAIN");
         window.location="dealer_reg.php";
       </script>
       <?php
}
?>

