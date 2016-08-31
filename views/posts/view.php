<?php $this->title = 'Post View'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<p>
    <i>Posted on</i>
    <?=htmlentities($this->post['date'])?>
    <i>by</i>
    <?=htmlentities($this->post['full_name'])?>
</p>
<p><?=$this->post['content']?></p>
<div><a href="<?=APP_ROOT?>/posts">[Back]</a></div>
