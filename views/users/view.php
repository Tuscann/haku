<div class="container">

    <img class="profile-pic center-block" src="<?=APP_ROOT."/".$this->user->getPicture()?>" alt="">
    <h2 class="profile-name text-center"><?=$this->user->getUsername()?></h2>
    <div>
        <a href="<?=APP_ROOT."/users/edit/".$this->user->getId()?>" class="edit-profile btn center-block">Edit profile</a>
    </div>
</div>
