<?php
// Include the functions file to connect to the database and perform other functions
include "../includes/functions.php";

// Connect to the database
$conn = connect();

// Get user ID, quiz ID and number of questions from form using POST method
$id_User = $_POST['id_User'];
$id_Q = $_POST['id_Q'];
$number_question = $_POST['number_question'];
$list_id_answers = array();
// Initialize variables for note (score) and date of quiz passage
$note=0;
$data_passage=date("Y-m-d");

// Loop through each question in the quiz
for ($i = 0; $i <$number_question; $i++) {
    // Get the ID of the current question and answer selected by the user from the form
    $id_questions=$_POST['Question_' . $i . ''];
    $answers=$_POST['answer_Question_' . $i . ''];
    
    // Retrieve the correct answer for the current question from the database
    $requette = "SELECT answer FROM question WHERE id_question='$id_questions'";
    $resultat = $conn->query($requette);
    
    // Check if the SQL query executed successfully or not
    if ($resultat) {
        $er=0;
    } else {
        $er=1;
    }
    
    // Fetch the result of the SQL query and compare it with the selected answer
    $tmp_answer = $resultat->fetch();
    if (!empty($tmp_answer) && $tmp_answer[0] == $answers) {
        $answer_case = 1;
        $note=$note+1;
    } else {
        if (empty($tmp_answer)) {
            $er=1;
        } else {
            $answer_case = 0;
           // $note=$note-1;
        }
    }
    
    // Insert the user's answer for the current question into the database
    $requette2 = "INSERT INTO `answers_users`(`id_user`,`id_quiz`, `id_question`, `answer`, `answer_case`) 
         VALUES('" . $id_User . "','" . $id_Q . "','" . $id_questions. "','" . $answers. "','" . $answer_case . "')";
         
         // Check if the SQL query executed successfully or not
         $resultat2 = $conn->query($requette2);
         if ($resultat2) {
            $er=0;
        } else {
            $er=1;
        }
        $list_id_answers[$i]=$conn->lastInsertId();
}

// Insert the user's quiz result (including ID, quiz ID, score and date) into the database
$requette = "INSERT INTO `pass_quiz`(`id_user`,`id_quiz`,`date`,`note`) 
 VALUES('" . $id_User . "','" . $id_Q . "','" . $data_passage . "','" . $note . "')";

// Check if the SQL query executed successfully or not
$resultat = $conn->query($requette);
if ($resultat) {
    $er=0;
} else {
    $er=1;
}
$id_pass_tmp=$conn->lastInsertId();
for ($i = 0; $i <$number_question; $i++) {
    $requette3 ="UPDATE `answers_users` SET id_pass_quiz='$id_pass_tmp' WHERE id_answer_user=$list_id_answers[$i]";
    $resultat3 =$conn->query($requette3);
}
// Check if there were any errors during the process and display an error message accordingly
if ($er) {
    echo "pessage failed: " . $e->getMessage();
} else {
    // Redirect the user to a page showing their quiz results
    //header('location:../Layout/passQuiz.php?id='.$id_Q.'&note='.$note.'');
    header('location:../includes/ViewAnswersUser.php?id_Quiz=' . $id_Q . '&id_user='.$id_User.'&id_passQuiz='.$id_pass_tmp.'');
}
?>

