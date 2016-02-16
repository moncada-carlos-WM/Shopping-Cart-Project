

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Roba | Wby</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Shop.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>


</head>
<body>




<form method="POST" name="login" style="text-align: center;" action="mycart.php">
    <input name="email"        type="text" placeholder="email">
    <input name="name_first"   type="text" placeholder="name_first">
    <input name="password"     type="text" placeholder="password">
    <input name="card_name"    type="text" placeholder="card_name">
    <input name="card_number"  type="text" placeholder="card_number">
    <input name="card_expdate" type="text" placeholder="card_expdate">
    <input name="card_security" type="text" placeholder="card_security">
    <button type="submit" class="" >Submit</button>




</body>


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
                    <button type="submit" class="btn btn-default" formtarget="_blank">Submit</button>
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

<body>


   <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div>
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="http://s1.cdn.autoevolution.com/images/testdrive2_chapters/nissan-gt-r-review-2015-1.jpg" alt="" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Nissan GTR</h3>
                    <p>This beauty of a car offers ...</p>
                </div>
            </div>

            <div class="item">
                <img src="http://o.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/750x422/quality/95/http://www.blogcdn.com/slideshows/images/slides/129/292/0/S1292920/slug/l/01-chevrolet-cheyenne-concept-sema-1.jpg" alt="Chania" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Chevrolet Cheyenne Concept</h3>
                    <p>Fast truck ...</p>
                </div>
            </div>

            <div class="item">
                <img src="http://img-2.gizmag.com/equusbass-5.jpg?auto=format&ch=Width%2CDPR&fit=max&h=700&q=60&w=700&s=447853b56371cb41a51e20f61c64aaa0" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Mustang</h3>
                    <p>Beauty of a car ...</p>
                </div>
            </div>

            <div class="item">
                <img src="http://www.sssupersports.com/wp-content/uploads/2014/05/top-5ive-most-expensive-cars-of-the-world-lamborghini-veneno.jpg" alt="Flower" width="460" height="345">
                <div class="carousel-caption">
                    <h3>Lamborghini Veneno</h3>
                    <p>One of the most expensive cars out ...</p>
                </div>
            </div>

        </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>





</html>
