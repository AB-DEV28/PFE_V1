<?php

//start a PHP session and include the functions.php file
session_start();
include 'functions.php';

//Assign the values received by POST method to variables
$title_quiz=$_POST['title_quiz'];
$desription_quiz=$_POST['desription_quiz'];
$quiz_duration=$_POST['quiz_duration'];
$situation_quiz=$_POST['situation_quiz'];
if ($situation_quiz == true) {
  $situation_quiz=1;
} else {
  $situation_quiz=0;
}

//Get the id of the user using PHP session variable
$id_user=$_SESSION['id_user'];

//Create a connection to the database
$conn = connect();

//Insert values into quiz table using SQL query
$requette ="INSERT INTO `quiz`(`id_user`,`title_quiz`, `quiz_description`,`quiz_duration`,`situation_quiz`) 
            VALUES('$id_user','$title_quiz','$desription_quiz','$quiz_duration','$situation_quiz')";
$resultat =$conn->query($requette);

//If insertion is successful, generate a unique URL for the quiz and update the row accordingly
if ($resultat) {
  $tmpID=$conn->lastInsertId();    //get the last inserted id
  $url_quiz=genURL($tmpID);        //generate a unique URL based on the id
  $requette ="UPDATE quiz SET url_quiz = '$url_quiz' WHERE id_quiz = '$tmpID'";
  $resultat =$conn->query($requette);
  if ($resultat) {
    header('location:../Layout/quizs.php?addQ=ok');   //redirect to quiz page
  }
} else {
  header('location:../Layout/logOut.php');    //redirect to logout page if insertion fails
}

?>