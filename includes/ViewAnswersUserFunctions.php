<?php 
include '../includes/functions.php';
function getAnswersUser($id_ueser,$id_quiz){
    $conn = connect();
    $requette ="SELECT * FROM answers_users WHERE id_user='$id_ueser' AND id_quiz='$id_quiz'";
    $resultat =$conn->query($requette);
    $answers =$resultat->fetchAll();
    return $answers;
}
function getAnswersSlected($id_question,$id_ueser,$id_quiz){
    $AnswersUser=getAnswersUser($id_ueser,$id_quiz);
    foreach ($AnswersUser as $AnswerUser) {
        if ( $AnswerUser['id_question']==$id_question) {
            $AnswersSlected=$AnswerUser['answer'];
        }
    }
    return $AnswersSlected;
}
?>