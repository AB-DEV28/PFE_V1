<?php

//start a PHP session and include the functions.php file
session_start();
include 'functions.php';

//Assign the values received by POST method to variables
$title_question=$_POST['title_question'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$answer=$_POST['answer'];
$idQ=$_POST['idQ'];


//Create a connection to the database
$conn = connect();

//Insert values into quiz table using SQL query
$requette ="UPDATE question SET title_quiz='$title_quiz' ,quiz_duration='$desription_quiz' ,quiz_duration='$quiz_duration' WHERE id_quiz=$id_quiz";
$resultat =$conn->query($requette);

  if ($resultat) {
    header('location:../Layout/quizs.php?edidQ=ok');   //redirect to quiz page
  
} else {
  header('location:../Layout/logOut.php');    //redirect to logout page if insertion fails
}

?>