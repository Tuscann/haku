<form method="POST" class="form-horizontal" enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Edit review</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Title</label>
            <div class="col-md-4">
                <span class="text-danger"><?php if (isset($this->validationErrors['title'])) echo $this->validationErrors['title']; ?></span>
                <input value="<?=$this->review['title']?>" id="title" name="title" type="text" class="form-control input-md">
                <span class="help-block">Edit title</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="video">Video</label>
            <div class="col-md-4">
                <span class="text-danger"><?php if (isset($this->validationErrors['video'])) echo $this->validationErrors['video']; ?></span>
                <input  value="<?=str_replace("embed/", "watch?v=", $this->review['video'])?>"  id="video" name="video" type="text" class="form-control input-md">
                <span class="help-block">Edit video url</span>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="content">Content</label>
            <div class="col-md-4">
                <span class="text-danger"><?php if (isset($this->validationErrors['content'])) echo $this->validationErrors['content']; ?></span>
                <textarea rows="4"  class="form-control" id="content" name="content"><?=$this->review['content']?></textarea>
                <span class="help-block">Edit content text</span>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gameplay">Gameplay</label>
            <div class="col-md-4">
                <span class="text-danger"><?php if (isset($this->validationErrors['gameplay'])) echo $this->validationErrors['gameplay']; ?></span>
                <textarea rows="4" class="form-control" id="gameplay" name="gameplay"><?=$this->review['gameplay']?></textarea>
                <span class="help-block">Edit gameplay text</span>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="review-pic">Review picture</label>
            <div class="col-md-4">
                <input id="review-pic" name="review-pic" class="input-file" type="file">
                <span class="help-block">Upload a new review picture</span>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <input type="submit" id="edit-review" name="edit-review" value="Edit review" class="btn btn-success">
                <input onclick="return confirm('Are you sure you want to delete this review?')" class="btn btn-danger" type="submit" name="delete-review" value="Delete review">
            </div>
        </div>

    </fieldset>
</form>