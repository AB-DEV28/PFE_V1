<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../singIn.php');
}
$id_User=$_SESSION['id_user'];
$idQ = $_GET['id'];
// if (!isset($_GET['id'])) {
//     $idQ = $_POST['id'];
// }

include '../includes/functions.php';
$titleQuiz = getTitleQuiz($idQ);
$questions = getAllQuestion($idQ);
$quiz = getQuizById($idQ);
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
	<?php include '../includes/NavbarWithoutSearch.php' ?>
	<div class="container-fluid">
		<div class="row">
			<!-- sidebar -->
			<?php 
			$activeMarke = 'passagequiz';
			include '../includes/sidebar.php' 
			?>
			<!-- main Quiz -->
			<main  role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Participation in <?php echo $titleQuiz; ?></h1>
					<?php
                    if (isset($_GET['note'])) {
						$note=$_GET['note'];
                        print '
                    <div class="alert alert-success">
                    note is '.$note.'
                    </div>';
                    }
                    ?>
				</div>
				<div class="container">
				<form method="post" action="../includes/passQuizFunction.php">
                <input type="hidden" name="id_User" value="<?php echo $id_User; ?>">
                <input type="hidden" name="id_Q" value="<?php echo $idQ; ?>">
					<?php
					// Output each question with choices
					foreach ($questions as $index => $question) {
					?>
						<div class="card">
							<div class="card-header"><?php echo $index+1 ; ?> : <?php echo $question["title_question"]; ?></div>
							<div class="card-body">
                                <input type="hidden" name="Question_<?php echo $index ; ?>" value="<?php echo $question["id_question"]; ?>">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch1"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch1"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch2"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch2"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch3"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch3"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch4"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch4"]; ?>
										</label>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
                    <input type="hidden" name="number_question" value="<?php echo $index+1; ?>">
					<button type="submit" class="btn btn-primary">Submit</button>
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

	<!--  -->
	<script data-timeout="<?php //echo $timeout; ?>">
    // Set the session timeout in seconds
    const timeout = parseInt(document.currentScript.dataset.timeout); // Change this value to set the desired session timeout in seconds

    // Set the session start time
    
      //setTimeout(() => {
      //  window.location.href = 'http://localhost:81/fromgit/PFE_V1/index.php';
      //}, 5000);
    
  </script> 
  
</body>

</html>