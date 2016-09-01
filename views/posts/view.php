<?php $this->title = $this->post['title']; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<p>
    <i>Posted on</i>
    <?=htmlentities($this->post['date'])?>
    <i>by</i>
    <?=htmlentities($this->post['full_name'])?>
</p>
<p><?=$this->post['content']?></p>
<div><a class="button" href="<?=APP_ROOT?>/posts">Back</a></div>
