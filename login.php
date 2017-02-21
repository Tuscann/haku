<?php

include_once 'header.php';
require 'db_config.php';
$_SESSION['message'] = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $query = $pdo->prepare("SELECT * FROM users WHERE username='$username'");
    $query->execute();

    if ($query->rowCount() == 0) { // User doesn't exist
        $_SESSION['message'] = "User with that username doesn't exist!";
//        header("location: login.php");
    } else { // User exists
        $user = $query->fetch();
        if (password_verify($_POST['password'], $user['password'])) {

            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];
//            $_SESSION['active'] = $user['active'];

            // This is how we'll know the user is logged in
            $_SESSION['logged_in'] = true;
            $_SESSION['message'] = 'You are logged in!';
            header("Location: index.php");
        } else {
            $_SESSION['message'] = "You have entered wrong password, try again!";
//            header("location: login.php");
        }
    }
}

?>

    <div class="container login-container">
        <div class="row">

            <div class="main">

                <h3>Please Log In, or <a href="register.php">Sign Up</a></h3>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="#" class="btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="fa fa-facebook"></i></span></a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="#" class="btn btn-lg btn-danger btn-block"><span class="btn-label"><i
                                        class="fa fa-google-plus"></i></span></a>
                    </div>
                </div>
                <div class="login-or">
                    <hr class="hr-or">
                    <span class="span-or">or</span>
                </div>

                <form role="form" method="POST" action="login.php">
                    <div class="form-group">
                        <label for="inputUsernameEmail">Username</label>
                        <input type="text" name="username" class="form-control" id="inputUsernameEmail"
                               placeholder="Username">
                    </div>
                    <div class="form-group">
                        <a class="pull-right" href="#">Forgot password?</a>
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword"
                               placeholder="Password">
                    </div>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox">
                            Remember me </label>
                    </div>
                    <button type="submit" class="btn btn btn-success">
                        Log In
                    </button>
                </form>
                <?php
                if (!empty($_SESSION['message'])) {
                    ?>
                    <div class="form-group col-lg-12 alert alert-danger text-center">
                        <a class="close" data-dismiss="alert" onclick="closeError()">×</a>
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>

        </div>
        <script src="js/functions.js"></script>
    </div>

<?php
include_once 'footer.php';