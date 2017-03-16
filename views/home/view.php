

<section id="one">
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i>
                        <?=htmlspecialchars($this->review['title'])?> Review <i class="fa fa-circle-o-notch"></i></h2>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary"><?= htmlspecialchars($this->review['title']) ?></h2>
                <p><strong>Posted on:</strong> <?= (new DateTime($this->review['date']))->format('d-M-Y') ?></p>
                <p><strong>Author: </strong><?=$this->review['username']?> </p>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <p class="osn"><?=htmlspecialchars($this->review['content'])?></p>
        <!-- Снимката да бъде от дясно на текста или както прецените че ще е по - добре визуализирана-->
        <img src="<?= APP_ROOT.$this->review['picture'] ?>"
             width="700px"/>
    </div>

    <!--HOME SECTION TAG LINE END-->
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">Gameplay </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    <?=htmlspecialchars($this->review['gameplay'])?>
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->
    </div>

    <div class="row">


        <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
            <div class="about-div">
                <i class="fa fa-youtube fa-4x icon-round-border"></i>
                <h3>Gameplay Trailer</h3>
                <hr>
                <p>
                    <iframe class="video" width="560" height="315" src="<?=$this->review['video']?>">
                    </iframe>

                </p>
            </div>
        </div>
    </div>
</section>

<section id="two">
    <div class="col-lg-4  col-md-4 col-sm-4 center-block" data-scroll-reveal="enter from the bottom after 0.5s">
        <div class="about-div">
            <i class="fa fa-photo fa-4x icon-round-border"></i>
            <h3>Photos of the game</h3>
            <hr>

            <div class="container">
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <img src="<?= APP_ROOT ?>/content/images/<?=$i?>.jpg" hspace="20" vspace="20" width="250" height="142"
                         alt="logo"/>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<section id="three">
    <hr>
    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
        <div class="about-div">
            <i class="fa fa-newspaper-o fa-4x icon-round-border"></i>
            <h3>Latest news</h3>
            <hr>
        </div>
    </div>

</section>

<?php

if ($this->user != NULL) { ?>
    <section class="comment-form">
        <div class="submit-comment-div">
            <form class="submit-comment" method="post" action="?id=44#comments">
                <div class="form-group">
                    <label for="comment">Submit a comment: </label><br>
                    <textarea class="form-control-comment" id="comment" name="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit-comment">Submit</button>
            </form>
        </div>
    </section>
<?php } else { ?>
    <section id="login-message">
        <div class="alert alert-warning text-center">
            Please <a href="<?= APP_ROOT ?>/users/login">Log In</a> to post comment.
        </div>
    </section>
<?php } ?>

<section id="four">
    <div class="container" id="comments">
        <div class="row">
            <div class="media-center">
                <h2 class="text-primary-media">Comments</h2>
                <hr>
                <?php foreach ($this->comments as $comment) : ?>
                    <div class="comment-container">
                        <p>
                            <img class="comment-pic" src="<?= $this->setImagePath($comment['profile_pic']) ?>"/>
                            <strong>
                                <a target="_blank"
                                   href="<?= APP_ROOT ?>/users/profile/<?= $comment['username'] ?>"><?= $comment['username'] ?></a>
                            </strong>
                            - <?= (new DateTime($comment['date']))->format('d-M-Y H:i') ?></p>
                        <p class="comment-content"><?= htmlspecialchars($comment['content']) ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>