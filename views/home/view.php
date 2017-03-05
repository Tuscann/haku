<h1><?=htmlspecialchars($this->review['title'])?></h1>
<p><strong>Posted on:</strong> <?=(new DateTime($this->review['date']))->format('d-M-Y')?></p>
<p><?=$this->review['content']?></p>
