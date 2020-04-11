<?php
require_once './ConnectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$email = $_POST['email'];
$tel = $_POST['tel'];
$con = new ConnectDB();
$con->checkuser($email, $tel);
?>
