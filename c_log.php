<?php
$e=$_POST['email'];
$p=$_POST['pass'];
// echo $e;
// echo $p;
$d=date("Y-m-d");
$t=date("h:i:s");
echo $d." ".$t;
mysql_connect("localhost","root","");
mysql_select_db("car_trade");
$q1="select email from user_reg where email='$e' and password='$p'";
$c1= mysql_query($q1);
$r1=mysql_num_rows($c1);
$q2="select email from dealer_reg where email='$e' and password='$p' and Status='Accept'";
$c2=  mysql_query($q2);
$r2= mysql_num_rows($c2);
$q3="select Email from adminlogin where Email='$e' and Password='$p'";
$c3=  mysql_query($q3);
$r3= mysql_num_rows($c3);
$q4="select email from preown_reg where email='$e' and pass='$p'";
$c4=  mysql_query($q4);
$r4= mysql_num_rows($c4);
session_start();
if($r1==1)
   {      while($r0=mysql_fetch_row($c1))
          { 
            $_SESSION['user']=$r0[0];
            header("location:user_menu.php");
            $q="insert into login values('','$e','$d','$t','User')";
            mysql_query($q);
          }
}
 
     
    elseif($r2==1)
   {
         while($r0=mysql_fetch_row($c2))
          {
            $_SESSION['manufacture']=$r0[0];
            header("location:dealer_menu.php");
            $q="insert into login values('','$e','$d','$t',Dealer)";
            mysql_query($q);
          }
  }
           
         elseif($r3==1)
          {
             while($r0=mysql_fetch_row($c3))
          {
             $_SESSION['admin']=$r0[0];
             header("location:admin/admin.php");
             $q="insert into login values('','$e','$d','$t',Admin)";
            mysql_query($q);
          }  
          }    
            
         elseif($r4==1)
          { while($r0=mysql_fetch_row($c4))
            {        
             $_SESSION['preown']=$r0[0];
             header("location:preownmenu.php");
             $q="insert into login values('','$e','$d','$t',Preown)";
            mysql_query($q);
            }
          }    
        else{
            ?><script>
               alert(" Email-Id or Password is Incorrect...");
              window.location='home.php';
             </script>
        <?php } ?>
