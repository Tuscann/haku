<div class="container profile" style="height: 490px">
        <img class="profile-pic center-block" src="<?=APP_ROOT."/".$this->userProfile->getPicture()?>" alt="">
        <h2 class="profile-name text-center"><?=$this->userProfile->getUsername()?></h2>
    <div class="span7 text-center">
        <?php if (isset($_SESSION['username'])) : ?>
        <?php if ($this->user->getId() == $this->userProfile->getId()): ?>
            <a href="<?=APP_ROOT."/users/edit/".$this->userProfile->getId()?>" class="edit-profile btn">Edit profile</a>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php