<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= APP_ROOT ?>">Game reviews</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">PC</a></li>
                <li><a href="#">PS4</a></li>
                <li><a href="#">Xbox One</a></li>
                <li><a href="<?= APP_ROOT ?>">Reviews</a></li>
                <li><a href="<?= APP_ROOT ?>/news/">News</a></li>
            </ul>
            <?php
            if (empty($_SESSION['loggedIn'])) {
                ?>
                <ul class="nav navbar-nav navbar-right nav-auth">
                    <li>
                        <a href="<?= APP_ROOT ?>/users/login">Login</a>
                        <span class="separator">/</span>
                        <a href="<?= APP_ROOT ?>/users/register">Sing up</a>
                    </li>
                </ul>
            <?php } else {
                //
                ?>

                <ul class="nav navbar-nav navbar-right nav-auth user-dropdown">
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                                <span>
                                    Welcome,
                                    <strong>
                                        <?php echo $_SESSION['username'] ?>
                                    </strong>
                                    <?php
                                    $imagePath = APP_ROOT;
                                    if ($_SESSION['profile-pic'] != NULL) {
                                        $imagePath = $imagePath . $_SESSION['profile-pic'];
                                    } else {
                                        $imagePath = $imagePath . '/content/images/profile-pics/default.png';
                                    }
                                    ?>
                                     <img class="navbar-pic" src="<?= $imagePath ?>"
                                          alt="">
                                </span>
                                    <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="<?= APP_ROOT ?>/users/profile/<?= $_SESSION['username'] ?>">Profile</a>
                                </li>
                                <li><a href="<?= APP_ROOT ?>/users/logout">Log out</a></li>
                            </ul>

                    </li>
                </ul>


            <?php } ?>

        </div><!--/.navbar-collapse -->
    </div>
</nav>
