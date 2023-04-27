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
$answer=$_POST[$_POST['answer']];
$idQ=$_POST['idQ'];

//Create a connection to the database
$conn = connect();

//Insert values into quiz table using SQL query
$requette ="INSERT INTO `question`( `id_quiz`,`title_question`,`ch1`, `ch2`, `ch3`, `ch4`, `answer`) 
         VALUES('$idQ','$title_question','$ch1','$ch2','$ch3','$ch4','$answer')";
$resultat =$conn->query($requette);


  if ($resultat) {
   // header('location:manageQuiz.php?addQuestion=ok&idQ='.$idQ);   //redirect to quiz page
   header('Location: manageQuiz.php?addQuestion=ok&idQ='.$idQ.'');

  }
else {
  header('location:../Layout/logOut.php');    //redirect to logout page if insertion fails
}

?>