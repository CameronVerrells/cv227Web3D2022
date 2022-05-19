<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">

    <title>Homepage</title>
</head>
<body>

<!--Header-->
<?php
require('header.php');
$jsonData = json_decode($data,true);
?>
<div class="centreContainer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Hello Great Britain !!!</h2>
                <p class="whiteText">Founded in 1886 by pharmacist Dr John S Pemberton in Atlanta, Georgia, The Coca‑Cola Company is the
                    world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and
                    syrups, and produces nearly 400 brands.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/images/c1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/images/c2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/images/c3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < count($jsonData); $i++) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top img-fluid img-thumnail"
                                 src='../assets/images/<?php echo $jsonData[$i]['imageUrl'] ?>.jpg'
                        </a>
                        <div class="card-body">
                            <h3><?php echo $jsonData[$i]['brand'] ?></h3>
                            <p class="card-text"><?php echo $jsonData[$i]['description'] ?></p>
                            <a href='https://users.sussex.ac.uk/~cv227/3dapp/assignment/index.php/<?php echo $jsonData[$i]['imageUrl'] ?>'
                               class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
require('footer.php');
?>

<!-- Java Script Imports-->
<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/ed62ccedab.js" crossorigin="anonymous"></script>
</body>
</html>