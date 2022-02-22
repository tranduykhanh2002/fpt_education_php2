<?php
session_start();
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;
use App\Controllers\LoginController;
use App\Controllers\QuestionController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    //controllrt tai khoan
    case '/':
        $ctr = new LoginController();
        $ctr->loginForm();
        break;
    case 'luu-dang-nhap':
        $ctr = new LoginController();
        $ctr->postLogin();
        break;
    case 'dang-xuat':
        $ctr = new LoginController();
        $ctr->logout();
        break;
    case 'dang-ky':
        $ctr = new LoginController();
        $ctr->registerForm();
        break;
    case 'tao-tai-khoan':
        $ctr = new LoginController();
        $ctr->createAccount();
        break;
    //controller admin
    case 'dashboard':
        $ctr = new DashboardController();
        $ctr -> index();
        break;
    case 'mon-hoc':
        $ctr = new DashboardController();
        $ctr -> dashboardIndex();
        break;
    case 'mon-hoc/chi-tiet-mon-hoc':
        $ctr = new QuizController();
        $ctr->index();
        break;
    case 'mon-hoc/tao-moi':
        $ctr = new SubjectController();
        $ctr->addForm();
        break;
    case 'mon-hoc/luu-tao-moi':
        $ctr = new SubjectController();
        $ctr->saveAdd();
        break;
    case 'mon-hoc/cap-nhat':
        $ctr = new SubjectController();
        $ctr->editForm();
        break;
    case 'mon-hoc/luu-cap-nhat':
        $ctr = new SubjectController();
        $ctr->saveEdit();
        break;
    case 'mon-hoc/xoa':
        $ctr = new SubjectController();
        $ctr->remove();
        break;
    case 'mon-hoc/chi-tiet-admin':
        break;
    case 'quiz':
        $ctr = new QuizController();
        $ctr->index();
        break;
    case 'quiz/tao-moi':
        $ctr = new QuizController();
        $ctr->addForm();
        break;
    case 'quiz/save-add':
        $ctr = new QuizController();
        $ctr->saveAdd();
        break;
    case 'quiz/cap-nhat':
        $ctr = new QuizController();
        $ctr->editForm();
        break;
    case 'quiz/luu-cap-nhat':
        $ctr = new QuizController();
        $ctr -> addQuestionAnswer();
        break;
    case 'quiz/xoa':
        $ctr = new QuizController();
        $ctr->removeQuiz();
        break;
    case 'quiz/lam-bai':
        break;
    //controller question 
    case 'quiz/question/xoa':
        $ctr = new QuestionController();
        $ctr->removeQuestion();
        break;
    //controller student
    case 'trang-chu':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'mon-hoc/chi-tiet':
        $ctr = new HomeController();
        $ctr->detailSubject();
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>