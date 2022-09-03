<?php
include_once "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal-info</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/personalInformation.css">
    <script type="text/javascript">
        function alert(message) {
            alertify.defaults.glossary.title = 'My Title';
            alertify.alert("Business City", message);
        }
    </script>
</head>

<body>
    <header>
        <div class="container">
            <a href="home.php" class="logo">
                <img src="../MEDIA/Logo(chooseT).svg" alt="logo">
                <p>Business City</p>
            </a>
        </div>
    </header>
    <div class="landing-info">
        <div class="container">
            <div class="title">اكتب معلوماتك الشخصية</div>
            <?php
            $sqlCvCheck = "select * from user_info where ID = '" . $_SESSION["ID"] . "'  ";
            $result66 = mysqli_query($conn, $sqlCvCheck);
            $row66 = mysqli_fetch_array($result66);
            if ($row66["CV_done"] == 1) {
                $sql = "select * from cv_form where form_ID = '" . $row66["form_id"] . "'";
                $result = mysqli_query($conn, $sql);
                $rowV = mysqli_fetch_assoc($result);
                $img_path = $rowV["img_path"];
                $Personal_skills_array =  $rowV["Personal_skills"];
                $Personal_skills_array = explode(',', $Personal_skills_array);
                $Artistic_skills_array =  $rowV["Artistic_skills"];
                $Artistic_skills_array = explode(',', $Artistic_skills_array);
                $hobbies_array =  $rowV["hobbies"];
                $hobbies_array = explode(',', $hobbies_array);
                $user_language_array =  $rowV["user_language"];
                $user_language_array = explode(',', $user_language_array);
                $speciality_array =  $rowV["speciality"];
                $speciality_array = explode(',', $speciality_array);
                $university_array =  $rowV["university"];
                $university_array = explode(',', $university_array);
                $Degree_date_start_array =  $rowV["Degree_date_start"];
                $Degree_date_start_array = explode(',', $Degree_date_start_array);
                $Degree_date_end_array =  $rowV["Degree_date_end"];
                $Degree_date_end_array = explode(',', $Degree_date_end_array);
                $jobs_array =  $rowV["jobs"];
                $jobs_array = explode(',', $jobs_array);
                $company_array =  $rowV["company"];
                $company_array = explode(',', $company_array);
                $job_date_start_array =  $rowV["job_date_start"];
                $job_date_start_array = explode(',', $job_date_start_array);
                $job_date_end_array =  $rowV["job_date_end"];
                $job_date_end_array = explode(',', $job_date_end_array);
                $project_name_array =  $rowV["project_name"];
                $project_name_array = explode(',', $project_name_array);
                $project_date_start_array =  $rowV["project_date_start"];
                $project_date_start_array = explode(',', $project_date_start_array);
                $project_date_end_array =  $rowV["project_date_end"];
                $project_date_end_array = explode(',', $project_date_end_array);
                $project_bio_array =  $rowV["project_bio"];
                $project_bio_array = explode(',', $project_bio_array);
                $Degree_array =  $rowV["Degree"];
                $Degree_array = explode(',', $Degree_array);
                $achievements_array =  $rowV["achievements"];
                $achievements_array = explode('-', $achievements_array);
                if (isset($achievements_array[0])) {
                    $achievements_array_seperated_0 = explode(',', $achievements_array[0]);
                }
                if (isset($achievements_array[1])) {
                    $achievements_array_seperated_1 = explode(',', $achievements_array[1]);
                }
                if (isset($achievements_array[2])) {
                    $achievements_array_seperated_2 = explode(',', $achievements_array[2]);
                }
            } else {
                $sql = "select * from cv_form where form_ID = '" . $row66["form_id"] . "'";
                $result = mysqli_query($conn, $sql);
                $rowV = mysqli_fetch_assoc($result);
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $file = $_FILES['fileimg'];
                $fileName = $_FILES['fileimg']['name'];
                $fileTmpName = $_FILES['fileimg']['tmp_name'];
                $fileSize = $_FILES['fileimg']['size'];
                $fileError = $_FILES['fileimg']['error'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $ext = $fileActualExt;
                $fileDestination = $_POST["formImgControl"];
                if ($fileError === 0) {
                    if ($fileSize < 100000000) {
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = '../db_images/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                    } else {
                        echo "<script>alert('Your file is too big!')</script>";
                    }
                }
                $user_name = $_POST["user_name"];
                $birth_date = $_POST["birth_date"];
                $nationality = $_POST["nationality"];
                $city = $_POST["city"];
                $user_email = $_POST["user_email"];
                $phone_number = $_POST["phone_number"];
                $user_bio = $_POST["user_bio"];
                $Artistic_skills = $_POST["HiddenInput1"];
                $Personal_skills = $_POST["HiddenInput2"];
                $hobbies = $_POST["HiddenInput3"];
                $user_language = $_POST["HiddenInput4"];
                $job1 = $_POST["job1"];
                $job2 = $_POST["job2"];
                $job3 = $_POST["job3"];
                $combinedJobs = [$job1, $job2, $job3];
                $combinedJobs = join(",", $combinedJobs);
                $company1 = $_POST["company1"];
                $company2 = $_POST["company1"];
                $company3 = $_POST["company1"];
                $combinedcompanys = [$company1, $company2, $company3];
                $combinedcompanys = join(",", $combinedcompanys);
                $job_date_start1 = $_POST["job_date_start1"];
                $job_date_start2 = $_POST["job_date_start2"];
                $job_date_start3 = $_POST["job_date_start3"];
                $job_date_start_Combined = [$job_date_start1, $job_date_start2, $job_date_start3];
                $job_date_start_Combined = join(",", $job_date_start_Combined);
                $job_date_end1 = $_POST["job_date_end1"];
                $job_date_end2 = $_POST["job_date_end2"];
                $job_date_end3 = $_POST["job_date_end3"];
                $job_date_end_Combined = [$job_date_end1, $job_date_end2, $job_date_end3];
                $job_date_end_Combined = join(",", $job_date_end_Combined);
                $Degree1 = $_POST["Degree1"];
                $Degree2 = $_POST["Degree2"];
                $Degree3 = $_POST["Degree3"];
                $Degree_Combined = [$Degree1, $Degree2, $Degree3];
                $Degree_Combined = join(",", $Degree_Combined);
                $speciality1 = $_POST["speciality1"];
                $speciality2 = $_POST["speciality2"];
                $speciality3 = $_POST["speciality3"];
                $speciality_Combined = [$speciality1, $speciality2, $speciality3];
                $speciality_Combined = join(",", $speciality_Combined);
                $university1 = $_POST["university1"];
                $university2 = $_POST["university2"];
                $university3 = $_POST["university3"];
                $university_Combined = [$speciality1, $speciality2, $speciality3];
                $university_Combined = join(",", $university_Combined);
                $Degree_date_start1 = $_POST["Degree_date_start1"];
                $Degree_date_start2 = $_POST["Degree_date_start2"];
                $Degree_date_start3 = $_POST["Degree_date_start3"];
                $Degree_date_start_Combined = [$Degree_date_start1, $Degree_date_start2, $Degree_date_start3];
                $Degree_date_start_Combined = join(",", $Degree_date_start_Combined);
                $Degree_date_end1 = $_POST["Degree_date_end1"];
                $Degree_date_end2 = $_POST["Degree_date_end2"];
                $Degree_date_end3 = $_POST["Degree_date_end3"];
                $Degree_date_end_Combined = [$Degree_date_end1, $Degree_date_end2, $Degree_date_end3];
                $Degree_date_end_Combined = join(",", $Degree_date_end_Combined);
                $achievements1 = $_POST["HiddenInput51"];
                $achievements2 = $_POST["HiddenInput52"];
                $achievements3 = $_POST["HiddenInput53"];
                $achievements_Combined = [$achievements1, $achievements2, $achievements3];
                $achievements_Combined = join("-", $achievements_Combined);
                $project_name1 = $_POST["project_name1"];
                $project_name2 = $_POST["project_name2"];
                $project_name3 = $_POST["project_name3"];
                $project_name_Combined = [$project_name1, $project_name2, $project_name3];
                $project_name_Combined = join(",", $project_name_Combined);
                $project_date_start1 = $_POST["project_date_start1"];
                $project_date_start2 = $_POST["project_date_start2"];
                $project_date_start3 = $_POST["project_date_start3"];
                $project_date_start_Combined = [$project_date_start1, $project_date_start2, $project_date_start3];
                $project_date_start_Combined = join(",", $project_date_start_Combined);
                $project_date_end1 = $_POST["project_date_end1"];
                $project_date_end2 = $_POST["project_date_end2"];
                $project_date_end3 = $_POST["project_date_end3"];
                $project_date_end_Combined = [$project_date_end1, $project_date_end2, $project_date_end3];
                $project_date_end_Combined = join(",", $project_date_end_Combined);
                $project_bio1 = $_POST["project_bio1"];
                $project_bio2 = $_POST["project_bio2"];
                $project_bio3 = $_POST["project_bio3"];
                $project_bio_Combined = [$project_bio1, $project_bio2, $project_bio3];
                $project_bio_Combined = join(",", $project_bio_Combined);
                $form_id = rand(100000000, 999999999);
                $sql = "Select * from user_info where form_id='$form_id'";
                $result4 = mysqli_query($conn, $sql);
                $num2 = mysqli_num_rows($result4);
                while ($num2 != 0) {
                    $form_id = rand(100000000, 999999999);
                    $sql2 = "Select * from user_info where form_id='$form_id'";
                    $result = mysqli_query($conn, $sql2);
                    $num = mysqli_num_rows($result);
                }
                $sql3 = "INSERT INTO cv_form (form_id,img_path,user_name,birth_date,nationality,city,user_email,phone_number,speciality,Degree,user_bio,Degree_date_start,Degree_date_end,university,Artistic_skills,Personal_skills,hobbies,user_language,jobs,company,job_date_start,job_date_end,achievements,project_name,project_date_start,project_date_end,project_bio) VALUES
                ('$form_id','$fileDestination', '$user_name' , '$birth_date', '$nationality' ,'$city' , '$user_email' , '$phone_number' , '$speciality_Combined' , '$Degree_Combined' , '$user_bio' , '$Degree_date_start_Combined','$Degree_date_end_Combined','$university_Combined','$Artistic_skills','$Personal_skills','$hobbies','$user_language','$combinedJobs','$combinedcompanys','$job_date_start_Combined','$job_date_end_Combined','$achievements_Combined','$project_name_Combined','$project_date_start_Combined','$project_date_end_Combined','$project_bio_Combined')";
                mysqli_query($conn, $sql3);
                $sql4 = "UPDATE user_info SET form_id = '$form_id ' WHERE ID = '" . $_SESSION["ID"] . "'";
                $sql5 = "UPDATE user_info SET CV_done = 1 WHERE ID = '" . $_SESSION["ID"] . "'";
                mysqli_query($conn, $sql4);
                mysqli_query($conn, $sql5);
                if ($_GET["type"] == 1) {
                    header("Location: ../Templates/T1");
                } elseif ($_GET["type"] == 2) {
                    header("Location: ../Templates/T2");
                } else {
                    header("Location: ../Templates/T3");
                }
            }
            ?>
            <form class="form1" action="" method="POST" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
                <input class="formImgControl" name="formImgControl" type="hidden" value="<?php echo $img_path; ?>">
                <ul class="caution" style="list-style-type:disc !important">
                    <li>الرجاء تعبئة البيانات باللغة الأنجليزية</li>
                </ul>
                <label for="fileimg">
                    <img class="imageCV" src="<?php echo $img_path; ?>" alt="imageCV">
                </label>
                <input type="file" name="fileimg" id="fileimg" accept=".jpg,.png,.gif,jpeg" hidden onchange="loadFile(event)" />
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" autocomplete="off" name="nationality" required value="<?php echo $rowV['nationality'] = $rowV['nationality'] ?? ''; ?>">
                        <label class="user-label">الجنسية</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="birth_date" required value="<?php echo $rowV['birth_date'] = $rowV['birth_date'] ?? ''; ?>">
                        <label class="user-label2">العمر</label>
                    </div>
                    <div class="input-box input-box-name ">
                        <input type="text" name="user_name" required value="<?php echo $rowV['user_name'] = $rowV['user_name'] ?? ''; ?>">
                        <label class="user-label3">الأسم</label>
                    </div>
                    <div class="input-box input-box-phone">
                        <input type="text" name="phone_number" required value="<?php echo $rowV['phone_number'] = $rowV['phone_number'] ?? ''; ?>">
                        <label class="user-label">رقم الهاتف</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="user_email" required value="<?php echo $rowV['user_email'] = $rowV['user_email'] ?? ''; ?>">
                        <label class="user-label2">الايميل</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="city" required value="<?php echo $rowV['city'] = $rowV['city'] ?? ''; ?>">
                        <label class="user-label3">المدينه</label>
                    </div>
                    <div class="input-box personal-desc">
                        <input class="row-2" type="text" name="user_bio" required value="<?php echo $rowV['user_bio'] = $rowV['user_bio'] ?? ''; ?>">
                        <label class="user-label">الوصف الشخصي</label>
                    </div>
                </div>
                <br>
                <hr>
                <div class="form2">
                    <div class="user-details2">
                        <div class="input-box2">
                            <div class="add-skills_input2">
                                <input class="Artistic_skills_input" type="text" placeholder="المهارات الفنية">
                                <input class="HiddenInput1" type="text" name="HiddenInput1" placeholder="Danger" value="<?php echo $rowV['Artistic_skills'] = $rowV['Artistic_skills'] ?? ''; ?>">
                                <div class="add_Askill"><i class="fa-solid fa-plus inc inc1"></i></div>
                            </div>
                            <ul class="Artistic_skills">
                                <?php
                                $num = 0;
                                if (isset($Artistic_skills_array)) {
                                    foreach ($Artistic_skills_array as $skill) {
                                        if ($skill && trim($skill)) {
                                            echo "<li class='list-form $num'>$skill";
                                            echo '<div class="add_Pskill AKill"><i class="fa-solid fa-minus"></i></div></li>';
                                            ++$num;
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="input-box2">
                            <div class="add-skills_input2">
                                <input class="Personal_skills_input" type="text" placeholder="المهارات الشخصية">
                                <input class="HiddenInput2" name="HiddenInput2" type="text" placeholder="Danger" value="<?php echo $rowV['Personal_skills'] = $rowV['Personal_skills'] ?? ''; ?>">
                                <div class="add_PskillO"><i class="fa-solid fa-plus inc inc1"></i></div>
                            </div>
                            <ul class="Personal_skills">
                                <?php
                                $num = 0;
                                if (isset($Personal_skills_array)) {
                                    foreach ($Personal_skills_array as $skill) {
                                        if ($skill && trim($skill)) {
                                            echo "<li class='list-form $num'>$skill";
                                            echo '<div class="add_Pskill PKill"><i class="fa-solid fa-minus"></i></div></li>';
                                            ++$num;
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form5">
                    <div class="user-details5">
                        <div class="input-box5">
                            <div class="add-skills_input2">
                                <input class="important" type="text" placeholder="الهوايات والأهتمامات">
                                <input class="HiddenInput3" name="HiddenInput3" type="text" placeholder="Danger" value="<?php echo $rowV['hobbies'] = $rowV['hobbies'] ?? ''; ?>">
                                <div class="add_Vskill"><i class="fa-solid fa-plus inc inc1"></i></div>
                            </div>
                            <ul class="important_skill">
                                <?php
                                $num = 0;
                                if (isset($hobbies_array)) {
                                    foreach ($hobbies_array as $hob) {
                                        if ($hob && trim($hob)) {
                                            echo "<li class='list-form $num'>$hob";
                                            echo '<div class="add_Pskill VKill"><i class="fa-solid fa-minus"></i></div></li>';
                                            ++$num;
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="user-details5">
                        <div class="input-box5">
                            <div class="add-skills_input2">
                                <input class="lang" type="text" placeholder="اللغة">
                                <input class="HiddenInput4" name="HiddenInput4" type="text" placeholder="Danger" value="<?php echo $rowV['user_language'] = $rowV['user_language'] ?? ''; ?>">
                                <div class="add_kskill"><i class="fa-solid fa-plus inc inc1"></i></div>
                            </div>
                            <ul class="lang_skill">
                                <?php
                                $num = 0;
                                if (isset($user_language_array)) {
                                    foreach ($user_language_array as $lang) {
                                        if ($lang && trim($lang)) {
                                            echo "<li class='list-form $num'>$lang";
                                            echo '<div class="add_Pskill KKill"><i class="fa-solid fa-minus"></i></div></li>';
                                            ++$num;
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form3">
                    <p> التعليم #1 </p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp4" name="Degree1" type="text" placeholder="الدرجة العلمية" value="<?php echo $Degree_array[0] = $Degree_array[0] ?? ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" name="speciality1" placeholder="التخصص" value="<?php echo $speciality_array[0] = $speciality_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" name="university1" placeholder="الجامعة" value="<?php echo $university_array[0] = $university_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="Degree_date_start1" value="<?php echo $Degree_date_start_array[0] = $Degree_date_start_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="Degree_date_end1" value="<?php echo $Degree_date_end_array[0] = $Degree_date_end_array[0] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> التعليم #2 </p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp5" name="Degree2" type="text" placeholder="الدرجة العلمية" value="<?php echo $Degree_array[1] = $Degree_array[1] ?? ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" name="speciality2" placeholder="التخصص" value="<?php echo $speciality_array[1] = $speciality_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" name="university2" placeholder="الجامعة" value="<?php echo $university_array[1] = $university_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="Degree_date_start2" value="<?php echo $Degree_date_start_array[1] = $Degree_date_start_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="Degree_date_end2" value="<?php echo $Degree_date_end_array[1] = $Degree_date_end_array[1] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> التعليم #3 </p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp6" name="Degree3" type="text" placeholder="الدرجة العلمية" value="<?php echo $Degree_array[2] = $Degree_array[2] ?? ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" name="speciality3" placeholder="التخصص" value="<?php echo $speciality_array[2] = $speciality_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" name="university3" placeholder="الجامعة" value="<?php echo $university_array[2] = $university_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="Degree_date_start3" value="<?php echo $Degree_date_start_array[2] = $Degree_date_start_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="Degree_date_end3" value="<?php echo $Degree_date_end_array[2] = $Degree_date_end_array[2] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form3">
                    <div class="inc-pr">
                        <p> الخبرات العملية #1 </p>
                        <i class="fa-solid fa-plus inc inc1 dir"></i>
                    </div>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp1" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput51" type="text" placeholder="Danger" name="HiddenInput51" value="<?php echo $achievements_array[0] = $achievements_array[0] ?? ''; ?>">
                                    <div class="add_fskill g1"><i class="fa-solid fa-plus inc"></i></div>
                                </div>
                                <ul class="resp_skill v1">
                                    <?php
                                    $num = 0;
                                    if (isset($achievements_array_seperated_0)) {
                                        foreach ($achievements_array_seperated_0 as $ach) {
                                            if ($ach && trim($ach)) {
                                                echo "<li class='list-form $num'>$ach";
                                                echo '<div class="add_Pskill A1Kill"><i class="fa-solid fa-minus"></i></div></li>';
                                                ++$num;
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job1" value="<?php echo $jobs_array[0] = $jobs_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company1" value="<?php echo $company_array[0] = $company_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start1" value="<?php echo $job_date_start_array[0] = $job_date_start_array[0] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end1" value="<?php echo $job_date_end_array[0] = $job_date_end_array[0] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> الخبرات العملية #2 </p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp2" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput52" type="text" placeholder="Danger" name="HiddenInput52" value="<?php echo $achievements_array[1] = $achievements_array[1] ?? ''; ?>">
                                    <div class="add_fskill g2"><i class="fa-solid fa-plus inc"></i></div>
                                </div>
                                <ul class="resp_skill v2">
                                    <?php
                                    $num = 0;
                                    if (isset($achievements_array_seperated_1)) {
                                        foreach ($achievements_array_seperated_1 as $ach) {
                                            if ($ach && trim($ach)) {
                                                echo "<li class='list-form $num'>$ach";
                                                echo '<div class="add_Pskill A2Kill"><i class="fa-solid fa-minus"></i></div></li>';
                                                ++$num;
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job2" value="<?php echo $jobs_array[1] = $jobs_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company2" value="<?php echo $company_array[1] = $company_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start2" value="<?php echo $job_date_start_array[1] = $job_date_start_array[1] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end2" value="<?php echo $job_date_end_array[1] = $job_date_end_array[1] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> الخبرات العملية #3 </p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp3" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput53" type="text" placeholder="Danger" name="HiddenInput53" value="<?php echo $achievements_array[2] = $achievements_array[2] ?? ''; ?>">
                                    <div class="add_fskill g3"><i class="fa-solid fa-plus inc"></i></div>
                                </div>
                                <ul class="resp_skill v3">
                                    <?php
                                    $num = 0;
                                    if (isset($achievements_array_seperated_2)) {
                                        foreach ($achievements_array_seperated_2 as $ach) {
                                            if ($ach && trim($ach)) {
                                                echo "<li class='list-form $num'>$ach";
                                                echo '<div class="add_Pskill A3Kill"><i class="fa-solid fa-minus"></i></div></li>';
                                                ++$num;
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job3" value="<?php echo $jobs_array[2] = $jobs_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company3" value="<?php echo $company_array[2] = $company_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start3" value="<?php echo $job_date_start_array[2] = $job_date_start_array[2] ?? ''; ?>">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end3" value="<?php echo $job_date_end_array[2] = $job_date_end_array[2] ?? ''; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form4">
                    <p> #1 المشاريع الشخصية</p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio1" value="<?php echo $project_bio_array[0] = $project_bio_array[0] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name1" value="<?php echo $project_name_array[0] = $project_name_array[0] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start1" value="<?php echo $project_date_start_array[0] = $project_date_start_array[0] ?? ''; ?>">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end1" value="<?php echo $project_date_end_array[0] = $project_date_end_array[0] ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p> #2 المشاريع الشخصية</p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio2" value="<?php echo $project_bio_array[1] = $project_bio_array[1] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name2" value="<?php echo $project_name_array[1] = $project_name_array[1] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start2" value="<?php echo $project_date_start_array[1] = $project_date_start_array[1] ?? ''; ?>">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end2" value="<?php echo $project_date_end_array[1] = $project_date_end_array[1] ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p>المشاريع الشخصية #3</p>
                    <i class="fa-solid fa-plus inc inc1 dir"></i>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio3" value="<?php echo $project_bio_array[2] = $project_bio_array[2] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name3" value="<?php echo $project_name_array[2] = $project_name_array[2] ?? ''; ?>">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start3" value="<?php echo $project_date_start_array[2] = $project_date_start_array[2] ?? ''; ?>">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end3" value="<?php echo $project_date_end_array[2] = $project_date_end_array[2] ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <button class="button" type="submit" name="imageUpload">حفظ</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="box-footer">
                <h3>الصفحات</h3>
                <p>الرئيسية</p>
                <p>الخدمات</p>
                <p>من نحن</p>
            </div>
            <div class="box-footer">
                <h3>الاتصال</h3>
                <p>الأردن-عمان</p>
                <p>لبنان-بيروت</p>
                <p>السعودية-الرياض</p>
                <p>الكويت</p>
                <p>info@Busnisic.com</p>
                <p>065340334</p>
            </div>
            <div class="box-footer">
                <h3>التواصل الاجتماعي</h3>
                <div class="icons-footer">
                    <img class="hvr-wobble-vertical" src="../MEDIA/image/facbook.svg" alt="facebook">
                    <img class="hvr-wobble-vertical" src="../MEDIA/image/instgram.svg" alt="instgram">
                    <img class="hvr-wobble-vertical" src="../MEDIA/image/whatsup.svg" alt="whatsup">
                    <img class="hvr-wobble-vertical" src="../MEDIA/image/linkedin.svg" alt="linkedin">
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="../JS/personalInformation.js" defer></script>
</body>

</html>
