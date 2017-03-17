<div class="container">
    <!-- Example row of columns -->
    <h1 class="text-center">PC reviews</h1>
    <hr>
    <div class="reviews-row">
        <?php foreach ($this->reviews as $review) : ?>
            <div class="col-md-4 review">
                <img class="review-pic" src="<?=APP_ROOT.$review['picture']?>">
                <span class="notify-badge"><?=$review['category']?></span>
                <div class="review-content">
                    <div class="review-info">
                        <h3><a class="title" href="<?=APP_ROOT?>/home/view/<?=$review['id']?>"><?=htmlentities($review['title'])?></a></h3>
                        <p><?=(new DateTime($review['date']))->format('M d, Y')?></p>
                        <p><?=substr($review['content'], 0, 84)."..."?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>