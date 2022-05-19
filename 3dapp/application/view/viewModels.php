<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel='stylesheet' type='text/css' href='../css/x3dom.css'>
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css">

    <title>Models</title>
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
                <h2>Online Product Viewer</h2>
                <p class="whiteText">Select a product below to view its 3D model</p>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <ul class="nav nav-tabs fullWidth" id="myTab" role="tablist">
                                <?php for ($i = 0; $i < count($jsonData); $i++) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="<?php echo $jsonData[$i]['brand']?>-tab" data-toggle="tab" href="#<?php echo $jsonData[$i]['brand'] ?>" role="tab" aria-controls="profile" aria-selected="false"><?php echo $jsonData[$i]['brand']?></a>
                                    </li>
                                <?php } ?>
                            </ul>

                            <div class="tab-content fullWidth" id="myTabContent">
                                <?php for ($i = 0; $i < count($jsonData); $i++) { ?>
                                    <div class="tab-pane fade" id="<?php echo $jsonData[$i]['brand']?>" role="tabpanel" aria-labelledby="<?php echo $jsonData[$i]['brand'] ?>-tab">
                                        <div class="row">
                                        <div class="model3D">
                                            <x3d class="model" id="<?php echo $jsonData[$i]['modelUrl']?>">
                                                <scene>
                                                    <inline nameSpaceName="<?php echo $jsonData[$i]['modelUrl']?>" mapDEFToID="true" onclick="animateModel('<?php echo $jsonData[$i]['modelUrl']?>');"
                                                            url='../assets/x3d/<?php echo $jsonData[$i]['modelUrl']?>.x3d'>
                                                    </inline>
                                                </scene>
                                            </x3d>
                                        </div>
                                            <p class="whiteText" style="font-size: 18px"><?php echo $jsonData[$i]['description']?></p>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card text-left">
                                                    <div class="card-body">
                                                        <div class="card-Title x3dCamera_Subtitle drinksText">
                                                            <h3>Camera Views</h3>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront('<?php echo $jsonData[$i]['modelUrl']?>');">Front</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop('<?php echo $jsonData[$i]['modelUrl']?>');">Top</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom('<?php echo $jsonData[$i]['modelUrl']?>');">Bottom</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack('<?php echo $jsonData[$i]['modelUrl']?>');">Back</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft('<?php echo $jsonData[$i]['modelUrl']?>');">Left</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight('<?php echo $jsonData[$i]['modelUrl']?>');">Right</a>
                                                        <div class="card-text x3dCameraDescription drinksText">
                                                            <p>These buttons select a limited range of X3D model viewpoints, use the
                                                                dropdown menu for more camera views</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column for the animation controls -->
                                            <div class="col-sm-4">
                                                <div class="card text-left">
                                                    <div class="card-body">
                                                        <div class="card-Title x3dAnimationSubtitle drinksText">
                                                            <h3>Animation Options</h3>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="spin('<?php echo $jsonData[$i]['modelUrl']?>');">Spin</a>
                                                        <a href="#" class="btn btn-danger btn-responsive" onclick="stopRotation('<?php echo $jsonData[$i]['modelUrl']?>');">Stop</a>
                                                        <div class="card-text x3dAnimationDescription drinksText">
                                                            <p>These buttons select a range of X3D animation options</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Column for the render type and lighting controls -->
                                            <div class="col-sm-4">
                                                <div class="card text-left">
                                                    <div class="card-body">
                                                        <div class="card-Title x3dRendersubtitle drinksText">
                                                            <h3>Render and Lighting Options</h3>
                                                        </div>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="wireframe('<?php echo $jsonData[$i]['modelUrl']?>');">Toggle Wireframe</a>
                                                        <a href="#" class="btn btn-primary btn-responsive" onclick="headlight('<?php echo $jsonData[$i]['modelUrl']?>');">Headlight</a>
                                                        <div class="card-text x3dRenderDescription drinksText">
                                                            <p>These buttons select a limited number of render and lighting options; use
                                                                the dropdown menus for more options</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-left">
                            <div class="card-header gallery-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-title title_gallery drinksText"></div>
                                <div class="gallery" id="gallery"></div>
                                <div class="card-text description_gallery drinksText"></div>
                            </div>
                        </div> <!-- End gallery card -->
                    </div> <!-- End gallery column -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
require('footer.php');
require('hook.php');
?>

<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/jquery.fancybox.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/modelInteractions.js"></script>
<script type='text/javascript' src='../js/x3dom.js'></script>
<script type="text/javascript" src="../js/gallery_generator.js"></script>

<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/ed62ccedab.js" crossorigin="anonymous"></script>
</body>
</html>