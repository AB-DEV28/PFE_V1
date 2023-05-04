<?php

//start a PHP session and include the functions.php file
session_start();
include 'functions.php';

//Assign the values received by POST method to variables
$title_quiz=$_POST['title_quiz'];
$desription_quiz=$_POST['desription_quiz'];
$quiz_duration=$_POST['quiz_duration'];
$id_quiz=$_POST['idQ'];
$situation_quiz=0;

if (isset($_POST['situation_quiz'])) {
  $situation_quiz=1;
}

//upload image quiz
$img_Quiz = 0;
$target_dir = "../images/";

if(isset($_FILES["image_quiz"]) && !empty($_FILES["image_quiz"]["tmp_name"])) {
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
}

//Create a connection to the database
$conn = connect();

//Update values in quiz table using SQL query
$requete ="UPDATE quiz SET title_quiz='$title_quiz', quiz_description='$desription_quiz', situation_quiz='$situation_quiz', quiz_duration='$quiz_duration',image='$img_Quiz' WHERE id_quiz=$id_quiz";
$resultat =$conn->query($requete);

if ($resultat) {
    header('location:../Layout/quizs.php?edidQ=ok');   //redirect to quiz page
} else {
    header('location:../Layout/logOut.php');    //redirect to logout page if update fails
}

?>
