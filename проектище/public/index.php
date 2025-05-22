
<?php
require_once 'config/database.php';
require_once 'app/contollers/UserController.php';

$userController = new UserController($pdo);
$userController->index();
?>

