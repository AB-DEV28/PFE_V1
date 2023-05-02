<?php
session_start();
include '../includes/functions.php';
if (!isset($_SESSION['email'])) {
    header('location:singIn.php');
}
        


if (isset($_POST['id_Uers'])) {
    $Id_User=$_POST['id_Uers'];
$F_name=$_POST['fname'];
$L_namme=$_POST['lname'];
$Email=$_POST['email'];
$password=$_POST['mp'];
$conn = connect();
$requette ="UPDATE `users` SET first_name='$F_name' ,last_name='$L_namme' ,email='$Email' ,mp='$password' WHERE id_user=$id_question";
$resultat =$conn->query($requette);
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Quizy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include '../includes/NavbarWithoutSearch.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php
            $activeMarke = 'profile';
            include '../includes/sidebar.php';
            ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Profile</h1>
                </div>
                <!-- Profile content -->
                    <div class="col-12 p-5">
                        <h1 class="text-center">Sing up</h1>
                        <form action="profile.php" method="post">
                            <input type="hidden" name="id_Uers" value="<?php  $_SESSION['id_user'];?>">
                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input name="fname" value="<?php  echo $_SESSION['fname'];?>" type="text" class="form-control" id="fname">
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input name="lname" value="<?php   $_SESSION['lname'];?>" type="text" class="form-control" id="lname">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" value="<?php   $_SESSION['email'];?>" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="mp" class="form-label">Password</label>
                                <input name="mp" value="<?php  $_SESSION['mp'];?>" type="password" class="form-control" id="mp">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

</body>

</html>