<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:singIn.php');
}

include '../includes/functions.php';
$quizs = getAllQuizsOfUser($_SESSION['id_user']);


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
            <?php 
            $activeMarke = 'quizs';
            include '../includes/sidebar.php'; 
            ?>
            <!-- main Quiz -->
            <?php



            include '../includes/mainQuizs.php';


            ?>

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

    <!-- copyContent  -->
    <script src="../js/copyContent.js"></script>

    <!-- Modal addQuiz -->
    <div class="modal fade" id="addQuiz" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add quiz </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../includes/addQuiz.php" method="post">
                        <div class="form-group">
                            <input type="text" name="title_quiz" class="form-control" placeholder="Title of a quiz.">
                        </div>
                        <div class="form-group">
                            <textarea name="desription_quiz" class="form-control" placeholder="Desription of a quiz."></textarea>
                        </div>
                        <div class="form-group">
                            <input name="quiz_duration" type="text" class="form-control timepicker" id="timepicker" placeholder="Select a time">
                            <!-- <input type="date_time_set"  min="00:00:00" max="23:59:59" name="quiz_duration" class="form-control" placeholder="00:00:00"> -->
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input"  name="situation_quiz" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked />
                            <label class="form-check-label" for="flexSwitchCheckChecked">This quiz is private.</label>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- editQuizs -->
    <?php
    foreach ($quizs as $index => $quiz) { 
        if ($quiz['situation_quiz']==1) {
            $situation_chack='checked';
        } else {
            $situation_chack='';
        }
        
        ?>

        <!-- Modal editQuiz -->
        <div class="modal fade" id="editQuiz<?php echo $quiz['id_quiz']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit quiz </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../includes/editQuiz.php" method="post">
                            <input type="hidden" name="idQ" value="<?php echo $quiz['id_quiz'] ?>">
                            <div class="form-group">
                                <input type="text" name="title_quiz" class="form-control" value="<?php echo $quiz['title_quiz']; ?>" placeholder="Title of a quiz.">
                            </div>
                            <div class="form-group">
                                <textarea name="desription_quiz" class="form-control" placeholder="Desription of a quiz."><?php echo $quiz['quiz_description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="time" name="quiz_duration" class="form-control" value="<?php echo $quiz['quiz_duration']; ?>" placeholder="time">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="situation_quiz" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php echo $situation_chack ?> />
                                <label class="form-check-label" for="flexSwitchCheckChecked">This quiz is private.</label>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php  }

    ?>

    <!--  -->

</body>

</html>