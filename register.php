<?php
include_once 'header.php';
require 'db_config.php';
$_SESSION['message'] = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $result = $pdo->prepare("SELECT * FROM users WHERE email='$email'")->execute();

    if ($result->num_rows > 0) {
        $_SESSION['message'] = 'User with this email already exists!';
//        header('Location: register.php');
    } else {
        $sql = "INSERT INTO users (username, email, password) "
            . "VALUES ('$username', '$email','$password')";

        if ($pdo->prepare($sql)->execute()) {
            $_SESSION['logged_in'] = true;
            $_SESSION['message'] = 'You are successfully registered!';
            header('Location: index.php');
        } else {
            $_SESSION['message'] = 'Registration failed';
        }
    }

}
?>


<div class="container login-container">
    <div class="row">
        <div class="main">
            <h3 class="dark-grey">Registration</h3>

            <form action="register.php" method="POST">
                <?php
                if (!empty($_SESSION['message'])) {
                    ?>
                    <div class="form-group col-lg-12 alert alert-danger text-center">
                        <a class="close" data-dismiss="alert" onclick="closeError()" >×</a>
                        <?php
                        if(isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        }

                        ?>
                    </div>
                <?php } ?>

                <div class="form-group col-lg-12">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" id="" placeholder="Username" >
                </div>

                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="Password">
                </div>

                <div class="form-group col-lg-12">
                    <label>Repeat Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="" placeholder="Repeat password">
                </div>

                <div class="form-group col-lg-12">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="Email">
                </div>

                <div class="form-group col-lg-12">
                    <label>Repeat Email Address</label>
                    <input type="email" name="confirm_email" class="form-control" id="" placeholder="Repeat Email">
                </div>
                <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn btn-success">
                        Register
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<?php
include_once 'footer.php';

