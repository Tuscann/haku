<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group" id="adv-search">
                <input type="text" name="title" id="title"  class="form-control" placeholder="Search for reviews" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button  class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">

                                <form method="POST" class="form-horizontal" role="form" action="<?=APP_ROOT?>/reviews/search/">
                                    <div class="form-group">
                                        <label for="category-filter">Filter by category</label>
                                        <select name="category-filter" id="category-filter" class="form-control">
                                            <option value="All">All</option>
                                            <option value="PC" <?=isset($_POST['category-filter']) ? ($_POST['category-filter'] == "PC") : "" ? "selected" : ""?>>
                                                PC
                                            </option>
                                            <option value="PS4" <?=isset($_POST['category-filter']) ? ($_POST['category-filter'] == "PS4") : "" ? "selected" : ""?>>
                                                PS4
                                            </option>
                                            <option value="Xbox" <?=isset($_POST['category-filter']) ? ($_POST['category-filter'] == "Xbox") : "" ? "selected" : ""?>>
                                                Xbox
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="game-filter">Filter by game</label>
                                        <select name="game-filter" id="game-filter" class="form-control">
                                            <option value="All">All</option>
                                            <?php foreach ($this->games as $game) : ?>
                                                <option value="<?=$game['name']?>" <?=($_POST['category-filter'] == $game['name']) ? "selected" : ""?>>
                                                    <?=$game['name']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="order-filter">Order by</label>
                                        <select name="order-filter" id="order-filter" class="form-control">
                                            <option value="dateDESC" <?=isset($_POST['order-filter']) ? ($_POST['order-filter'] == "dateDESC") : "" ? "selected" : ""?>>Newest</option>
                                            <option value="dateASC" <?=($_POST['order-filter'] == "dateASC") ? "selected" : ""?>>Oldest</option>
                                            <option value="title" <?=($_POST['order-filter'] == "title") ? "selected" : ""?>>Title</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input id="author" name="author" class="form-control" type="text" value="<?php if (isset($_POST['author'])){ echo $_POST['author']; }?>"/>
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
<div class="container">
    <div class="container">
        <!-- Example row of columns -->
        <h1 class="text-center"><?=count($this->reviews) . " "?>Results</h1>
        <hr>
<div class="reviews-row">
    <?php if ($this->reviews) : ?>
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
    <?php endif;
    if (!$this->reviews) echo "<h2 class='text-center'>No results founds.</h2>" ?>
</div>
</div>