<?php
include_once "../../PHP/connection.php";
session_start();
$sql1 = "SELECT * FROM user_info WHERE ID = '" . $_SESSION["ID"] . "' ";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($result1);
$form_id = $row1["form_id"];
$sql2 = "SELECT * FROM cv_form WHERE form_ID = '" . $form_id . "' ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);
$img_path = $row2["img_path"];
$name = $row2["user_name"];
$user_name = $row2["user_name"];
$birth_date = $row2["birth_date"];
$nationality = $row2["nationality"];
$city = $row2["city"];
$user_email = $row2["user_email"];
$phone_number = $row2["phone_number"];
$speciality = $row2["speciality"];
$Degree = $row2["Degree"];
$user_bio = $row2["user_bio"];
$university = $row2["university"];
$Degree_date_start = $row2["Degree_date_start"];
$Degree_date_end = $row2["Degree_date_end"];
$Artistic_skills = $row2["Artistic_skills"];
$Artistic_skills = explode(" ", $Artistic_skills);
$Personal_skills = $row2["Personal_skills"];
$Personal_skills = explode(" ", $Personal_skills);
$jobs = $row2["jobs"];
$jobs = explode(",", $jobs);
$company = $row2["company"];
$company = explode(",", $company);
$job_date_start = $row2["job_date_start"];
$job_date_start = explode(",", $job_date_start);
$job_date_end = $row2["job_date_end"];
$job_date_end = explode(",", $job_date_end);
$achievements = $row2["achievements"];
$achievements = explode(",", $achievements);
$project_name = $row2["project_name"];
$project_name = explode(",", $project_name);
$project_date_start = $row2["project_date_start"];
$project_date_start = explode(",", $project_date_start);
$project_date_end = $row2["project_date_end"];
$project_date_end = explode(",", $project_date_end);
$project_bio = $row2["project_bio"];
$project_bio = explode(",", $project_bio);
$user_language = $row2["user_language"];
$user_language = explode(" ", $user_language);
$hobbies = $row2["hobbies"];
$hobbies = explode(" ", $hobbies);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none"><?php echo $name; ?></span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../<?php echo  $img_path; ?>" alt="" /></span>
        </a>
        <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Languages</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Hobbies</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Personal Projects</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?php echo $name; ?>
                </h1>
                <div class="subheading mb-5">
                    <?php echo $city; ?> · <?php echo $nationality; ?> · <?php echo $phone_number; ?> ·
                    <a href="mailto:name@email.com"><?php echo $user_email; ?></a>
                </div>
                <p class="lead mb-5"><?php echo $user_bio; ?></p>
                <div class="social-icons">
                    <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University of Colorado Boulder</h3>
                        <div class="subheading mb-3">Bachelor of Science</div>
                        <div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <?php
                if ($jobs[0] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $jobs[0] . '</h3>
                    <div class="subheading mb-3">At ' . $company[0] . '</div>';
                    $a1 = explode(" ", $achievements[0]);
                    foreach ($a1 as $ach1) {
                        echo "<p>$ach1</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $job_date_start[0] . ' - ' . $job_date_end[0] . '</span></div>';
                    echo '
                    </div>';
                }
                if ($jobs[1] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $jobs[1] . '</h3>
                    <div class="subheading mb-3">At ' . $company[1] . '</div>';
                    $a2 = explode(" ", $achievements[1]);
                    foreach ($a2 as $ach2) {
                        echo "<p>$ach2</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $job_date_start[1] . ' - ' . $job_date_end[1] . '</span></div>';
                    echo '
                    </div>';
                }
                if ($jobs[2] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $jobs[2] . '</h3>
                    <div class="subheading mb-3">At ' . $company[2] . '</div>';
                    $a3 = explode(" ", $achievements[2]);
                    foreach ($a3 as $ach3) {
                        echo "<p>$ach3</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $job_date_start[2] . ' - ' . $job_date_end[2] . '</span></div>';
                    echo '
                    </div>';
                }
                ?>
            </div>
        </section>
        <hr class="m-0" />
        <section class="resume-section" id="skills" style="flex-direction: column;">
            <div class="resume-section-content">
                <h2 class="mb-5">Artistic Skills</h2>
                <ol class="list-inline fs-4">
                    <?php
                    foreach ($Artistic_skills as $Skill) {
                        echo  "<li> $Skill</li>";
                    }
                    ?>
                </ol>
            </div>
            <div class="resume-section-content mt-5">
                <h2 class="mb-5">Personal Skills</h2>
                <ol class="list-inline fs-4">
                    <?php
                    foreach ($Personal_skills as $Skill) {
                        echo  "<li> $Skill</li>";
                    }
                    ?>
                </ol>
            </div>
            <div class="resume-section-content mt-5">
                <h2 class="mb-5">Languages</h2>
                <ol class="list-inline fs-4">
                    <?php
                    foreach ($user_language as $lang) {
                        echo  "<li> $lang</li>";
                    }
                    ?>
                </ol>
            </div>
            <div class="resume-section-content mt-5">
                <h2 class="mb-5">Hobbies</h2>
                <ol class="list-inline fs-4">
                    <?php
                    foreach ($hobbies as $h) {
                        echo  "<li> $h</li>";
                    }
                    ?>
                </ol>
            </div>
        </section>
        <hr class="m-0" />
        <section class="resume-section" id="projects">
            <div class="resume-section-content">
                <h2 class="mb-5">Personal Projects</h2>
                <?php
                if ($jobs[0] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $project_name[0] . '</h3>';
                    $b1 = explode(" ", $project_bio[0]);
                    foreach ($b1 as $bch1) {
                        echo "<p>$bch1</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $project_date_start[0] . ' - ' . $project_date_end[0] . '</span></div>';
                    echo '
                    </div>';
                }
                if ($jobs[1] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $project_name[1] . '</h3>';
                    $b2 = explode(" ", $project_bio[1]);
                    foreach ($b2 as $bch2) {
                        echo "<p>$bch2</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $project_date_start[1] . ' - ' . $project_date_end[1] . '</span></div>';
                    echo '
                    </div>';
                }
                if ($jobs[2] != "") {
                    echo ' <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                    <h3 class="mb-0">' . $project_name[2] . '</h3>';
                    $b3 = explode(" ", $project_bio[2]);
                    foreach ($b3 as $bch3) {
                        echo "<p>$bch3</p>";
                    }
                    echo '</div>';
                    echo '<div class="flex-shrink-0"><span class="text-primary">' . $project_date_start[2] . ' - ' . $project_date_end[2] . '</span></div>';
                    echo '
                    </div>';
                }
                ?>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
