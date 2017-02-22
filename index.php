<?php include_once 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
</head>

<body>
<?php include_once 'navbar.php'; ?>

<div class="jumbotron">
    <div class="container">
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <h2>Latest reviews</h2><hr>
    <div class="row">
        <div class="col-md-4">
            <h2>Nioh review</h2>
            <img src="http://static5.gamespot.com/uploads/screen_small/1197/11970954/3192581-nioh-review-thumb.jpg" alt="1">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Fire emblem review</h2>
            <img src="http://static5.gamespot.com/uploads/screen_small/1575/15759911/3194673-3188686-screen%2Bshot%2B2017-01-30%2Bat%2B10.29.26%2Bpm.png" alt="1">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Divide review</h2>
            <img src="http://static3.gamespot.com/uploads/screen_small/1406/14063904/3195391-6802172942-divid.jpg" alt="1">
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Read more &raquo;</a></p>
        </div>
    </div>

    <hr>
    <footer>
        <p>&copy; 2017 Team Haku.</p>
    </footer>
</div> <!-- /container -->

<?php include_once 'footer.php' ?>