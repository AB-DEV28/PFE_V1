<?php
include '../includes/functions.php';
session_start();
if (!isset($_SESSION['email'])) {
	header('location:singIn.php');
}
$id_User = $_SESSION['id_user'];
$quizs = getAllQuizsPublic();
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
	<?php include '../includes/NavbarWithSearch.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<!-- sidebar -->
			<?php include '../includes/sidebar.php'; ?>
			<!-- main  -->
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Entering a special Quiz.</h1>
				</div>
				<div>
					<form class="form-inline" method="get" action="passQuiz.php">
						<div class="form-group mb-2">
						<h4>Put the link:</h4>
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input name="id" type="text" class="form-control" id="url" placeholder="https//exampel.com">
						</div>
						<button type="submit" class="btn btn-primary mb-2">Entering</button>
					</form>
				</div>
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Available Quizs to pass.</h1>
				</div>
				<!-- main content -->
				<div>
					<!-- list quiz -->
					<div class="row col-12 mt-4">
						<!-- card quiz -->
						<?php
						foreach ($quizs as $quiz)
							print '
            <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="images/' . $quiz['image'] . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $quiz['title_quiz'] . '</h5>
                    <p class="card-text">' . $quiz['quiz_description'] . '</p>
                    <a href="passQuiz.php?id=' . $quiz['id_quiz'] . '" class="btn btn-primary">Participate</a>
                </div>
            </div>
        </div>
            ';
						?>

					</div>
				</div>

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