<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">

    <title>About</title>
</head>
<body>

<!--Header-->
<?php
require('header.php');
?>

<div class="centreContainer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-left pad">
                    <div class="text-pad">
                        <h3>Github Link</h3>
                        <p></p>
                    </div>
                </div>

                <div class="card text-left pad">
                    <div class="text-pad">
                        <h3>Statement of Originality</h3>
                        <p>This website is published as a submission for the Web3D module for the degree of Computer Science and Artificial Intelligence at the University of Sussex. Its contents can be freely copied and distributed provided the source is acknowledged</p>
                    </div>
                </div>

                <div class="card text-left pad">
                    <div class="text-pad">
                        <h3>Technologies used</h3>
                        <ul>
                            <li>VRML converted to X3DOM</li>
                            <li>jQuery</li>
                            <li>FancyBox</li>
                            <li>Bootstrap 4</li>
                            <li>JavaScript</li>
                            <li>CSS & Html</li>
                            <li>PDO & SQL Lite</li>
                            <li>Popper</li>
                        </ul>
                    </div>
                </div>

                <div class="card text-left pad">
                    <div class="text-pad">
                        <h3>Deeper Understanding</h3>
                        <ul>
                            <li>3 Can models created in 3DS Max and exported into VRML and converted to X3D</li>
                            <li>A Costa cup created in Blender and exported into X3D</li>
                            <li>Javascript interactions for multiple camera angles, wireframe toggle and headlight</li>
                            <li>Can models support the spin button</li>
                            <li>HQ renders shown in the gallery</li>
                            <li>Gallery is populated using AJAX and jQuery with the fancybox gallery.</li>
                            <li>Brand names, descriptions, model urls and image urls are collected from the SQL lite database using PDO</li>
                            <li>The MVC framework is used to pass data to views</li>
                            <li>HTML, CSS & Bootsrap are used to create a responsive web UI</li>
                            <li>Data is passed from the backend to the front end in JSON format</li>
                        </ul>
                    </div>
                </div>
            </div>
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