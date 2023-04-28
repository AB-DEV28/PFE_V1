<?php

session_start();
include '../includes/ViewAnswersUserFunctions.php';
$id_User=$_GET['id_user'];
$id_Quiz = $_GET['id_Quiz'];
$titleQuiz = getTitleQuiz($id_Quiz);
$questions = getAllQuestion($id_Quiz);
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
	<?php include '../includes/NavbarWithSearch.php' ?>
	
	<div class="container-fluid">
		<div class="row">
			<!-- sidebar -->
			<?php include '../includes/sidebar.php' ?>
			<!-- main Quiz -->
			<main  role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2"><?php echo $titleQuiz; ?></h1>
				</div>
				<form method="post" action="work.php">
					<?php
					// Output each question with choices
					foreach ($questions as $index => $question) {
					?>
						<div class="card">
							<div class="card-header"><?php echo $index+1 ; ?>:<?php echo $question["title_question"];?></div>
							<div class="card-body">
								<?php 
								$selectedAnswer=getAnswersSlected($question["id_question"],$id_User,$id_Quiz);
								echo $selectedAnswer;
								?>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch1"]; ?>"<?php echo ($question["ch1"] == $selectedAnswer) ? 'checked' : ''; ?> disabled>
										<label class="form-check-label">

											<?php echo $question["ch1"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch2"]; ?>"<?php echo ($question["ch2"] == $selectedAnswer) ? 'checked' : ''; ?> disabled>
										<label class="form-check-label">
											<?php echo $question["ch2"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch3"]; ?>"<?php echo ($question["ch3"] == $selectedAnswer) ? 'checked' : ''; ?> disabled>
										<label class="form-check-label">
											<?php echo $question["ch3"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index ; ?>" value="<?php echo $question["ch4"]; ?>"<?php echo ($question["ch4"] == $selectedAnswer) ? 'checked' : ''; ?> disabled>
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
				</form>
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