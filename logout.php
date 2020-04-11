<?php
    session_start();
    $_SESSION['name']="";
    $_SESSION['yt']="";
    $_SESSION['add']="";
    echo "<script type=\"text/javascript\">";
    echo "alert(\"logout success\");";
   
    echo "</script>";
    
    header("Location:index.php");

