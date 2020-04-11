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
                    <h2>register</h2>
                    <form align="left" action="check.php" method='POST'>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name">ขื่อ:</label>
                            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="lastname">นามสกุล:</label>
                            <input type="lastname" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="tel">เบอร์โทร:</label>
                            <input type="password" class="form-control" id="tel" placeholder="Enter tel" name="tel">
                        </div>
                       
                       
                        <button type="submit" name="submit" value="register" class="btn btn-primary btn-block">register</button>
                    </form>
                </div>
            </div>
        </div>
