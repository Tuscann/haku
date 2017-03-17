<div class="">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?=APP_ROOT?>/content/images/carousel/banner1.png">
        </div>

        <div class="item">
            <img class="second-slide" src="<?=APP_ROOT?>/content/images/carousel/banner2.png" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="<?=APP_ROOT?>/content/images/carousel/banner3.png" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
</div>


<div class="container">
    <!-- Example row of columns -->
    <h1 class="text-center">Latest reviews</h1>
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
        <a class="btn btn-primary" href="<?=APP_ROOT?>/reviews/" role="button">Show more</a>
    </div>
</div>
