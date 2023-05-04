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
//upload image quiz
$img_Quiz = 0;
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image_quiz"]["name"]);

// Check if the file is a valid image
$check = getimagesize($_FILES["image_quiz"]["tmp_name"]);
if($check === false) {
    echo "Sorry, the file is not an image.";
} else {
    // Check if the file was uploaded successfully
    if (move_uploaded_file($_FILES["image_quiz"]["tmp_name"], $target_file)) {
        $img_Quiz = $_FILES["image_quiz"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//Get the id of the user using PHP session variable
$id_user = $_SESSION['id_user'];

//Create a connection to the database
$conn = connect();

//Insert values into quiz table using SQL query
$requete = "INSERT INTO `quiz`(`id_user`, `title_quiz`, `quiz_description`, `quiz_duration`, `situation_quiz`, `image`) 
            VALUES ('$id_user', '$title_quiz', '$description_quiz', '$quiz_duration', '$situation_quiz', '$img_Quiz')";
$resultat = $conn->query($requete);


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