<?php 


include '../includes/functions.php';
$conn = connect();

$Id_User = $_POST['id_user'];
$F_name = $_POST['fname'];
$L_namme = $_POST['lname'];
$Email = $_POST['email'];
$password = $_POST['mp'];

$requette ="UPDATE `users` SET first_name='$F_name', last_name='$L_namme', email='$Email', mp='$password' WHERE id_user=$Id_User";
$resultat = $conn->query($requette);

if ($resultat) {
    header('Location: ../Layout/profile.php?edidProfile=ok');   
} else {
  header('Location: ../Layout/logOut.php');    
}

?>
