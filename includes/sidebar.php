<?php if ($_SESSION['role_admin']==2) {
    header('location:../index.php?role=blocked');
}?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'profile') ? 'active' : ''; ?>" href="../Layout/profile.php">
                                <span data-feather="user"></span>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'quizs') ? 'active' : ''; ?>" href="../Layout/quizs.php">
                                <span data-feather="file"></span>
                                Quizs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'passagequiz') ? 'active' : ''; ?>" href="../Layout/passageQuiz.php">
                                <span data-feather="shopping-cart"></span>
                                Passage Quiz
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'mypassage') ? 'active' : ''; ?>" href="../islam/myquizpass.php">
                                <span data-feather="users"></span>
                                My passage
                            </a>
                        </li>
                        <?php if ($_SESSION['role_admin']==1) {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'manageusers') ? 'active' : ''; ?>" href="../Layout/manageUsers.php">
                                <span data-feather="bar-chart-2"></span>
                                Manage Users
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($activeMarke == 'title6') ? 'active' : ''; ?>" href="#">
                                <span data-feather="layers"></span>
                                title6
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>