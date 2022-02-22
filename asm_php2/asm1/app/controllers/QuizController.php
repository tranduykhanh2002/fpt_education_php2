<?php
namespace App\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Answer;
use App\Models\Subject;

class QuizController{
    public function index(){
        // 1. lấy id của môn học
        $sid = $_GET['id'];
        $_SESSION['subject_id'] = $sid;
        $subject = Subject::where(['id', '=', $sid])->first();
        $subjectQuizs = Quiz::where(['subject_id', '=', $subject->id])->get();
        include_once './app/views/quiz/index.php';
    }

    public function addForm(){
        $subjectId = $_GET['subjectId'];
        include_once './app/views/quiz/add-form.php';
    }

    public function saveAdd()
    {
        $subjectId = $_GET['subjectId'];
        $data = [
            'name' => $_POST['name'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'duration_minutes' => $_POST['duration_minutes'],
            'status' => isset($_POST['status']) ? 1 : 0,
            'is_shuffle' => isset($_POST['is_shuffle']) ? 1 : 0,
            'subject_id' => $subjectId
        ];
        $model = new Quiz();
        $quiz = $model->insert($data);
        header('location: ' . BASE_URL . 'quiz/cap-nhat?id=' . $quiz->id);
        die;
    }

    public function editForm(){
        $quizId = $_GET['id'];
        $_SESSION['quiz_id_info'] = $quizId;
        $quiz = Quiz::where(['id', '=', $quizId])->first();

        $questions = Question::where(['quiz_id', '=', $quiz->id])->get();
        include_once './app/views/quiz/edit-form.php';

    }
    public function removeQuiz(){
        $id = $_GET['id'];
        Quiz::destroy($id);
        header('location:' . BASE_URL . 'dashboard');
    }
    public function addQuestionAnswer(){
        $qid = $_GET['id'];
        $addQuestion = new Question();
        $addAnswer = new Answer();
        $arrQuestion = [
            'name' => $_POST['name'],
            'quiz_id' => $qid
        ];
        $addQuestion->insert($arrQuestion);
        $selectQuestion = Question::pushAnswer()->get();
        $answer1 = $_POST['answer1'];
        $answer2 = $_POST['answer2'];
        $answer3 = $_POST['answer3'];
        $answer4 = $_POST['answer4'];
        $arr4qs = [$answer1,$answer2,$answer3,$answer4];
        foreach($selectQuestion as $p => $key){
            for ($i=0; $i < count($arr4qs); $i++) { 
                $arrAnswer = [
                    'content' => $arr4qs[$i],
                    'question_id' => $key->id
                ];
                $addAnswer->insert($arrAnswer);
            }
            header('location:'.BASE_URL.'quiz/cap-nhat?id='.$qid);
            die;
        }
    }
}
?>