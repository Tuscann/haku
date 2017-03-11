<div class="jumbotron">
    <div class="container">
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <h2>Latest reviews</h2>
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
    <div class="text-center more-reviews">
        <a class="btn btn-primary" href="#" role="button">Show more</a>
    </div>
    <h2>Latest news</h2>
    <hr>
</div>
