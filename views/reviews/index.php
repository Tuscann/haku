<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" name="title" id="title"  class="form-control" placeholder="Search for reviews" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="submit" id="title-search" name="title-search" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">

                                <form method="POST" class="form-horizontal" role="form" action="<?=APP_ROOT?>/reviews/search/">
                                    <div class="form-group">
                                        <label for="category-filter">Filter by category</label>
                                        <select name="category-filter" id="category-filter" class="form-control">
                                            <option value="All" selected>All</option>
                                            <option value="PC">PC</option>
                                            <option value="PS4">PS4</option>
                                            <option value="Xbox">Xbox</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="game-filter">Filter by game</label>
                                        <select name="game-filter" id="game-filter" class="form-control">
                                            <option value="All" selected>All</option>
                                            <?php foreach ($this->games as $game) : ?>
                                                <option value="<?=$game['name']?>"><?=$game['name']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input id="author" name="author" class="form-control" type="text" />
                                    </div>

                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

                                </form>
                            </div>
                        </div>
                        <button type="submit" name="submit-search" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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