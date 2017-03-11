<?php
$categories = ['PC', 'Xbox', 'PS4'];
for ($i = 0; $i < count($categories); $i++) :?>
<div class="container">
    <!-- Example row of columns -->
    <h2><?=$categories[$i]?> reviews</h2>
    <hr>
    <div class="reviews-row">
        <?php foreach ($this->model->getReviews($categories[$i]) as $review) : ?>
            <div class="col-md-4 review">
                <img class="review-pic" src="<?=APP_ROOT.$review['picture']?>">
                <span class="notify-badge"><?=$categories[$i]?></span>
                <div class="review-content">
                    <div class="review-info">
                        <h3><a class="title" href="<?=APP_ROOT?>/home/view/<?=$review['id']?>"><?=htmlentities($review['title'])?></a></h3>
                        <p><?=(new DateTime($review['date']))->format('M d, Y')?></p>
                        <p><?=substr($review['content'], 0, 90)."..."?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center more-reviews">
            <a class="btn btn-primary" href="<?= APP_ROOT . "/reviews/" . $categories[$i]?>" role="button">Show more</a>
        </div>
        <?php endfor; ?>
    </div>
</div>