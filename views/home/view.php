<?php $this->title = $this->post['title']; ?>
<main>
<h3 class="title"><?=htmlspecialchars($this->title)?></h3>
<p class="subtitle">
    <i>Posted on</i>
    <?=htmlentities($this->post['date'])?>
    <i>by</i>
    <?=htmlentities($this->post['full_name'])?>
</p>
<p class="content"><?=$this->post['content']?></p>
</main>