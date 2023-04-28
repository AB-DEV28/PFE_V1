<?php
include '../includes/functions.php';
// Start session
session_start();


//if (!isset($_SESSION['email'])) {
//	header('location:singIn.php');
//}

//$idQ = $_GET['id'];



$titleQ = getTitleQuiz(14);
$questions = getAllQuestion(14);
$quiz = getQuizById(14);

print_r($quiz); 
?>

