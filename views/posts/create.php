<?php $this->title = 'Create New Post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" />
    <div>Content:</div>
    <textarea rows="10" name="post_content"></textarea>
    <div><input class="button" type="submit" value="Create" />
        <a class="button" href="<?=APP_ROOT?>/posts">Cancel</a></div>
</form>