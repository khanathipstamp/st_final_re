
<?php
session_start();

class connectdb{
    public function connect (){
       $dbhost = "localhost";
       $dbuser="root";
       $dbpass="";
       $db = "db_st_final";
       $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or 
               die("Connect failed: %s\n". $conn->erro);
       mysqli_set_charset($conn, "utf8");
       return $conn;
    }
    public function select($email, $tel){
        $sql = "SELECT * FROM `user` WHERE email='".$email."' and tel='".$tel."'";
        $result = mysqli_query($this->connect(), $sql);
        if (mysqli_num_rows($result)!= 0){
            $row = mysqli_fetch_array($result);
            
            $_SESSION['email']=$row['email'];
            $_SESSION['tel']=$row['tel'];
            $_SESSION['name']=$row['name'];
            $_SESSION['yt']="Logout";
            header("Location:index.php");
            
             
        }else {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"รหัสผ่านหรือเบอร์โทรไม่ถูกต้อง\");";
            echo "window.history.back();";
            echo "</script>";
            exit();
        }
    }
    public function insert($email, $name,$lastname,$tel){
        $sql = "INSERT INTO `user`(`email`, `name`, `last_name`, `tel`) VALUES ('".$email."','".$name."','".$lastname."','".$tel."')";
       
        if (mysqli_query($this->connect(), $sql)){
            header("Location:login.php"); 
        } else {
            echo "username same";
            echo $sql;
        }
    }
    public function update($id,$name, $lname,$email,$age, $sex,$img, $status, $user, $pass){
        $sql = "UPDATE `member` SET `fname`='".$name."',`lname`='".$lname."',`email`='".$email."',`age`='".$age."',`sex`='".$sex."',`img`='".$img."',`status`='".$status."',`user`='".$user."',`pass`='".$pass."' WHERE id='$id'";
        if (mysqli_query($this->connect(), $sql)){   
            header("Location:table.php"); 
        } else {
            echo $sql;
        }
        
    }
    public function add($name, $lname,$email,$age, $sex,$img, $status, $user, $pass){
        $sql = "INSERT INTO `member`(`fname`, `lname`,`email`,`age`, `sex`,`img`, `status`, `user`, `pass`) VALUES ('".$name."','".$lname."','".$email."','".$age."','".$sex."','".$img."','".$status."','".$user."','".$pass."')";
       
        if (mysqli_query($this->connect(), $sql)){
            header("Location:table.php"); 
        } else {
            echo "username same";
            echo $sql;
            
        }
    }
    public function update1($id,$name, $lname,$email,$age, $sex,$img, $status, $user, $pass){
        $sql = "UPDATE `member` SET `fname`='".$name."',`lname`='".$lname."',`email`='".$email."',`age`='".$age."',`sex`='".$sex."',`img`='".$img."',`status`='".$status."',`user`='".$user."',`pass`='".$pass."' WHERE id='$id'";
        if (mysqli_query($this->connect(), $sql)){   
            header("Location:user.php"); 
        } else {
            echo $sql;
        }
        
    }
    
}

?>