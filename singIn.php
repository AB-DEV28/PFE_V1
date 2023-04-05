<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location:Layout/profile.php');
}
include 'includes/navbar.php';
$user = true;

if (!empty($_POST)) {
    $user = connectUser($_POST);
    if (!empty($user)) {
        session_start();
        $_SESSION['fname']=$user['first_name'];
        $_SESSION['lname']=$user['last_name'];
        $_SESSION['email']=$user['email'];
        $_SESSION['mp']=$user['mp'];
        $_SESSION['id_user']=$user['id_user'];
        header('location:Layout/profile.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
    <title>Quizy</title>
</head>

<body>
    <div class="col-12 p-5">
        <h1 class="text-center">Sing in</h1>
        <form action="singIn.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="mp" class="form-label">Password</label>
                <input name="mp" type="password" class="form-control" id="mp">
            </div>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
    <?php 
include 'includes/footer.php';
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
<?php
if (!$user) {
    print "<script>
Swal.fire({
    title: 'Invalid',
    text: 'Invalid email or password.',
    icon: 'error',
    confirmButtonText: 'OK',
    timer: 2000
  })</script>
";
}
?>

</html>