<?php $this->title = 'Edit Existing Post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<div class="new-post-block">
    <form method="post">
        <div>Name:</div>
        <input type="text" name="username" id="new-post-title" value="<?=htmlspecialchars($this->user['username'])?>"/>
        <div>Full name:</div>
        <input type="text" name="full_name" id="new-post-title" value="<?=htmlspecialchars($this->user['full_name'])?>"/>
        <div><input class="button" type="submit" value="Edit">
            <a class="button" href="<?=APP_ROOT?>/users">Cancel</a></div>
    </form>
</div>