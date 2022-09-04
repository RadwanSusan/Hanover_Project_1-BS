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
    <title>Admin</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/Admin.css">
    <script type="text/javascript">
        function alert(message) {
            alertify.defaults.glossary.title = 'My Title';
            alertify.alert("Business City", message);
        }
    </script>
</head>

<body>
    <div class="navBar_box">
        <div class="logoBox">
            <a href="home.php"><img src="../MEDIA/Logo(chooseT).svg" alt="logo" class="logo"></a>
            <a href="home.php">Business City</a>
        </div>
    </div>
    <div class="landing-info">
        <div class="container">
            <?php
            $sql = "SELECT username from user_info where ID = " . $_SESSION['ID'] . "";
            $result = mysqli_query($conn, $sql);
            $rowA = mysqli_fetch_assoc($result);
            ?>
            <div class="title"><?php echo $rowA['username']; ?> مرحبا</div>
            <div class="landing-content">
                <div class="square">
                    <div class="info">
                        <h2>معلومات حول الموقع</h2>
                    </div>
                    <?php
                    $result = "SELECT count(*) as total from user_info";
                    $result = mysqli_query($conn, $result);
                    $data = mysqli_fetch_assoc($result);
                    $result2 = "SELECT count(*) as total from courses_form";
                    $result2 = mysqli_query($conn, $result2);
                    $data2 = mysqli_fetch_assoc($result2);
                    $result3 = "SELECT count(*) as total from internship_form";
                    $result3 = mysqli_query($conn, $result3);
                    $data3 = mysqli_fetch_assoc($result3);
                    ?>
                    <ul>
                        <li>عدد المستخدمين : <?php echo $data['total']; ?></li>
                        <li>عدد الاشخاص المسجلين دورات : <?php echo $data2['total']; ?></li>
                        <li>عدد الاشخاص المتدربين : <?php echo $data3['total']; ?></li>
                        <li>عدد الاشخاص قاموا ببناء سيرة ذاتية : <?php echo $data['total']; ?></li>
                    </ul>
                </div>
                <div class="square">
                    <div class="info">
                        <h2>اضافة حساب مشرف</h2>
                    </div>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_admin"])) {
                        $name = $_POST["name"];
                        $pass = $_POST["pass"];
                        $sql = "INSERT INTO user_info (username,password,account_type) VALUES ('$name','$pass','1')";
                        mysqli_query($conn, $sql);
                    }
                    ?>
                    <form class="form1" action="" method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <input type="text" name="name" required />
                                <label class="user-label label1">الأسم</label>
                            </div>
                            <div class="input-box">
                                <input class="pass" type="text" name="pass" required />
                                <label class="user-label label2">كلمة المرور</label>
                            </div>
                        </div>
                        <button type="submit" name="add_admin">اضافة</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="landing-info2">
            <div class="container">
                <div class="landing-content2">
                    <div class="square2">
                        <div class="info">
                            <h2>اضافه فرص تدريب</h2>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitCompany"])) {
                            $companyName = $_POST["companyName"];
                            $companyBio = $_POST["companyBio"];
                            $companyPhone = $_POST["companyPhone"];
                            $companyEmail = $_POST["companyEmail"];
                            $LOGOfile = $_FILES['LOGOfileimg'];
                            $IMGfile = $_FILES['IMGfileimg'];
                            $LOGOName = $_FILES['LOGOfileimg']['name'];
                            $IMGName = $_FILES['IMGfileimg']['name'];
                            $LOGOTmpName = $_FILES['LOGOfileimg']['tmp_name'];
                            $IMGTmpName = $_FILES['IMGfileimg']['tmp_name'];
                            $LOGOfileSize = $_FILES['LOGOfileimg']['size'];
                            $IMGfileSize = $_FILES['IMGfileimg']['size'];
                            $LOGOfileSize = $_FILES['LOGOfileimg']['size'];
                            $IMGfileSize = $_FILES['IMGfileimg']['size'];
                            $LOGOfileError = $_FILES['LOGOfileimg']['error'];
                            $IMGfileError = $_FILES['IMGfileimg']['error'];
                            $LOGOfileExt = explode('.', $LOGOName);
                            $IMGfileExt = explode('.', $IMGName);
                            $LOGOfileActualExt = strtolower(end($LOGOfileExt));
                            $IMGfileActualExt = strtolower(end($IMGfileExt));
                            if ($LOGOfileError === 0) {
                                if ($LOGOfileSize < 100000000) {
                                    $LOGONameNew = uniqid('', true) . "." . $LOGOfileActualExt;
                                    $LOGOfileDestination = '../db_images/' . $LOGONameNew;
                                    move_uploaded_file($LOGOTmpName, $LOGOfileDestination);
                                } else {
                                    echo "<script>alert('Your LOGO file is too big!')</script>";
                                }
                            }
                            if ($IMGfileError === 0) {
                                if ($IMGfileSize < 100000000) {
                                    $IMGNameNew = uniqid('', true) . "." . $IMGfileActualExt;
                                    $IMGfileDestination = '../db_images/' . $IMGNameNew;
                                    move_uploaded_file($IMGTmpName, $IMGfileDestination);
                                } else {
                                    echo "<script>alert('Your IMG file is too big!')</script>";
                                }
                            }
                            $sql = "INSERT INTO company_list (company_name,logo_path,img_path,company_bio,company_phone,company_email) VALUES ('$companyName','$LOGOfileDestination','$IMGfileDestination','$companyBio','$companyPhone','$companyEmail')";
                            mysqli_query($conn, $sql);
                        }
                        ?>
                        <form class="form2" action="" method="post" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
                            <div class="user-details">
                                <div class="input-box">
                                    <input type="text" name="companyName" required />
                                    <label class="user-label2 label3">اسم الشركة</label>
                                </div>
                                <div class="input-box">
                                    <label for="fileimg" class="comp-lab" user-label2 label4>
                                        <p>شعار الشركة</p>
                                        <i class="fa fa-upload"></i>
                                    </label>
                                    <input class="pass" type="file" name="LOGOfileimg" id="fileimg" accept=".jpg,.png,.gif,.jpeg,.svg" hidden />
                                </div>
                                <div class="input-box">
                                    <label for="fileimg2" class="comp-lab2" user-label2 label4>
                                        <p>صورة الشركة</p>
                                        <i class="fa fa-upload"></i>
                                    </label>
                                    <input class="pass" type="file" name="IMGfileimg" id="fileimg2" accept=".jpg,.png,.gif,.jpeg,.svg" hidden />
                                </div>
                                <div class="input-box">
                                    <input class="pass details-company" name="companyBio" type="text" required />
                                    <label class="user-label2 label4 ">تفاصيل الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" name="companyPhone" required />
                                    <label class="user-label2 label4">رقم هاتف الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" name="companyEmail" type="text" required />
                                    <label class="user-label2 label4">ايميل الشركة</label>
                                </div>
                            </div>
                            <button type="submit" name="submitCompany" class="sub-comp">اضافة</button>
                        </form>
                    </div>
                    <div class="square2">
                        <div class="info">
                            <h2>شركات التدريب المدرجة</h2>
                        </div>
                        <ul class="scroll-ul">
                            <?php
                            $sql = "SELECT * FROM company_list";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rowV = mysqli_fetch_assoc($result)) {
                                    echo "<li class='Hanover-company' company_id ='" . $rowV['company_id'] . "'>";
                                    echo "<p>" . $rowV['company_name'] . "</p><i class='fa fa-close companyDelete'></i></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-info2">
            <div class="container">
                <div class="landing-content2">
                    <div class="square2 square2-hight ">
                        <div class="info">
                            <h2>اضافه دورة</h2>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitCourse"])) {
                            $course_name = $_POST["course_name"];
                            $course_bio = $_POST["course_bio"];
                            $course_phone = $_POST["course_phone"];
                            $file = $_FILES['courseimg'];
                            $fileName = $_FILES['courseimg']['name'];
                            $fileTmpName = $_FILES['courseimg']['tmp_name'];
                            $fileSize = $_FILES['courseimg']['size'];
                            $fileError = $_FILES['courseimg']['error'];
                            $fileExt = explode('.', $fileName);
                            $fileActualExt = strtolower(end($fileExt));
                            $ext = $fileActualExt;
                            if ($fileError === 0) {
                                if ($fileSize < 100000000) {
                                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                                    $fileDestination = '../db_images/' . $fileNameNew;
                                    move_uploaded_file($fileTmpName, $fileDestination);
                                } else {
                                    echo "<script>alert('Your file is too big!')</script>";
                                }
                            }
                            $sql2 = "INSERT INTO courses_list (course_name,img_path,course_bio,course_phone) VALUES
                            ('$course_name','$fileDestination','$course_bio','$course_phone')";
                            mysqli_query($conn, $sql2);
                        }
                        ?>
                        <form class="form2" action="" method="post" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
                            <div class="user-details">
                                <div class="input-box">
                                    <input type="text" required name="course_name" />
                                    <label class="user-label2 label3">اسم الدورة</label>
                                </div>
                                <div class="input-box">
                                    <label for="courseLabel"class="comp-lab2" label2 label4>
                                        <p>صورة الدورة</p>
                                        <i class="fa fa-upload"></i>
                                    </label>
                                    <input class="pass" type="file" name="courseimg" id="courseLabel" accept=".jpg,.png,.gif,.jpeg,.svg" hidden />
                                </div>
                                <div class="input-box">
                                    <input class="pass details-company" type="text" required name="course_bio" />
                                    <label class="user-label2 label4 ">تفاصيل الدورة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required name="course_phone" />
                                    <label class="user-label2 label4 phone-label4">رقم هاتف مسوؤل الدورة</label>
                                </div>
                            </div>
                            <button type="submit" name="submitCourse" class="sub-comp">اضافة</button>
                        </form>
                    </div>
                    <div class="square2 square2-hight">
                        <div class="info">
                            <h2> الدورات الحالية</h2>
                        </div>
                        <ul class="scroll2-ul">
                            <?php
                            $sql = "SELECT * FROM courses_list";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rowV = mysqli_fetch_assoc($result)) {
                                    echo "<li class='Hanover-company' course_id='" . $rowV['course_id'] . "'>";
                                    echo "<p>" . $rowV['course_name'] . "</p><i class='fa fa-close courseDelete'></i></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-info3">
            <div class="container">
                <div class="landing-content3">
                    <div class="square3 square3-hight ">
                        <div class="info1">
                            <h2>الأشخاص المسجلين بفرص التدريب</h2>
                        </div>
                        <div class="tableFixHead">
                        <table>
                            <tr>
                                <th>الأيميل</th>
                                <th>رقم الهاتف</th>
                                <th>الشركة</th>
                                <th>الأسم</th>
                            </tr>
                            
                            
                            <?php
                            $sql = "SELECT * FROM internship_form";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rowV = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $rowV['user_email'] . "</td>";
                                    echo "<td>" . $rowV['user_phone_number'] . "</td>";
                                    echo "<td>hanover</td>";
                                    echo "<td>" . $rowV['user_name'] . "</td>";
                                    echo '<td><i class="fa fa-close"></i></td>';
                                    echo "</tr>";
                                }
                            }
                            ?>
                            
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-info3">
            <div class="container">
                <div class="landing-content3">
                    <div class="square3 square3-hight ">
                        <div class="info1">
                            <h2>الأشخاص المسجلين بالدورة</h2>
                        </div>
                        <div class="tableFixHead1">
                        <table>
                            <tr>
                                <th>الأيميل</th>
                                <th>رقم الهاتف</th>
                                <th>الدورة</th>
                                <th>الأسم</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM courses_form";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rowV = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $rowV['user_email'] . "</td>";
                                    echo "<td>" . $rowV['user_phone_number'] . "</td>";
                                    echo "<td>hanover</td>";
                                    echo "<td>" . $rowV['user_name'] . "</td>";
                                    echo '<td><i class="fa fa-close"></i></td>';
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </table>
                        </div>
                    </div>
                </div>
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
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="../JS/Admin.js"></script>
</body>

</html>
