<?php
//Include the functions.php file
include "../includes/functions.php";
//Connect to the database using the connect function from functions.php
$conn = connect();
//Get the id, number of questions and answers of user post submission
$id_User = $_POST['id_User'];
$id_Q = $_POST['id_Q'];
$number_question = $_POST['number_question'];

//Create empty arrays for question IDs, answers and notes
$list_id_questions = array();
$list_answers = array();
$list_notes = array();
$note=0;
//Get the current date for data_passage
$data_passage=date("Y-m-d");

//For each question get their IDs, answers and check if they are correct
for ($i = 0; $i <= $number_question; $i++) {
    $list_id_questions[] = $_POST['Question_' . $i+1 . ''];
    $list_answers[] = $_POST['answer_Question_' . $i+1 . ''];
    //Make a query to check if the answer is present in the database
    $requette = "SELECT * FROM question WHERE id_question='$list_id_questions[$i]'AND answer='$list_answers[$i]'";
    $resultat = $conn->query($requette);

    //If the result is true set error to 0 else 1
    if ($resultat) {
        $er=0;
      }else {
        $er=1;
      }
    
    //fetch the answer and check if it is not empty. If note that the answer is correct
    $tmp_answer = $resultat->fetch();
    if (!empty($tmp_answer)) {
        $R = 1;
        $note=$note+1;
    } else {
        $R = 0;
        $note=$note-1;
    }
    //Store the status of the answer
    $list_notes[] = $R;
}

//For each question get the data and store it into the database
for ($i = 0; $i <= $number_question; $i++) {
    //Create a query to insert the answers of the user into the database
    //$requette = "INSERT INTO answers_users(id_user,id_question,answer,answer_case) VALUES('" . $id_User . "','" . $list_id_questions[$i] . "','" . $list_answers[$i] . "','" . $list_notes[$R] . "')";
    $requette = "INSERT INTO `answers_users` (`id_user`, `id_question`, `answer`, `answer_case`) VALUES('" . $id_User . "','" . $list_id_questions[$i] . "','" . $list_answers[$i] . "','" . $list_notes[$R] . "')";

    //If the result is true set error to 0 else 1
    $resultat = $conn->query($requette);
    if ($resultat) {
        $er=0;
      }else {
        $er=1;
      }
}
header('location:pessQuizTesting.php?id='.$id_Q.'&note='.$note.'');
//Insert the details of the user pass when all questions have been answered
// $requette = "INSERT INTO pass_quiz(id_user,id_quiz,date,note) VALUES('" . $id_User . "','" . $id_Q . "','" . $data_passage . "','" . $note . "')";

// //If the result is true set error to 0 else 1
// $resultat = $conn->query($requette);
// if ($resultat) {
//     $er=0;
//   }else {
//     $er=1;
//   }

//   //Check for errors and redirect accordingly 
//   if ($er) {
//     echo "pessage failed: " . $e->getMessage();
//   }else {
//     header('location:pessQuizTesting.php?id='.$id_Q.'&note='.$note.'');
//   }
?>
