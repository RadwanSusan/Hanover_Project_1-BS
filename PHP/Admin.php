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
    <link rel="stylesheet" href="../CSS/Admin.css">
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
            <div class="title">مرحبا عبدالله</div>
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
                        <form class="form2" action="" method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <input type="text" required />
                                    <label class="user-label2 label3">اسم الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4">شعار الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4">صورة الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass details-company" type="text" required />
                                    <label class="user-label2 label4 ">تفاصيل الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4">رقم هاتف الشركة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4">ايميل الشركة</label>
                                </div>
                            </div>
                            <button class="sub-comp">اضافة</button>
                        </form>
                    </div>
                    <div class="square2">
                        <div class="info">
                            <h2> فرص تدريب الحالية</h2>
                        </div>
                        <ul>
                            <li class="Hanover-company">شركة هنوفر</li>
                            <li class="Hanover-company">شركة هنوفر</li>
                            <li class="Hanover-company">شركة هنوفر</li>
                            <li class="Hanover-company">شركة هنوفر</li>
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
                        <form class="form2" action="" method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <input type="text" required />
                                    <label class="user-label2 label3">اسم الدورة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4">صورة الدورة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass details-company" type="text" required />
                                    <label class="user-label2 label4 ">تفاصيل الدورة</label>
                                </div>
                                <div class="input-box">
                                    <input class="pass" type="text" required />
                                    <label class="user-label2 label4 phone-label4">رقم هاتف مسوؤل الدورة</label>
                                </div>
                            </div>
                            <button class="sub-comp">اضافة</button>
                        </form>
                    </div>
                    <div class="square2 square2-hight">
                        <div class="info">
                            <h2> الدورات الحالية</h2>
                        </div>
                        <ul>
                            <li class="Hanover-company">PHP</li>
                            <li class="Hanover-company">PHP</li>
                            <li class="Hanover-company">PHP</li>
                            <li class="Hanover-company">PHP</li>
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
        <div class="landing-info3">
            <div class="container">
                <div class="landing-content3">
                    <div class="square3 square3-hight ">
                        <div class="info1">
                            <h2>الأشخاص المسجلين بالدورة</h2>
                        </div>
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
        <script src="../JS/Admin.js"></script>
</body>

</html>
