<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <?php 
            session_start();
        ?>
        
      
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">

            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav ml-auto">
                    <a href="index.php" ><h1 style="color: black">TT FOOD</h1></a>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" >
                        <a href="addFood.php" ><h3  style="color: black"><?php echo $_SESSION['add'];?>   |</h3></a>
                    </li>
                    <li class="nav-item">
                        <h3>ชื่อ : <?php  echo $_SESSION['name'];?></h3>
                    </li>
                    <li class="nav-item">
                        <a  href="login.php" ><img src="img/rat.png" width="50" height="50"></a>
                    </li>
                    <li class="nav-item">
                        <a  href="register.php" ><img src="img/cat.png" width="50" height="50"></a>
                    </li>
                    <li class="nav-item" >
                        <a href="logout.php" ><h3  style="color: black"><?php echo $_SESSION['yt'];?></h3></a>
                    </li>
                </ul>
            </div>
        </nav>


    </body>
</html>