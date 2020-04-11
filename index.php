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
        <?php
            error_reporting(E_ALL^E_NOTICE);
            require_once './connectdb.php';
            $conn = new connectdb();
      
            if($conn->connect()){
                $sql = "select * from img";
                $sql2 = "select * from img2";
                $sql3 = "select * from img2";
                $objquery = mysqli_query($conn->connect(), $sql);      
                $objquery2 = mysqli_query($conn->connect(), $sql2); 
                $objquery3 = mysqli_query($conn->connect(), $sql3); 
            }
            
        ?>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <br>
        <div class="row">

            <div class="col-sm-9" align="center" >
                <h4 style="color: gray">รายการ</h4>
            </div>
            <div class="col-sm-3" align="center">
                <h4 style="color: gray">โปรโมชั่น</h4>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-9"style="width: 100%;height: 100%;">
                <div style="width: 100%;height: 100%;margin-left: 1%">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                          
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                             <?php 
                                while($objresult3= mysqli_fetch_array($objquery3))
                                {
                            ?> 
                            <li data-target="#demo" data-slide-to="<?php echo $objresult3["id"];?>"></li>
                            
                            <?php 
                                }
                            ?> 
                            
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner" style="width: 1000px;height: 500px;">
                            <div class="carousel-item active" style="width: 100%;height: 100%;">
                                <img src="img/promotion.jpg" alt="Chicago" >
                            </div>
                         
                            <?php 
                                while($objresult2= mysqli_fetch_array($objquery2))
                                {
                            ?> 
                        
                            <div class="carousel-item" style="width: 100%;height: 100%;">
                                <img src="img/<?php echo $objresult2["img"];?>" alt="Chicago" >
                            </div>
                          
                            <?php 
                                }
                            ?> 
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
            <div class="col-sm-3" align="ledt" style="width: 100%;height: 100%;padding-right: 2%">
                <?php 
                  while($objresult= mysqli_fetch_array($objquery))
                   {
                 ?> 
                <img src="img/<?php echo $objresult["name_img"];?>" width="100%" height="50%" style="margin-bottom: 5%">
         
                <?php 
                    }
                 ?> 
                
                
            </div>
        </div>

    </body>
</html>
