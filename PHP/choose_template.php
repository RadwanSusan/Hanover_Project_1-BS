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
   <title>Choose Template</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="../Hover-css/hover.min.css.css">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
   <link rel="stylesheet" href="../CSS/choose_template.css">
   <script type="text/javascript">
      function alert(message) {
         alertify.defaults.glossary.title = 'My Title';
         alertify.alert("Business City", message);
      }
   </script>
</head>

<body>
   <script>
      AOS.init();
   </script>
   <div class="navBar_box">
      <div class="logoBox">
         <a href="home.php"><img src="../MEDIA/Logo(chooseT).svg" alt="logo" class="logo"></a>
         <a href="home.php">Business City</a>
      </div>
   </div>
   <div class="header">
      <p>كيف تبدأ</p>
   </div>
   <div class="HeaderBoxesContainer">
      <div class="box">
         <div class="serviceBox">
            <div class="service-icon">
               <span><img class="firstImage" src="../MEDIA/hand-pointer{chooseT}.svg" alt="" srcset=""></span>
            </div>
            <h3>اختر القالب الخاص بك</h3>
            <p> تقدم Businicity مجموعة واسعة من قوالب
               السيرة الذاتية التي يمكنك تخصيصها بسهولة.
               امتلك مجانًا أو اشترِ واحدًا مخص</p>
         </div>
      </div>
      <div class="box">
         <div class="serviceBox two">
            <div class="service-icon ">
               <span><img class="secImage" src="../MEDIA/bullet-list{chooseT}.svg" alt="" srcset=""></span>
            </div>
            <h3>قم ببناء سيرتك الذاتية الاحترافية</h3>
            <p>قم بتحرير سيرتك الذاتية في بضع دقائق
               فقط باستخدام أداة لوحة القيادة عبر الإنترنت.
               مع لوحة القيادة الخاصة بنا يمكنك التحكم في
               جميع احتياجاتك في مكان واحد</p>
         </div>
      </div>
      <div class="box">
         <div class="serviceBox three">
            <div class="service-icon ">
               <span><img class="thirdImage" src="../MEDIA/cloud-download{chooseT}.svg" alt="" srcset=""></span>
            </div>
            <h3>قم بتنزيل السيرة الذاتية المثالية</h3>
            <p> قم بتنزيل سيرتك الذاتية بصيغة PDF ،بنقرة
               واحدة ، وأخيراً شارك سيرتك الذاتية مع الآخرين
               بما في ذلك محفظتك الشخصية</p>
         </div>
      </div>
   </div>
   <div class="topWaveBox">
      <img src="../MEDIA/BlackWave(chooseT).svg" alt="" srcset="">
   </div>
   <div class="header2">
      <p>اختر شكل سيرتك الذاتية</p>
   </div>
   <div class="chooseTbox">
      <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="templateBox">
         <img src="../MEDIA/image/SNPimageCV1.png" alt="" srcset="">
         <a href="personalInformation.php?type=1">
            <div class="chooseT">
               <p>إختار</p>
            </div>
         </a>
         <div class="showT">
            <p>عرض النموذج</p>
         </div>
      </div>
      <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="templateBox">
         <img src="../MEDIA/image/SNPimageCV2.png" alt="" srcset="">
         <a href="personalInformation.php?type=2">
            <div class="chooseT">
               <p>إختار</p>
            </div>
         </a>
         <div class="showT">
            <p>عرض النموذج</p>
         </div>
      </div>
      <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="templateBox">
         <img src="../MEDIA/image/SNPimageCV3.png" alt="" srcset="">
         <a href="personalInformation.php?type=3">
            <div class="chooseT">
               <p>إختار</p>
            </div>
         </a>
         <div class="showT">
            <p>عرض النموذج</p>
         </div>
      </div>
   </div>
   <div class="botWaveBox">
      <img src="../MEDIA/BlackWave2(chooseT).svg" alt="" srcset="">
   </div>
   <div class="header">
      <p>طلب محاولة الاتصال المجاني</p>
   </div>
   <div class="contactContainer">
      <div data-aos="fade-down" data-aos-anchor-placement="top-center" class="contactBox">
         <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ContactInfo"])) {
            $email = $_POST["emailUser"];
            $phoneNumber = $_POST["phone"];
            $message2 = $_POST["message5"];
            $sql3 = "INSERT INTO contact_users (email,phone_number,message2) VALUES ('$email','$phoneNumber','$message2')";
            mysqli_query($conn, $sql3);
            echo '<script type="text/javascript">alert("تم إرسال طلبك بنجاح");</script>';
         }
         ?>
         <form action="" method="POST">
            <input type="text" placeholder="الإيميل" name="emailUser" dir="rtl" required>
            <input type="text" placeholder="رقم الهاتف" name="phone" dir="rtl" required>
            <textarea required dir="rtl" id="" cols="30" name="message5" rows="20" placeholder="الرسالة"></textarea>
            <button type="submit" name="ContactInfo">إرسال</button>
         </form>
      </div>
      <img data-aos="fade-down" data-aos-anchor-placement="top-center" src="../MEDIA/contactImg(chooseT).png" alt="" srcset="">
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
   <script src="../JS/choose_template.js"></script>
</body>

</html>
