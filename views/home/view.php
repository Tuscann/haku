<section>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 text-center">
                <div class="center-block">
                    <?php if (isset($_SESSION['username'])) : ?>
                    <?php if ($this->review['username'] == $this->user->getUsername()) : ?>
                        <a href="<?=APP_ROOT."/reviews/edit/".$this->review['id']?>" class="edit-profile btn">Edit review</a>
                    <?php endif; ?>
                    <?php endif; ?>


                </div>
                <h2 class="text-primary"><?= htmlspecialchars($this->review['title']) ?></h2>

                <p><strong>Posted on:</strong> <?= (new DateTime($this->review['date']))->format('d-M-Y') ?></p>
                <p><strong>Author:  </strong><a target="_blank" href="<?=APP_ROOT."/users/view/".$this->review['username']?>"><?=$this->review['username']?></a> </p>
                <hr class="primary">

            </div>

        </div>
    </div>



</section>

<div class="container">
    <img class="view-main-pic center-block" src="<?= APP_ROOT.$this->review['picture'] ?>"/>
    <div class="text-center">
        <h1>Content</h1>
    </div>
    <div class="text-container">
        <?=htmlspecialchars($this->review['content'])?>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <h1>Gameplay </h1>
    </div>
    <div class="text-container">
        <?=htmlspecialchars($this->review['gameplay'])?>
    </div>
</div>

    <div class="row">
        <div class="text-center">
            <h1>Gameplay Trailer</h1>
        </div>
        <hr>
    </div>
    <iframe class="video center-block" width="560" height="315" src="<?=$this->review['video']?>">
    </iframe>
<hr>

            <h1 id="comments" class="text-center">Comments</h1>

<?php

if ($this->user != NULL) { ?>
        <div class="container">
            <form class="post-review center-block" method="post" action="?#comments">
                <div class="form-group">
                    <label for="comment">Submit a comment: </label><br>
                    <textarea class="form-control-comment" id="comment" name="comment" rows="3" cols="40"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit-comment">Submit</button>
            </form>
        </div>
<?php } else { ?>
    <section id="login-message">
        <div class="alert alert-warning text-center">
            Please <a href="<?= APP_ROOT ?>/users/login">Log In</a> to post comment.
        </div>
    </section>
<?php } ?>

<section id="four" >
    <div class="container" id="comments">
        <div class="row">
            <div class="media-center" >
                <hr>
                <?php foreach ($this->comments as $comment) : ?>

                    <div class="comment-container">
                        <div class="comment" id="<?=$comment['comment_id']?>">
                        <p>
                            <img class="comment-pic" src="<?= $this->setImagePath($comment['profile_pic']) ?>"/>
                            <strong>
                                <a target="_blank"
                                   href="<?= APP_ROOT ?>/users/view/<?= $comment['username'] ?>"><?= $comment['username'] ?></a>
                            </strong>
                            - <?= (new DateTime($comment['date']))->format('d-M-Y H:i') ?>
                            </div>
                        <p class="comment-content"><?= htmlspecialchars($comment['content']) ?></p>
                        <hr>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</section>