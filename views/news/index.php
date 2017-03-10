<section id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary"><?= htmlspecialchars($this->review['title'])?></h2>
                <p><strong>Posted on:</strong> <?=(new DateTime($this->review['date']))->format('d-M-Y')?></p>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <p class="osn"><?= htmlspecialchars($this->review['content'])?></p>
        <!-- Снимката да бъде от дясно на текста или както прецените че ще е по - добре визуализирана-->
        <img src="<?= APP_ROOT . $this->reviewImages[0]['path'] . "/" . $this->reviewImages[0]['name']?>.jpg" <?php array_splice($this->reviewImages, 0, 1);?> />
    </div>
</section>
