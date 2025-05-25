<?php
class TaskController {
    private $db;
    private $task;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->task = new Task($this->db);
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch($action) {
            case 'create':
                $this->create();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            default:
                $this->list();
                break;
        }
    }

    private function create() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->task->title = $_POST['title'];
            $this->task->description = $_POST['description'];

            if($this->task->create()) {
                header("Location: index.php");
            }
        } else {
            include 'views/create.php';
        }
    }

    private function update() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->task->id = $_POST['id'];
            $this->task->title = $_POST['title'];
            $this->task->description = $_POST['description'];

            if($this->task->update()) {
                header("Location: index.php");
            }
        } else {
            $this->task->id = $_GET['id'];
            include 'views/update.php';
        }
    }

    private function delete() {
        if(isset($_GET['id'])) {
            $this->task->id = $_GET['id'];
            if($this->task->delete()) {
                header("Location: index.php");
            }
        }
    }

    private function list() {
        $stmt = $this->task->read();
        include 'views/list.php';
    }
} 