
<?php
    error_reporting(E_ALL^E_NOTICE);
    require_once './connectdb.php';
    $file = $_FILES['upload'];
    $place2place="img";
    if($file['name'][0]!=""){
        foreach ($file['tmp_name'] as $key=>$val){
            $filetemp = $file['tmp_name'][$key];
            move_uploaded_file($filetemp, "$place2place/".$file['name'][$key]);

            $con = new connectdb();
            $con->add($file['name'][$key]);
         }
    }
    else{
        echo "<script type=\"text/javascript\">";
        echo "alert(\"โปรดเลือกไฟล์รูป\");";
        echo "</script>";
        header("Refresh:0; url=addFood.php");
    }
?>
