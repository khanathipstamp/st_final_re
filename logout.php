<?php
    session_start();
    $_SESSION['name']="";
    $_SESSION['yt']="";
    echo "<script type=\"text/javascript\">";
    echo "alert(\"logout success\");";
    echo "window.history.back();";
    echo "</script>";
    exit();
  

