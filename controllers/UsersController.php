<?php

class UsersController extends BaseController
{
    public function register()
    {
		if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $full_name = $_POST['full_name'];
            if (strlen($username) <= 1) {
                $this->setValidationError("username", "Username invalid");
            }
            if (strlen($password) <= 1) {
                $this->setValidationError("password", "Password invalid");
            }
            if ($password != $password_confirm) {
                $this->setValidationError("password_confirm", "Password do not match.");
            }
            if ($this->formValid()) {
            $userId = $this->model->register(
                    $username, $password, $full_name);
                if ($userId !== false) {
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addInfoMessage("Registration successful.");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Error: Registration failed.");
                }
            }
        }
    }

    public function login()
    {
        if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userId = $this->model->login($username, $password);
            if ($userId !== false) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
                $this->addInfoMessage("Login successful.");
                $this->redirect("");
            } else {
                $this->addErrorMessage("Error: Login failed.");
            }
        }
        
    }

    public function logout()
    {
		session_destroy();
        $this->redirect("");
    }

    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    function delete(int $id) {
        if ($this->isPost) {
            if ($this->model->delete($id)) {
                $this->addInfoMessage("User deleted.");
            } else {
                $this->addErrorMessage("Error: cannot delete user.");
            }
            $this->redirect('users');
        }
        else {
            $user = $this->model->getById($id);
            if (! $user) {
                $this->addErrorMessage("Error: user does not exist.");
                $this->redirect("users");
            }
            $this->user = $user;
        }
    }

    function edit(int $id) {
        if ($this->isPost) {
            $username = $_POST['username'];
            if (strlen($username) < 1) {
                $this->setValidationError("username", "Username cannot be empty!");
            }
            $full_name = $_POST['full_name'];

            if ($this->formValid()) {
                if ($this->model->edit($id, $username, $full_name)) {
                    $this->addInfoMessage("User edited.");
                } else {
                    $this->addErrorMessage("Error: cannot edit user.");
                }
                $this->redirect('users');
            }
        }
        $user = $this->model->getById($id);
        if (! $user) {
            $this->addErrorMessage("Error: user does not exist.");
            $this->redirect("users");
        }
        $this->user = $user;
    }
}
