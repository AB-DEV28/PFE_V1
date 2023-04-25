<?php 

// function connect(){
//     //1- connect DB
//     $servername="localhost";
//     $DBuser ="root";
//     $DBpassword ="";
//     $DBname="pfe";
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         //echo "Connected successfully";
//       } catch(PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//       }
//       return $conn;
// }
include "../includes/functions.php";
// This function queries the database to retrieve information about a quiz by its ID
function getQuizById($idQ){
  // Establishes connection to the database
  $conn = connect();

  // Builds SQL query to select all columns from table `quiz` where the `id_quiz` matches the passed in `$idQ`
  $requette ="SELECT * FROM quiz WHERE id_quiz=$idQ";

  // Executes the query and saves the result set in the `$resultat` variable
  $resultat =$conn->query($requette);

  // Fetches all rows from the `$resultat` result set and stores them in the `$quiz` array
  $quiz =$resultat->fetchAll();

  // Returns the `$quiz` array containing the quiz information
  return $quiz;
}


?>