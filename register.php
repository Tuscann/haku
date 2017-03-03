<?php
include_once 'header.php';

if(isset($_SESSION['logged_in'])) {
    header("Location: index.php");
}

$_SESSION['message'] = "";
$error = false;

if (isset($_POST['sing_up'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

    $username = $_POST['username'];
    $email = $_POST['email'];
    $confirm_email = $_POST['confirm_email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //name can contain only alpha characters, digits, dash and underscore
    if (!preg_match("/^[a-zA-Z0-9_-]{5,}$/", $username)) {
        $error = true;
        $username_error = "Username must contain only alphabets and space";
    }
    // checking for valid email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error =  "Please enter valid email address";
    }

    if ($email != $confirm_email) {
        $error = true;
        $confirm_email_error = "Email and Confirm Email doesn't match";
    }
    // password can contain at least 6 characters
    if (strlen($password) < 6) {
        $error = true;
        $_SESSION['message'] = "Password must be minimum of 6 characters";
    }
    // check whether password matches with confirm password
    if ($password != $confirm_password) {
        $error = true;
        $confirm_password_error = "Password and Confirm Password doesn't match";
    }

    $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    //checking if users exists
    $query = $pdo->prepare("SELECT * FROM users WHERE email='$email'");
    $query->execute();
    $result = $query->fetch();

    if (!$error) {
        if ($result) {
            $_SESSION['message'] = 'User with this email already exists!';
        } else {
            $sql = "INSERT INTO users (username, email, password) "
                . "VALUES ('$username', '$email','$password_hash')";
            $user = $pdo->prepare($sql)->execute();
            var_dump(user);
            if ($pdo->prepare($sql)->execute()) {
                $_SESSION['logged_in'] = true;
                $_SESSION['message'] = 'You are successfully registered!';
                header('Location: index.php');
            } else {
                $_SESSION['message'] = 'Registration failed';
            }
        }
    } else {

    }


}
?>


    <div class="container login-container">
        <div class="row">
            <div class="main">
                <h3 class="dark-grey">Registration</h3>

                <form action="register.php" method="POST" name="sign_up">
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

                    <div class="form-group col-lg-12">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php if($error) echo $username; ?>" placeholder="Username">
                        <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="" placeholder="Password">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Repeat Password</label>
                        <input type="password" name="confirm_password" class="form-control" id=""
                               placeholder="Repeat password">
                        <span class="text-danger"><?php if (isset($confirm_password_error)) echo $confirm_password_error; ?></span>
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" value="" placeholder="Email">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Repeat Email Address</label>
                        <input type="email" name="confirm_email" class="form-control" value="" placeholder="Repeat Email">
                        <span class="text-danger"><?php if (isset($confirm_email_error)) echo $confirm_email_error; ?></span>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn btn-success" name="sing_up">
                            Register
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

<?php
include_once 'footer.php';

