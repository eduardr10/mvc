<?php

class UserController {


    public function __construct(private User $user) {
    }

    public function index() {
        $users = $this->user->getAll();
        require_once 'views/users/index.php';
    }

    public function create() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            if ($this->user->create($name, $email, $age)) {
                header('Location: index.php');
            } else {
                echo 'Error al crear el usuario';
            }
        }
        require_once 'views/users/create.php';
    }

    public function edit($id) {
        $user = $this->user->getById($id);

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            if ($this->user->update($id, $name, $email, $age)) {
                header('Location: index.php');
            } else {
                echo 'Error al actualizar el usuario';
            }
        }

        require_once 'views/users/edit.php';
    }

    public function show($id) {
        $user = $this->user->getById($id);
        require_once 'views/users/show.php';
    }

    public function delete($id) {
        if ($this->user->delete($id)) {
            header('Location: index.php');
        } else {
            echo 'Error al eliminar el usuario';
        }
    }
}
