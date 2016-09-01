<?php $this->title = 'Create New Post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<div class="new-post-block">
<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" id="new-post-title" disabled value="<?=htmlspecialchars($this->post['title'])?>"/>
    <div>Content:</div>
    <textarea rows="10" name="post_content" class="content-field" disabled><?=htmlspecialchars($this->post['content'])?></textarea>
    <div><input class="button" type="submit" value="Delete" />
        <a class="button" href="<?=APP_ROOT?>/posts">Cancel</a></div>
</form>
</div>