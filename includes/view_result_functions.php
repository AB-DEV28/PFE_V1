<?php
include '../includes/functions.php';
// This function takes an ID and returns an array containing all columns from the pass_quiz table where the id_quiz equals the given ID.
function getPassQuizById($idQ)
{
    // Create a database connection using the `connect()` function and execute the query in one line using `fetchAll()`.
    return connect()->query("SELECT * FROM pass_quiz WHERE id_quiz = $idQ")->fetchAll();
}

// This function takes an ID and returns an array containing the first_name and last_name columns from the users table where the id_user equals the given ID.
function getNameUsersPassQuiz($id_U)
{
    // Create a database connection using the `connect()` function and execute the query in one line using `fetchAll()`.
    return connect()->query("SELECT first_name, last_name FROM users WHERE id_user = $id_U")->fetch();
}

?>