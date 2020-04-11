
<?php
    error_reporting(E_ALL^E_NOTICE);
    require_once './connectdb.php';
    $file = $_FILES['upload'];
    $place2place="img";
    foreach ($file['tmp_name'] as $key=>$val){
        $filetemp = $file['tmp_name'][$key];
        move_uploaded_file($filetemp, "$place2place/".$file['name'][$key]);
        
        $con = new connectdb();
        $con->add($file['name'][$key]);
     }
     
?>
