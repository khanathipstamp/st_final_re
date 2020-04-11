
<?php
    error_reporting(E_ALL^E_NOTICE);
    require_once './connectdb.php';
    $file1 = $_FILES['upload1'];
    $place2place="img";
   
     foreach ($file1['tmp_name'] as $key=>$val){
        $filetemp = $file1['tmp_name'][$key];
        move_uploaded_file($filetemp, "$place2place/".$file1['name'][$key]);
        
        $con = new connectdb();
        $con->add1($file1['name'][$key]);
     }
?>
