<?php
session_start();
include 'includes/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Quizy</title>
</head>

<body>
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
                    <a href="Layout/passQuiz.php?id=' . $quiz['id_quiz'] . '" class="btn btn-primary">Participate</a>
                </div>
            </div>
        </div>
            ';
        ?>

    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>