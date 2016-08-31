<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <a href="<?=APP_ROOT?>"><img src="<?=APP_ROOT?>/content/images/site-logo.png"></a>
    <a class="single-menu-element-link" href="<?=APP_ROOT?>/"><span class="single-menu-element">Home</span></a>
    <?php if ($this->isLoggedIn) : ?>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/posts"><span class="single-menu-element">Posts</span></a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/posts/create"><span class="single-menu-element">Create Post</span></a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users"><span class="single-menu-element">Users</span></a>
    <?php else: ?>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/home/posts"><span class="single-menu-element">Posts</span></a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users/login"><span class="single-menu-element">Login</span></a>
        <a class="single-menu-element-link" href="<?=APP_ROOT?>/users/register"><span class="single-menu-element">Register</span></a>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
        <div id="logged-in-info">
            <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
            <form method="post" action="<?=APP_ROOT?>/users/logout">
                <input type="submit" value="Logout"/>
            </form>
        </div>
    <?php endif; ?>
</header>

<?php require_once('show-notify-messages.php'); ?>
