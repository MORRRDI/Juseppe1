<?php
require_once 'config/Database.php';
require_once 'models/Task.php';
require_once 'controllers/TaskController.php';

$controller = new TaskController();
$controller->handleRequest(); 