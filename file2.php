
<?php
    error_reporting(E_ALL^E_NOTICE);
    require_once './connectdb.php';
    $file1 = $_FILES['upload1'];
    $place2place="img";
    if($file1['name'][0]!=""){
        foreach ($file1['tmp_name'] as $key=>$val){
           $filetemp = $file1['tmp_name'][$key];
           move_uploaded_file($filetemp, "$place2place/".$file1['name'][$key]);

           $con = new connectdb();
           $con->add1($file1['name'][$key]);
        }
    }
    else{
        echo "<script type=\"text/javascript\">";
        echo "alert(\"โปรดเลือกไฟล์รูป\");";
        echo "</script>";
        header("Refresh:0; url=addFood.php");
    }
?>
