<?php 
include 'functions.php';
$conn = connect();
$idQ=$_GET['idQ'];
$requette ="DELETE FROM quiz WHERE id_quiz='$idQ'";
  $resultat =$conn->query($requette);
  if ($resultat) {
    header('location:../Layout/quizs.php?delete=ok');   //redirect to quiz page
  }
 else {
  header('location:../Layout/logOut.php');   
}
?>