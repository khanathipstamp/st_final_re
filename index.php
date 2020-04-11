<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TT FOOD</title>
        <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br>
        <div class="row">

            <div class="col-sm-9" align="center">
                <h4 style="color: gray">รายการ</h4>
            </div>
            <div class="col-sm-3" align="center">
                <h4 style="color: gray">โปรโมชั่น</h4>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-9"style="width: 50%;height: 500px">
                <div style="width: 100%;height: 100%">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/la.jpg" alt="Los Angeles" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="img/chicago.jpg" alt="Chicago" width="1100" height="500">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ny.jpg" alt="New York" width="1100" height="500">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" align="ledt"><img src="img/promotion.jpg" width="100%" height="100%">
            </div>
        </div>

    </body>
</html>
