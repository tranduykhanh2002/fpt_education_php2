<?php
namespace App\Controllers;

use App\Models\Subject;

class SubjectController{
    public function index(){
        $subjects = Subject::all();

        include_once "./app/views/mon-hoc/index.php";
    }

    public function addForm(){
        include_once "./app/views/mon-hoc/add-form.php";
    }

    public function editForm(){
        $id = $_GET['id'];
        $model = Subject::where(['id', '=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'dashboard');
            die;
        }
        include_once './app/views/mon-hoc/edit-form.php';
    }

    public function saveAdd(){
        $model = new Subject();
        $data = [
            'name' => $_POST['name'],
            'author_id' => $_SESSION['auth']['id']
        ];
        $model->insert($data);
        header('location: ' . BASE_URL . 'dashboard');
        die;
    }

    public function saveEdit(){
        $id = $_GET['id'];
        $model = Subject::where(['id', '=', $id])->first();
        if(!$model){
            header('location: ' . BASE_URL . 'dashboard');
            die;
        }

        $data = [
            'name' => $_POST['name']
        ];
        $model->update($data);
        header('location: ' . BASE_URL . 'dashboard');
        die;
    }

    public function remove(){
        $id = $_GET['id'];
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'dashboard');
        die;
    }
}
?>