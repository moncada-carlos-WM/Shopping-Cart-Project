<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 2/3/16
 * Time: 4:53 PM
 */?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Roba | Wby</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ROBA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">My Cart</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Exotics.php">Exotic</a></li>
                        <li><a href="muscle.php">Muscle </a></li>
                        <li><a href="Sports.php">Sports</a></li>
                        <li><a href="new.php">New</a></li>
                        <li><a href="classics.php">Classics</a></li>
                        <li><a href="Trucks.php">Trucks</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>























<div id="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img style="height: 300px; width: 425px" src="https://chivethethrottle.files.wordpress.com/2010/09/classic-muscle-09_10_10-920-b-0.jpg"
                 alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
            <div class="caption">
                <h5> Corvette Stingray</h5>
                <p>$75,000</p>
                <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
            </div>
        </div>
    </div>
</div>


    <div id="second">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img style="height: 300px; width: 425px" src="http://www.newstalgiamotors.com/carsdb/server.aspx?c=getpic&uid=80&imageno=1"
                 alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
            <div class="caption">
                <h5>Chevrolet Chevelle SS</h5>
                <p>$60,000</p>
                <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
            </div>
        </div>
    </div>
</div
    <div id="third">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img style="height: 300px; width: 425px" src="https://www.hagerty.com/articles-videos/~/media/Images/Articles/2013/January/1969%20Ford%20Mustang%20Boss%20429.ashx"
                 alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
            <div class="caption">
                <h5> 1968 Ford Mustang </h5>
                <p>$45,000</p>
                <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
            </div>
        </div>
    </div>
</div

    <div id="fourth">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img style="height: 300px; width: 425px" src="http://gearcrave.com/wp-content/uploads/2011/03/1968_dodge_charger-pic-3601.jpeg"
                 alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
            <div class="caption">
                <h5> 1968 Dodge Charger R/T </h5>
                <p>$41,000</p>
                <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
            </div>
        </div>
    </div>

    <div id="fifth">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img style="height: 300px; width: 425px" src="http://i950.photobucket.com/albums/ad350/deescavy/cars/pic1_camaro.jpg"
                     alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
                <div class="caption">
                    <h5> 1978 Chevrolet Camaro Z28 </h5>
                    <p>$51,250</p>
                    <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
                </div>
            </div>
        </div>

        <div id="sixth">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img style="height: 300px; width: 425px" src="http://images.hemmings.com/wp-content/uploads//2011/05/1987BuickGNX_01_700.jpg"
                         alt="https://aviatorscustoms.files.wordpress.com/2012/05/mopar-muscle-cars_1600x1200.jpg">
                    <div class="caption">
                        <h5> 1987 Pontiac GNX </h5>
                        <p>$53,000</p>
                        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">More Details</a></p>
                    </div>
                </div>
            </div>

