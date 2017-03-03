<div class="container login-container">
    <div class="row">
        <div class="main">
            <h3 class="dark-grey">Registration</h3>

            <form method="POST" name="sign_up">
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
                    <input type="text" name="username" class="form-control" value="" placeholder="Username">
                    <span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
                </div>

                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
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
                    <button type="submit" class="btn btn btn-success" name="register">
                        Register
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>