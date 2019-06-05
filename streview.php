<?php
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$email=$_POST['email'];
$man=$_POST['man'];
$vh=$_POST['vh'];
$mod=$_POST['mod'];
$old=$_POST['old'];
$rcar=$_POST['rcar'];
$title=$_POST['title'];
$good=$_POST['good'];
$improve=$_POST['improve'];
$rmil=$_POST['rmil'];
$mcity=$_POST['mcity'];
$mhigh=$_POST['mhigh'];
$mcost=$_POST['mcost'];
$rext=$_POST['rext'];
$rextcon=$_POST['rextcon'];
$rint=$_POST['rint'];
$rintcon=$_POST['rintcon'];
$rride=$_POST['rride'];
$rridecon=$_POST['rridecon'];
$comments=$_POST['comments'];
$path1="fup/";
$fn1=$_FILES['imcar']['name'];
$path1=$path1.rand().rand().$fn1;
move_uploaded_file($_FILES['imcar']['tmp_name'],$path1);
$q="insert into review values('','$email','$man','$vh','$mod','$old','$rcar','$title','$good','$improve','$rmil','$mcity','$mhigh','$mcost','$rext','$rextcon','$rint','$rintcon','$rride','$rridecon','$comments','$path1')";
$r=mysql_query($q);
if($r){
    ?>  <script>alert("Review Uploaded Successfully"); window.location="user_menu.php";</script>
        <?php
}
else 
    {
    ?><script>alert("Review Not Uploaded Plz try again"); window.location="review_sel_car.php";</script> <?php
    }

?>