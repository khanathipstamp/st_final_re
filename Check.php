<?php
    error_reporting(E_ALL^E_NOTICE);
    require_once './connectdb.php';
    $file = $_FILES['upload'];
    $place2place="img";
    $img = $file['name'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $pswd = $_POST['pswd'];
    $submit = $_POST['submit'];
    move_uploaded_file($file['tmp_name'],"img/".$file['name']);
    if (strcmp($submit, "register")==0) {
        $con = new connectdb();
        $con->insert($email, $name,$lastname,$tel);
    }
    else if (strcmp($submit, "update")==0) {
        $con = new connectdb();
        $con->update($id,$name, $lname,$email,$age, $sex,$img, $status, $user, $pass);
    }
    else if (strcmp($submit, "แก้ไข")==0) {
        $con = new connectdb();
        $con->update1($id,$name, $lname,$email,$age, $sex,$img, $status, $user, $pass);
    }
    else if (strcmp($submit, "Login")==0){
        $con = new connectdb(); 
        $con->select($email, $tel);
    }
    else if (strcmp($submit, "logout")==0){
        header("Location:login.php"); 
    }
    else if (strcmp($submit, "เพิ่มข้อมูล")==0){
        header("Location:form.php"); 
    }
    else if (strcmp($submit, "เพิ่ม")==0){
        header("Location:form.php?s=2"); 
    }
    else if (strcmp($submit, "Add")==0){
        $con = new connectdb();
        $con->add($name, $lname,$email,$age, $sex,$img, $status, $user, $pass);
    }
    else if (strcmp($submit, "delete")==0){
       
        $con = new connectdb();
        for($i=0;$i< count($_POST["checkbox"]);$i++){
             $del =  $_POST["checkbox"][$i];
        $sql = "DELETE FROM member where id=".$del;
        if (mysqli_query($con->connect(), $sql)){
            header("Location:table.php");
        } else {
            echo "Error deleting record: " .$sql;
        }
    }
   }
?>
