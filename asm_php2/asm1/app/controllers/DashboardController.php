<?php
namespace App\Controllers;
use App\Models\Subject;
class DashboardController{
    public function index(){
        include_once "./app/views/home/Homepage.php";
    }
    public function dashboardIndex(){
        $subject = new Subject();
        $qr1 = 'users.name AS name_user, subjects.name, subjects.id';
        $qr2 = 'users';
        $qr3 = 'subjects.author_id= users.id';
        $subject = Subject::selectJoin($qr1,$qr2,$qr3)->execute2();
        include_once "./app/views/home/index.php";
        // $sql = "SELECT subjects.id, quizs.id_subject FROM subjects INNER JOIN quizs WHERE subjects.id = quizs.id_subject";
    }
}
?>