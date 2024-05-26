<?php

require_once 'config/Database.php';
require_once 'controllers/UserController.php';
require_once 'models/User.php';

$database = new Database('localhost', 'mvc', 'root', '');
$user = new User($database->pdo);
$controller = new UserController($user);

// Definir rutas
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
    switch ($action) {
        case 'edit':
            $controller->edit($id);
            break;
        case 'delete':
            $controller->delete($id);
            break;
        default:
            $controller->show($id);
    }
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            $controller->create();
            break;
        default:
            $controller->index();
    }
} else {
    $controller->index();
}
