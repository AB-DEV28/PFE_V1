<?php
include "../includes/functions.php";
$conn = connect();
$id_User = $_POST('id_User');
$id_Q = $_POST('id_Q');
$number_question = $_POST('number_question');
$list_id_questions = array();
$list_answers = array();
$list_notes = array();
$data_passage=date("Y-m-d");
for ($i = 0; $i <= $number_question; $i++) {
    $list_id_questions[] = $_POST('Question_' . $i . '');
    $list_answers[] = $_POST('answer_Question_' . $i . '');
    $requette = "SELECT * FROM question WHERE id_question='$list_id_questions[$i]'AND answer='$list_answers[$i]'";
    $resultat = $conn->query($requette);
    if ($resultat) {
        $er=0;
      }else {
        $er=1;
      }
    $tmp_answer = $resultat->fetch();
    if (!empty($tmp_answer)) {
        $R = 1;
        $note++;
    } else {
        $R = 0;
        $note--;
    }
    $list_notes[] = $R;
}
for ($i = 0; $i <= $number_question; $i++) {
    $requette = "INSERT INTO answers_users(id_user,id_question,answer,answer _case) VALUES('" . $id_User . "','" . $list_id_questions[$i] . "','" . $list_answers[$i] . "','" . $list_notes[$R] . "')";
    $resultat = $conn->query($requette);
    if ($resultat) {
        $er=0;
      }else {
        $er=1;
      }
}
$requette = "INSERT INTO pass_quiz(id_user,id_quiz,date,note) VALUES('" . $id_User . "','" . $id_Q . "','" . $data_passage . "','" . $note . "')";
    $resultat = $conn->query($requette);
    if ($resultat) {
        $er=0;
      }else {
        $er=1;
      }
      if ($er) {
        echo "pessage failed: " . $e->getMessage();
      }else {
        header('location:pessQuizTesting.php?note='.$note.'');
      }
?>