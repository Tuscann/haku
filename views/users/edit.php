<div class="container">
    <h1 class="text-center">Edit Profile</h1>
    <hr>

    <div class="row">
        <!-- left column -->
        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
            <div class="col-md-3">
                <div class="text-center">
                    <img src="<?= $this->setImagePath($this->user->getPicture()) ?>" class="avatar img-circle profile-pic" alt="avatar">
                    <h6>Upload a different photo...</h6>

                    <input type="file" name="profile_pic" />
                    <span class="text-danger"><?php if (isset($this->validationErrors['file'])) echo $this->validationErrors['file']; ?></span>
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Personal info</h3>

                <?php if (isset($this->validationErrors['inputPassword']))
                    echo '<div class="form-group col-lg-12 alert alert-danger text-center">
                <a class="close" data-dismiss="alert" onclick="closeError()">×</a>'
                        . $this->validationErrors['inputPassword'] . '</div>'; ?>


                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="<?= htmlspecialchars($this->user->getFirstName()) ?>"
                               name="first_name" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="<?= htmlspecialchars($this->user->getLastName()) ?>"
                               name="last_name" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="<?= htmlspecialchars($this->user->getEmail()) ?>" name="email"
                               type="email">
                        <span class="text-danger"><?php if (isset($this->validationErrors['email'])) echo $this->validationErrors['email']; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" value="<?= htmlspecialchars($this->user->getUsername()) ?>" name="username" type="text" disabled>
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Change password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="password" autocomplete="off"/>
                        <span class="text-danger"><?php if (isset($this->validationErrors['password'])) echo $this->validationErrors['password']; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="confirm_password">
                        <span class="text-danger"><?php if (isset($this->validationErrors['confirm-password'])) echo $this->validationErrors['confirm-password']; ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn btn-success">Save Changes</button>
                        <span></span>
                        <a class="btn btn-default" href="<?=APP_ROOT?>">Cancel</a>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>