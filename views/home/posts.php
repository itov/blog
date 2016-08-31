<?php $this->title = 'POSTS'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>
    <?php foreach($this->AllPostsView as $post) : ?>
        <ul class="news">
            <li>
                <h1 class="title"><?=htmlentities($post['title'])?></h1>
                <p class="subtitle"><i>Posted on</i>
                    <?=htmlentities($post['date'])?>
                    <i>by</i>
                    <?=htmlentities($post['full_name'])?>
                </p>
                <p class="content"><?= substr($post['content'], 0, 400).'...'?>
                    </p>
                <a class="readMore" href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">Read more</a></li>
        </ul>
            <?php endforeach ?>
</main>

