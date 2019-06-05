<?php
$im=$_GET['im'];
mysql_connect("localhost","root","");
mysql_select_db('car_trade');
$q="select imgrc from preown_reg where pr_id='$im'";
$r= mysql_query($q);
?>
<html>
    <head><title>VIEW RC</title>
    <script>
          function closeWin()
          {
               myWindow.close();
          }
        </script>
<link rel="shortcut icon" href="Image_Pro/prjct_logo.png"/>
    </head>
    <body>
        <?php while($ro=mysql_fetch_row($r)){
           ?>
               <center><img src="<?php echo $ro[0]; ?>" height="80%" width="40%"></center>
               <?php 
        }?>
        
        <br><br>
    <center><button onclick="self.close()">Close</button>
        
</center>
    </body>
</html>