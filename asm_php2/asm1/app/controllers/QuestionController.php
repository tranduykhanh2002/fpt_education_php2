<?php
namespace App\Controllers;

use App\Models\Question;
class QuestionController{
    public function removeQuestion(){
        $qid = $_GET['id'];
        $quiz = Question::destroy($qid);
        header('location:'.BASE_URL.'quiz/cap-nhat?id=' . $_SESSION['quiz_id_info']);
    }
}
 ?>