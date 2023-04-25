<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:singIn.php');
}
$idQ = $_GET['idQ'];
include '../includes/functions.php';
//$quizs = getAllQuizsOfUser($_SESSION['id_user']);
$questions = getAllQuestion($idQ);


$urlQ = getUrlQuiz($idQ);
$titleQ = getTitleQuiz($idQ);


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
<?php include '../includes/NavbarWithSearch.php';?>

	<div class="container-fluid">
		<div class="row">
            <!-- sidebar -->
            <?php include '../includes/sidebar.php';?>
			<!-- main  -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">main</h1>
                </div>
                <!-- main content -->
                <div></div>

            </main>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<!-- Icons -->
	<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
	<script>
		feather.replace()
	</script>
	<!-- Graphs -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

	<!--  -->

  
</body>

</html>