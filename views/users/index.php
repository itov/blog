<?php $this->title = 'Users'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table class="new-post-block">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($this->users as $user) : ?>
    <tr>
        <td><?=$user['id']?></td>
        <td><?=htmlspecialchars($user['username'])?></td>
        <td><?=htmlspecialchars($user['full_name'])?></td>
        <td><a href="<?=APP_ROOT?>/users/edit/<?=htmlspecialchars($user['id'])?>">[Edit]</a>
        <a href="<?=APP_ROOT?>/users/delete/<?=htmlspecialchars($user['id'])?>">[Delete]</a></td>
    </tr>
    <?php endforeach ?>
</table>