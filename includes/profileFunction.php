<?php 


include '../includes/functions.php';
function editProfile(){
if (isset($_POST['id_user'])) {
  $conn = connect();
  $Id_User = $_POST['id_user'];
  $F_name = $_POST['fname'];
  $L_namme = $_POST['lname'];
  $Email = $_POST['email'];
  $CurrentPassword =md5($_POST['CurrentPassword']);
  $NewPassword=md5($_POST['NewPassword']);
  if ($_POST['mpDB']==$CurrentPassword) {
    $requette ="UPDATE users SET first_name='$F_name', last_name='$L_namme', email='$Email', mp='$NewPassword' WHERE id_user=$Id_User";
    $resultat = $conn->query($requette);
  }
  if ($resultat) {
      header('Location: ../Layout/profile.php?edidProfile=ok');   
  } else {
    header('Location: ../Layout/profile.php?edidProfile=no');    
  }
}

}
//////////
function getProfileInfo($id_User){
  $conn = connect();
  $requette ="SELECT * FROM users WHERE id_user=$id_User";
  $resultat =$conn->query($requette);
  $user=$resultat->fetch();
  return $user;
}
if (isset($_GET['Delete_User'])) {
  $conn = connect();
  $id_user = $_GET['Delete_User'];
  $requette = "DELETE FROM users WHERE id_user=$id_user";
  $resultat = $conn->query($requette);
  if ($resultat) {
    header('location:logOut.php');
  } else {
    header('location:../Layout/profile.php?remove=no');
  }
}
?>
