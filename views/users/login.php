<div class="container login-container">
    <div class="row">

        <div class="main">

            <h3>Please Log In, or <a href="<?=APP_ROOT?>/users/register">Sign Up</a></h3>
                <?php if (isset($this->validationErrors['inputUsernameEmail']))
                    echo '<div class="form-group col-lg-12 alert alert-danger text-center">
                <a class="close" data-dismiss="alert" onclick="closeError()">×</a>'
                        . $this->validationErrors['inputUsernameEmail'] . '</div>'; ?>

            <form role="form" method="POST" >
                <div class="form-group">
                    <label for="inputUsernameEmail">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsernameEmail" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword"
                           placeholder="Password">
                </div>

                <button type="submit" class="btn btn btn-success">
                </button>
            </form>
        </div>

    </div>

</div>