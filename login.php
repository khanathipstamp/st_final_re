<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <?php
        require_once './ConnectDB.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $text = $_REQUEST['text'];
        echo "<CENTER>" . $text . "</CENTER>";
        ?>
        <?php
        require_once './ConnectDB.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $text = $_REQUEST['text'];
        session_start();
        session_destroy();
        ?>
        <br>
        <div align="center">
            <div class="card"  style="width: 20%">
                <div class="container">
                    <h2>Login</h2>
                    <form ACTION="Check.php"  name="formlogin" method="POST" id="login"  class="form-horizontal">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="tel">Password:</label>
                            <input type="tel" class="form-control" id="tel" placeholder="Enter tel" name="tel">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
