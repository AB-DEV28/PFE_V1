<?php
include '../includes/functions.php';
function getAllUsers()
{
    $conn = connect();
    //2- create requette DB
    $requette = "SELECT * FROM `users` WHERE role_admin !=1";
    //3- execute requette
    $resultat = $conn->query($requette);
    //4- result requette
    $users = $resultat->fetchAll();
    //var_dump($users);
    return $users;
}

function AddUserWithadmin($data)
{
    $conn = connect();
    if (isset($data['fname'])) {
        $mphash = md5($data['mp']);
        $requette = "INSERT INTO users(first_name,last_name,email,mp,role_admin) VALUES('" . $data['fname'] . "','" . $data['lname'] . "','" . $data['email'] . "','" . $mphash . "',0)";
        $resultat = $conn->query($requette);
        if ($resultat) {
            header('location:../Layout/manageUsers.php?add_User=ok');
        } else {
            header('location:../Layout/logOut.php');
        }
    }
}
/////////////// edit user with admin //////////////////
if (isset($_POST[''])) {
    $conn = connect();
    $id_user;
}
///////////////////// remove user with admin  ////////////////////////
if (isset($_GET['Delete_User'])) {
    $conn = connect();
    $id_user = $_GET['Delete_User'];
    $requette = "DELETE FROM users WHERE id_user=$id_user";
    $resultat = $conn->query($requette);
    if ($resultat) {
        header('location:../Layout/manageUsers.php?remove=ok');
    } else {
        header('location:../Layout/logOut.php');
    }
}
//////////// block user with admin ////////////////
if (isset($_GET['BlockUser'])) {
    $id_user = $_GET['BlockUser'];
    $conn = connect();
    $requete = "UPDATE users SET role_admin=2 WHERE id_user=$id_user";
    $resultat = $conn->query($requete);
    if ($resultat) {
        header('location:../Layout/manageUsers.php?block=ok');
    } else {
        header('location:../Layout/logOut.php');
    }
}
////////////// unblock user with admin /////////////////
if (isset($_GET['UNBlockUser'])) {
    $id_user = $_GET['UNBlockUser'];
    $conn = connect();
    $requete = "UPDATE users SET role_admin=0 WHERE id_user=$id_user";
    $resultat = $conn->query($requete);
    if ($resultat) {
        header('location:../Layout/manageUsers.php?unblock=ok');
    } else {
        header('location:../Layout/logOut.php');
    }
}
