<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="jsimg.js"></script>
        
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br>
        <div class="row">
            <div class="col"><div align="center">
                    <div class="card"  style="width: 50%">
                        <div class="container" align="left">

                            <h5 style="color: gray">เพิ่มเมนู</h5>
                            <form name="form2" method="post" action="file2.php" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="upload1[]" if="fileupload" multiple="multiple">
                                    
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block" onclick="return check()">เพิ่มเมนู</button>
                        </form>
                        </div>
                    </div>
                </div></div>
            <div class="col"><div class="card"  style="width: 50%">
                    <div class="container">

                        <h5 style="color: gray">เพิ่มโปรโมชั้น</h5>
                        <form name="form1" method="post" action="file.php" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="upload[]" if="fileupload" multiple="multiple">
                                    
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block" onclick="return check()">เพิ่มโปรโมชั้น</button>
                        </form>
                    </div>
                </div></div>
        </div>
