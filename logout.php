<?php

session_start();
session_destroy();
?>
<script>
    alert("You Have Been Successfully Logged Out");
    window.location='home.php';
</script>