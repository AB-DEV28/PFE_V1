<?php 

function connect(){
    //1- connect DB
    $servername="localhost";
    $DBuser ="root";
    $DBpassword ="";
    $DBname="pfe";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      return $conn;
}

function getQuizById($idQ){
    $conn = connect();
  //2- create requette DB
  $requette ="SELECT * FROM quiz WHERE id_quiz=$idQ";
  //3- execute requette
  $resultat =$conn->query($requette);
  //4- result requette
  $quiz =$resultat->fetchAll();
  //var_dump($quizs);
  return $quiz;
}

?>