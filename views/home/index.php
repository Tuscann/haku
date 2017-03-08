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
    <div class="row">
        <?php foreach ($this->reviews as $review) : ?>
            <div class="col-md-4">
                <h2><?=htmlentities($review['title'])?></h2>
                <img class="review-pic" src="http://cdn.edgecast.steamstatic.com/steam/apps/292030/header.jpg?t=1479919850" alt="review-pic">
                <p><?=substr($review['content'], 0, 200)?></p>
                <p><?=  $review['date']?></p>
                <p><a class="btn btn-default" href="<?=APP_ROOT?>/home/view/<?=$review['id']?>" role="button">Read more &raquo;</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>