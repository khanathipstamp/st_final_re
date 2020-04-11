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
        <br>
        <div align="center">
            <div class="card"  style="width: 20%">
                <div class="container">
                    <h2>Login</h2>

                    <form align="left" action="check.php" method='POST'>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Phone number:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter phone number" name="tel">

                        </div>
                        
                        <button type="submit" name="submit" value="Login" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>