<?php
$name=$_POST['name'];
$fuel=$_POST['fuel'];
$mileage=$_POST['mileage'];
$email=$_POST['email'];
$pas=$_POST['pass'];
$mob=$_POST['mob'];
$add=$_POST['address'];
$vtype=$_POST['vtype'];
$v_name=$_POST['v_name'];
$var=$_POST['variant'];
$v_make=$_POST['v_make'];
$reg_no=$_POST['reg_no'];
$year_reg=$_POST['year_reg'];
$km=$_POST['km'];
$color=$_POST['color'];
$price=$_POST['price'];
$secquest=$_POST['secquest'];
$ans=$_POST['ans'];
$path1="fup/";
$fn1=$_FILES['img1']['name'];
$path1=$path1.rand().rand().$fn1;
move_uploaded_file($_FILES['img1']['tmp_name'],$path1);
$path2="fup/";
$fn2=$_FILES['img2']['name'];
$path2=$path2.rand().rand().$fn2;
move_uploaded_file($_FILES['img2']['tmp_name'],$path2);
$path3="fup/";
$fn3=$_FILES['img3']['name'];
$path3=$path3.rand().rand().$fn3;
move_uploaded_file($_FILES['img3']['tmp_name'],$path3);
$path4="fup/";
$fn4=$_FILES['img4']['name'];
$path4=$path4.rand().rand().$fn4;
move_uploaded_file($_FILES['img4']['tmp_name'],$path4);
$pathrc="fup/";
$fnrc=$_FILES['imgrc']['name'];
$pathrc=$pathrc.rand().rand().$fnrc;
move_uploaded_file($_FILES['imgrc']['tmp_name'],$pathrc);
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="insert into preown_reg values('','$name','$pas','$email','$mob','$add','$vtype','$v_name','$var','$v_make','$reg_no','$year_reg','$km','$color','$price','$secquest','$ans','$path1','$path2','$path3','$path4','$pathrc','$mileage','$fuel')";
$r=mysql_query($q);
if($r)
{   
    ?><script>
        alert("Please Login with your email id and password");
        window.location='home.php';
        </script>
    <?php
    
}
else
{
    ?><script>alert("The Registration is not done properly.Please try again...");
       window.location='pre_reg'</script>
    <?php
  
}
?>