<?php
//including the functions.php file which contains the connect function.
include 'functions.php';

//establishing a connection to the database using the connect function.
$conn = connect();

//getting the id of the question from the url parameters
$id_Question = $_GET['id_Question'];
$id_Q = getIdQuiz($id_Question);

//creating a query to delete a specific question from the question table in the database based on its id and storing it in the $requete variable.
$requete = "DELETE FROM question WHERE id_question='$id_Question'";

//hiding error messages
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/logs/php_error.log');

//executing the query and storing it in the $resultat variable
$resultat = $conn->query($requete);

//resetting error message settings to their defaults
ini_restore('display_errors');
ini_restore('log_errors');
ini_restore('error_log');

//if the query is successful then redirect the user to the manageQuiz page with a success message and include the id of the quiz in the url parameters
if ($resultat) {
  header('location:manageQuiz.php?idQ='.$id_Q.'&deleteQuestion=ok');
} else {
  //if the query fails then redirect the user to the logout page
  header('location:../Layout/logOut.php');
}
?>
