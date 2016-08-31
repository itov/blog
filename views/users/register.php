<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<div class="user-login-block">
<form method="post">
<<<<<<< HEAD
    <h1 class="title-form">Username: </h1>
    <input type="text" value="" placeholder="Enter Username" name="username" required />
    <h1 class="title-form">Password: </h1>
    <input type="password" value="" placeholder="Enter password" name="password" required />
    <h1 class="title-form">Confirm password: </h1>
    <input type="password" value="" placeholder="Confirm password" name="password_confirm" required />
    <h1 class="title-form">Full name: </h1>
    <input type="text" placeholder="Enter full name" name="full_name" />
=======
    <div>Username: 
        <input type="text" name="username" required /></div>
    <div>Password: 
        <input type="password" name="password" required /></div>
    <div>Password Confirm: 
        <input type="password" name="password_confirm" required /></div>
    <div>Full name: 
        <input type="text" name="full_name" /></div>
>>>>>>> origin/master
    <div><input class="button" type="submit" value="Register"></div>
</form>
</div>