<div class="container">
    <form class="post-review center-block" method="POST" enctype= "multipart/form-data">
        <div class="form-group">
            <label for="category">Select category</label>
            <select class="form-control" id="category" name="category">
                <option>PC</option>
                <option>PS4</option>
                <option>Xbox</option>
            </select>
        </div>
        <div class="form-group">
            <label for="game-select">Select game</label>
            <select class="form-control" id="game-select" name="game-select">
                <?php foreach ($this->games as $game) : ?>
                    <option value="<?=$game['id']?>"><?=$game['name']?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input value="<?php if (isset($_POST['title'])) {echo $_POST['title'];} ?>" type="text" class="form-control" name="title" id="title" placeholder="Enter review title">
            <span class="text-danger"><?php if (isset($this->validationErrors['title'])) echo $this->validationErrors['title']; ?></span>
        </div>

        <div class="form-group">
            <label for="video">Video</label>
            <input value="<?php if (isset($_POST['video'])) {echo $_POST['video'];} ?>" type="text" class="form-control" id="video" name="video" placeholder="Enter youtube url">
            <span class="text-danger"><?php if (isset($this->validationErrors['video'])) echo $this->validationErrors['video']; ?></span>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"><?php if (isset($_POST['content'])) {echo $_POST['content'];}?></textarea>
            <span class="text-danger"><?php if (isset($this->validationErrors['content'])) echo $this->validationErrors['content']; ?></span>
        </div>

        <div class="form-group">
            <label for="gameplay">Gameplay</label>
            <textarea class="form-control" id="gameplay" name="gameplay" rows="3"><?php if (isset($_POST['gameplay'])) {echo $_POST['gameplay'];} ?></textarea>
            <span class="text-danger"><?php if (isset($this->validationErrors['gameplay'])) echo $this->validationErrors['gameplay']; ?></span>
        </div>

        <div class="form-group">
            <label for="review-pic">Review picture upload</label>
            <input type="file" class="form-control-file" id="review-pic" name="review-pic" aria-describedby="fileHelp">
            <br><span class="text-danger"><?php if (isset($this->validationErrors['file'])) echo $this->validationErrors['file']; ?></span>
        </div>

        <button type="submit" name="submit-review" class="btn btn-primary">Submit</button>
    </form>
</div>