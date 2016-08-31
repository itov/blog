<?php $this->title = $this->post['title']; ?>
<main>
<h1 class="title"><?=htmlspecialchars($this->title)?></h1>
<p class="subtitle">
    <i>Posted on</i>
    <?=htmlentities($this->post['date'])?>
    <i>by</i>
    <?=htmlentities($this->post['full_name'])?>
</p>
<p class="content"><?=$this->post['content']?></p>
    <div><a class="back" href="<?=APP_ROOT?>/home/posts">Back to posts</a></div>
</main>