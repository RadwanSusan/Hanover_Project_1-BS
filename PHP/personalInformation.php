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
    <link rel="stylesheet" href="../CSS/personalInformation.css">
</head>

<body>
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="../MEDIA/image/Logo.svg" alt="logo">
                <p>business city</p>
            </a>
            <nav>
                <i class="toggle-menu">
                    <img class="image1" src="../MEDIA/image/bi_list.svg" alt="menu">
                </i>
                <ul class="list">
                    <li class="list1"><a href="#" class="hvr-pulse-shrink">تواصل معنا</a></li>
                    <li class="list1"><a href="#" class="hvr-pulse-shrink">من نحن</a></li>
                    <li class="list1"><a href="#" class="hvr-pulse-shrink">خدماتنا</a></li>
                    <li class="Active list1"><a href="#" class="hvr-pulse-shrink">الرئيسية</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="landing-info">
        <div class="container">
            <div class="title">اكتب معلوماتك الشخصية</div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["imageUpload"])) {
                $file = $_FILES['fileimg'];
                $fileName = $_FILES['fileimg']['name'];
                $fileTmpName = $_FILES['fileimg']['tmp_name'];
                $fileSize = $_FILES['fileimg']['size'];
                $fileError = $_FILES['fileimg']['error'];
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                $ext = $fileActualExt;
                $fileDestination = "s";
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
                $speciality = $_POST["speciality"];
                $Degree = $_POST["Degree"];
                $user_bio = $_POST["user_bio"];
                $Degree_date_start = $_POST["Degree_date_start"];
                $Degree_date_end = $_POST["Degree_date_end"];
                $university = $_POST["university"];
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
                $achievements1 = $_POST["HiddenInput51"];
                $achievements2 = $_POST["HiddenInput52"];
                $achievements3 = $_POST["HiddenInput53"];
                $achievements_Combined = [$achievements1, $achievements2, $achievements3];
                $achievements_Combined = join(",", $achievements_Combined);
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
                ('$form_id','$fileDestination', '$user_name' , '$birth_date', '$nationality' ,'$city' , '$user_email' , '$phone_number' , '$speciality' , '$Degree' , '$user_bio' , '$Degree_date_start','$Degree_date_end','$university','$Artistic_skills','$Personal_skills','$hobbies','$user_language','$combinedJobs','$combinedcompanys','$job_date_start_Combined','$job_date_end_Combined','$achievements_Combined','$project_name_Combined','$project_date_start_Combined','$project_date_end_Combined','$project_bio_Combined')";
                mysqli_query($conn, $sql3);
                $sql4 = "UPDATE user_info SET form_id = '$form_id ' WHERE ID = '" . $_SESSION["ID"] . "'";
                $sql5 = "UPDATE user_info SET CV_done = 1 WHERE ID = '" . $_SESSION["ID"] . "'";
                mysqli_query($conn, $sql4);
                mysqli_query($conn, $sql5);
            }
            ?>
            <form class="form1" action="" method="POST" enctype="multipart/form-data">
                <label for="fileimg">
                    <img class="imageCV" src="../MEDIA/image/imageCV.svg" alt="imageCV">
                </label>
                <input type="file" name="fileimg" id="fileimg" accept=".jpg,.png,.gif,jpeg" hidden />
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" name="nationality" placeholder="الجنسية" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="birth_date" placeholder="تاريخ الميلاد" required>
                    </div>
                    <div class="input-box input-box-name ">
                        <input type="text" name="user_name" placeholder="الأسم" required>
                    </div>
                    <div class="input-box input-box-phone">
                        <input type="text" name="phone_number" placeholder="رقم الهاتف" required>
                    </div>
                    <div class="input-box">
                        <input type="email" name="user_email" placeholder="الايميل" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="city" placeholder="المدينة" required>
                    </div>
                    <div class="input-box personal-desc">
                        <input class="row-2" type="text" name="user_bio" placeholder="الوصف الشخصي" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Degree" placeholder="الدرجة العلمية" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="speciality" placeholder="التخصص" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Degree_date_end" placeholder="نهاية التاريخ الدراسي" required>
                    </div>
                    <div class="input-box input-box-start">
                        <input type="text" name="Degree_date_start" placeholder="بداية التاريخ الدراسي" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="university" placeholder="الجامعة" required>
                    </div>
                </div>
                <div class="line"></div>
                <div class="form2">
                    <div class="user-details2">
                        <div class="input-box2">
                            <div class="add-skills_input2">
                                <input class="Artistic_skills_input" type="text" placeholder="المهارات الفنية">
                                <input class="HiddenInput1" type="text" name="HiddenInput1" placeholder="Danger">
                                <div class="add_Askill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="Artistic_skills"></ul>
                        </div>
                        <div class="input-box2">
                            <div class="add-skills_input2">
                                <input class="Personal_skills_input" type="text" placeholder="المهارات الشخصية">
                                <input class="HiddenInput2" name="HiddenInput2" type="text" placeholder="Danger">
                                <div class="add_Pskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="Personal_skills"></ul>
                        </div>
                    </div>
                </div>
                <div class="form5">
                    <div class="user-details5">
                        <div class="input-box5">
                            <div class="add-skills_input2">
                                <input class="important" type="text" placeholder="الهوايات والأهتمامات">
                                <input class="HiddenInput3" name="HiddenInput3" type="text" placeholder="Danger">
                                <div class="add_vskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="important_skill">
                            </ul>
                        </div>
                    </div>
                    <div class="user-details5">
                        <div class="input-box5">
                            <div class="add-skills_input2">
                                <input class="lang" type="text" placeholder="اللغة">
                                <input class="HiddenInput4" name="HiddenInput4" type="text" placeholder="Danger">
                                <div class="add_kskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="lang_skill">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> الخبرات العملية #1 </p>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp1" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput51" type="text" placeholder="Danger" name="HiddenInput51">
                                    <div class="add_fskill g1"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <ul class="resp_skill v1">
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job1">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company1">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start1">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> الخبرات العملية #2 </p>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp2" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput52" type="text" placeholder="Danger" name="HiddenInput52">
                                    <div class="add_fskill g2"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <ul class="resp_skill v2">
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job2">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company2">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start2">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> الخبرات العملية #3 </p>
                    <div class="user-details3">
                        <div class="left-user">
                            <div class="input-box3 threeAria">
                                <div class="add-skills_input2">
                                    <input class="resp3" type="text" placeholder="الإنجازات والمسؤليات">
                                    <input class="HiddenInput53" type="text" placeholder="Danger" name="HiddenInput53">
                                    <div class="add_fskill g3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <ul class="resp_skill v3">
                                </ul>
                            </div>
                        </div>
                        <div class="right-user">
                            <div class="input-box3">
                                <input type="text" placeholder="الوظيفة" name="job3">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="الشركة" name="company3">
                            </div>
                            <div class="input-box3">
                                <input type="text" placeholder="بداية التاريخ" name="job_date_start3">
                            </div>
                            <div class="input-box3 history">
                                <input type="text" placeholder="نهاية التاريخ" name="job_date_end3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form4">
                    <p> #1 المشاريع الشخصية</p>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio1">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name1">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start1">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end1">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p> #2 المشاريع الشخصية</p>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio2">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name2">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start2">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end2">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p>المشاريع الشخصية #3</p>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio3">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name3">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="بداية التاريخ" name="project_date_start3">
                        </div>
                        <div class="input-box4 personal-history">
                            <input type="text" placeholder="نهاية التاريخ" name="project_date_end3">
                        </div>
                    </div>
                </div>
                <button type="submit" name="imageUpload">upload</button>
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
    <script src="../JS/personalInformation.js"></script>
</body>

</html>
