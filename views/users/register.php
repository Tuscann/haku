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
                            unset($_SESSION['message']);
                        }

                        ?>
                    </div>
                <?php } ?>

                <div class="form-group col-lg-12">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" class="form-control" placeholder="Username">
                    <span class="text-danger"><?php if (isset($this->validationErrors['username'])) echo $this->validationErrors['username']; ?></span>

                </div>
                <div class="form-group col-lg-12">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                    <span class="text-danger"><?php if (isset($this->validationErrors['password'])) echo $this->validationErrors['password']; ?></span>
                </div>

                <div class="form-group col-lg-12">
                    <label for="confirm-password">Repeat Password</label>
                    <input id="confirm-password" type="password" name="confirm_password" class="form-control" id=""
                           placeholder="Repeat password">
                    <span class="text-danger"><?php if (isset($this->validationErrors['confirm-password'])) echo $this->validationErrors['confirm-password']; ?></span>
                </div>

                <div class="form-group col-lg-12">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" class="form-control" value="" placeholder="Email">
                    <span class="text-danger"><?php if (isset($this->validationErrors['email'])) echo $this->validationErrors['email']; ?></span>
                </div>

                <div class="form-group col-lg-12">
                    <label for="confirm-email">Repeat Email Address</label>
                    <input id="confirm-email" type="email" name="confirm_email" class="form-control" value="" placeholder="Repeat Email">
                    <span class="text-danger"><?php if (isset($this->validationErrors['confirm-email'])) echo $this->validationErrors['confirm-email']; ?></span>
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