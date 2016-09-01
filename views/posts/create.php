<?php $this->title = 'Create New Post'; ?>
<script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
<h1><?=htmlspecialchars($this->title)?></h1>

<div class="new-post-block">
<form method="post">
    <h1 class="title-form">Title:</h1>
    <input type="text" name="post_title" value="" placeholder="Title" id="new-post-title" />
    <h1 class="title-form">Content:</h1>
    <textarea rows="10" name="post_content" class="content-field" type="text" id="content" ></textarea>
    <script type="text/javascript">CKEDITOR.replace('post_content')</script>
    <div><input class="button" type="submit" value="Create" />
        <a class="button" href="<?=APP_ROOT?>/posts">Cancel</a></div>
</form>
    </div>