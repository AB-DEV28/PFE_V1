<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My resutls</h1>
    </div>
    <!-- list quiz -->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title quiz</th>
                    <th scope="col">Description</th>
                    <th scope="col">Note</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($quizs as $quiz) {
                    $i++;
                    print '
                              <tr>
                                <th scope="row">' . $i . '</th>
                                <td>' . $quiz['title_quiz'] . '</td>
                                <td>' . $quiz['quiz_description'] . '</td>
                                <td>' . $quiz['note'] . '</td>
                                <td>' . $quiz['date'] . '</td>
                                <td>
                                    <a class="btn btn-danger" href="../includes/ViewAnswersUser.php?id_Quiz=' . $quiz['id_quiz'] . '&id_user='.$_SESSION['id_user'].'&id_passQuiz='.$quiz['id_pass'].'">View result</a>
                                </td>
                              </tr>
                                       ';
                }
                ?>
            </tbody>
        </table>
    </div>

</main>