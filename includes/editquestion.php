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
$id_question=$_POST['id_question'];

//Create a connection to the database
$conn = connect();

//Insert values into quiz table using SQL query
$requette ="UPDATE question SET title_question='$title_question' ,ch1='$ch1' ,ch2='$ch2' ,ch3='$ch3' ,ch4='$ch4' ,answer='$answer' WHERE id_question=$id_question";
$resultat =$conn->query($requette);

  if ($resultat) {
    header('location:../includes/manageQuiz.php?idQ='.$idQ.'&edidQ=ok');   //redirect to quiz page
  
} else {
  header('location:../Layout/logOut.php');    //redirect to logout page if insertion fails
}

?>