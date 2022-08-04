<?php
require_once 'model/Test.php';

class TestController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Test();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/test/index.php';
    }
    
    public function Nuevo(){
        $todo = new Test();
        $userId = $_REQUEST['id'];
        
        require_once 'view/header.php';
        require_once 'view/test/form.php';
        
    }

    public function Detalles(){
        $test = new Test();
        
        if(isset($_REQUEST['id'])){
            $test = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/test/usuarios-detalles.php';
    }

    public function Posts(){
        $posts = new Test();
        $userId = $_REQUEST['id'];

        if(isset($userId)){
            $posts = $this->model->ObtenerPosts($userId);
        }

        require_once 'view/header.php';
        require_once 'view/test/posts.php';
    }

    public function ToDos(){
        $todos = new Test();
        $userId = $_REQUEST['id'];

        if(isset($userId)){
            $todos = $this->model->ObtenerToDos($userId);
        }

        require_once 'view/header.php';
        require_once 'view/test/todos.php';
    }
    
    public function Guardar(){
        $menu = new Test();

        $title = $_REQUEST['title'];
        if (isset($_REQUEST['isCompleted'])) {
            $isCompleted = true;
        } else {
            $isCompleted = false;
        }
        $userId = $_REQUEST['userId'];

        $body = array(
            'title' => $title,
            'completed' => $isCompleted,
            'userId' => $userId
        );

        $menu = $this->model->Registrar($body);
    }
}