<?php
 session_start();
 unset ($_SESSION['nick_act']); 
     header("location: index.php");
?>