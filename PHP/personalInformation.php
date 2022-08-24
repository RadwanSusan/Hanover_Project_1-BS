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
                /////////////////////////////////////////////////////////////
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
                $sql3 = "INSERT INTO cv_form (img_path,user_name,birth_date,nationality,city,user_email,phone_number,speciality,Degree,user_bio,Degree_date_start,Degree_date_end,university,Artistic_skills,Personal_skills,hobbies,user_language) VALUES ('$fileDestination', '$user_name' , '$birth_date', '$nationality' ,'$city' , '$user_email' , '$phone_number' , '$speciality' , '$Degree' , '$user_bio' , '$Degree_date_start','$Degree_date_end','$university','$Artistic_skills','$Personal_skills','$hobbies','$user_language')";
                mysqli_query($conn, $sql3);
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
                    <div class="input-box">
                        <input type="text" name="user_name" placeholder="الأسم" required>
                    </div>
                    <div class="input-box">
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
                        <input type="text" name="Degree_date_end" placeholder="2التاريخ الدراسي" required>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Degree_date_start" placeholder="1التاريخ الدراسي" required>
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
                        <button type="submit" name="imageUpload">upload</button>
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
                        <div class="input-box3 threeAria">
                            <div class="add-skills_input2">
                                <input class="resp" type="text" placeholder="الإنجازات والمسؤليات">
                                <input class="HiddenInput5" type="text" placeholder="Danger" name="HiddenInput51">
                                <div class="add_fskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="resp_skill">
                            </ul>
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الوظيفة" name="job1">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الشركة" name="company1">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_start1">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_end1">
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> #2 الخبرات العملية</p>
                    <div class="user-details3">
                        <div class="input-box3 threeAria">
                            <div class="add-skills_input2">
                                <input class="resp" type="text" placeholder="الإنجازات والمسؤليات">
                                <input class="HiddenInput5" type="text" placeholder="Danger" name="HiddenInput52">
                                <div class="add_fskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="resp_skill">
                            </ul>
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الوظيفة" name="job2">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الشركة" name="company2">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_start2">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_end2">
                        </div>
                    </div>
                </div>
                <div class="form3">
                    <p> #3 الخبرات العملية </p>
                    <div class="user-details3">
                        <div class="input-box3 threeAria">
                            <div class="add-skills_input2">
                                <input class="resp" type="text" placeholder="الإنجازات والمسؤليات">
                                <input class="HiddenInput5" type="text" placeholder="Danger" name="HiddenInput53">
                                <div class="add_fskill"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <ul class="resp_skill">
                            </ul>
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الوظيفة" name="job3">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="الشركة" name="company3">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_start3">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="job_date_end3">
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
                            <input type="text" placeholder="التاريخ" name="project_date_start1">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="project_date_end1">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p> #2 المشاريع الشخصية</p>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio1">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name2">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="التاريخ" name="project_date_start2">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="project_date_end2">
                        </div>
                    </div>
                </div>
                <div class="form4">
                    <p>المشاريع الشخصية #3</p>
                    <div class="user-details4">
                        <div class="input-box4 towAria">
                            <input class="tow-aria" type="text" placeholder="الوصف" name="project_bio1">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="الأسم" name="project_name3">
                        </div>
                        <div class="input-box4">
                            <input type="text" placeholder="التاريخ" name="project_date_start3">
                        </div>
                        <div class="input-box3">
                            <input type="text" placeholder="التاريخ" name="project_date_end3">
                        </div>
                    </div>
                </div>
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
