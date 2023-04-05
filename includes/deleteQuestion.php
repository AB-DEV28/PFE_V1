<?php 
//including the functions.php file which contains the connect function.
include 'functions.php';
//establishing a connection to the database using the connect function.
$conn = connect();
//getting the id of the question from the url parameters
$id_Question=$_GET['id_Question'];
$id_Q=getIdQuiz($id_question);
//creating a query to delete a specific question from the question table in the database based on its id and storing it in the $requette variable. 
$requette ="DELETE FROM question WHERE id_question='$id_Question'";
//executing the query and  storing it in the $resultat variable
$resultat =$conn->query($requette);
//if the query is successful then redirect the user to the manageQuiz page with a success message and include the id of the quiz in the url parameters
 if ($resultat) {
    header('location:manageQuiz.php?deleteQuestion=ok&idQ='.$id_Q.'');  
  }
 //if the query fails then redirect the user to the logout page
 else {
  header('location:../Layout/logOut.php');   
}
?>
