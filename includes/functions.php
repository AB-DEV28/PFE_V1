<?php 
//////////////   function for cnnected with data base    //////////
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
//////////////   function for get quizs from data base    ////////// 
function getAllQuizs(){
  $conn = connect();
//2- create requette DB
$requette ="SELECT * FROM quiz";
//3- execute requette
$resultat =$conn->query($requette);
//4- result requette
$quizs =$resultat->fetchAll();
//var_dump($quizs);
return $quizs;
}
//////////////   function for get all quizs of user from data base    ////////// 
function getAllQuizsOfUser($id_U){
  $conn = connect();
//2- create requette DB
$requette ="SELECT * FROM quiz WHERE id_user=$id_U";
//3- execute requette
$resultat =$conn->query($requette);
//4- result requette
$quizs =$resultat->fetchAll();
//var_dump($quizs);
return $quizs;
}
//////////////   function for get all Question from data base    ////////// 
function getAllQuestion($id_Q){
  $conn = connect();
//2- create requette DB
$requette ="SELECT * FROM question WHERE id_quiz=$id_Q";
//3- execute requette
$resultat =$conn->query($requette);
//4- result requette
$questions =$resultat->fetchAll();
//var_dump($questions);
return $questions;
}
//////////////   function for fet quizs from data base    ////////// 
function AddUser($data){
  $conn = connect();
  $mphash=md5($data['mp']);
  $requette ="INSERT INTO users(first_name,last_name,email,mp) VALUES('".$data['fname']."','".$data['lname']."','".$data['email']."','".$mphash."')";
  $resultat =$conn->query($requette);
  if ($resultat) {
    return true;
  }else {
    return false;
  }
}
//////////////   function for login users    ////////// 
function connectUser($data){
  $conn = connect();
  $email=$data['email'];
  $mp=md5($data['mp']);
  $requette ="SELECT * FROM users WHERE email='$email'AND mp='$mp'";
  $resultat =$conn->query($requette);
  $user=$resultat->fetch();
  return $user;
}
//////////////   function for get The number of questions of the quiz    ////////// 
function numerQuestionQuiz($id){
  $conn = connect();
  $requette ="SELECT * FROM question WHERE id_quiz='$id'";
  $resultat =$conn->query($requette);
  $QuestionQuiz=$resultat->fetchAll();
  $nbQuestionQuiz=count($QuestionQuiz);
  return $nbQuestionQuiz;
}
//////////////   function for Generate URl  of the quiz    ////////// 
function genURL($id_q){
  $link = "localhost/testing/PFE_V1/Layout/passQuiz.php?id=$id_q";
  return $link;
}
//////////////   function for get URl  of the quiz    ////////// 
function getUrlQuiz($id){
  $conn = connect();
  $requette ="SELECT * FROM quiz WHERE id_quiz='$id'";
  $resultat =$conn->query($requette);
  $Quiz=$resultat->fetch();
  $url=$Quiz['url_quiz'];
  return $url;
}
//////////////   function for get title  of the quiz    ////////// 
function getTitleQuiz($id){
  $conn = connect();
  $requette ="SELECT * FROM quiz WHERE id_quiz='$id'";
  $resultat =$conn->query($requette);
  $Quiz=$resultat->fetch();
  $titleQ=$Quiz['title_quiz'];
  return $titleQ;
}
//////////////   function for get title  of the quiz    ////////// 
function getIdQuiz($id_question){
  $conn = connect();
  $requette ="SELECT * FROM question WHERE id_question='$id_question'";
  $resultat =$conn->query($requette);
  $IdQuiz=$resultat->fetch();
  $titleQ=$IdQuiz['id_quiz'];
  return $titleQ;
}
?>

