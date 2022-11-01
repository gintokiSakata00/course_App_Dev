<?php
//logout
//destroy session and go to index.php location
    session_start(); 
    session_destroy(); 
    header("location: index.php"); 
    exit();
?>