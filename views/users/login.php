<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<div class="user-login-block">
<form method="post">
    <h1 class="title-form">Username: </h1>
    <input type="text" value="" placeholder="Enter Username" name="username" />
    <h1 class="title-form">Password: </h1>
    <input type="password" value="" placeholder="Enter password" name="password" />
    <div><input class="button" type="submit" value="Login"></div>
</form>
</div>