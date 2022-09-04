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
   <title>Internship Search</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="../Hover-css/hover.min.css.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
   <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
   <link rel="stylesheet" href="../CSS/work.css">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
   <div class="topHeaderBox">
      <p>فرص تدريب ميداني</p>
      <img src="../MEDIA/AfterLine.svg" alt="">
   </div>
   <?php
   $sql = "SELECT * FROM company_list";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
      while ($rowV = mysqli_fetch_assoc($result)) {
         echo "<div class='contentBox' company_id='" . $rowV['company_id'] . "'>
      <div class='topBox'>
               <img src='" . $rowV['logo_path'] . "' alt='logo'>
               <p>" . $rowV['company_name'] . "</p>
               </div>
            <div class='topLine'></div>
            <div class='mainBox'>
         <div class='rightBox'>
         <img src='" . $rowV['img_path'] . "'' alt='' srcset=''>
         </div>
         <div class='leftBox'>
         <div class='leftTop'>
         <p class='companyDetails'>" . $rowV['company_bio'] . "</p>
         <p class='phoneNum'>رقم الهاتف : " . $rowV['company_phone'] . "</p>
         <p class='companyEmail'>" . $rowV['company_email'] . "</p>
         </div>
         <div class='leftBot'>
         <div class='buttonsBox'>
         <div class='detailsButton'>التفاصيل</div>
         <div class='companyApplyButton applyButton'>تقديم طلب</div>
         </div>
         </div>
         </div>
         </div>
         </div>
         ";
      }
   }
   ?>
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
   <div class="testbox" style="display:none">
      <div class="header">
         <h1 class="testboxH1">تقديم طلب</h1>
         <i class="fa fa-close"></i>
      </div>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit1"])) {
         $email = $_POST['email'];
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $company_id = $_POST['company_id'];
         $sql = "INSERT INTO internship_form (user_email,user_name,user_phone_number,company_id) values ('$email', '$name', '$phone','$company_id')";
         mysqli_query($conn, $sql);
         echo "<script>alert('تم إرسال طلبك بنجاح');</script>";
      }
      ?>
      <form action="" method="POST">
         <hr>
         <label id="icon" for="name"><i class="icon-envelope"></i></label>
         <input type="text" name="email" id="name" placeholder="الايميل" required />
         <label id="icon" for="name"><i class="icon-user"></i></label>
         <input type="text" name="name" id="name" placeholder="الأسم" required />
         <label id="icon" for="name"><i class="icon-phone"></i></label>
         <input type="text" name="phone" id="name" placeholder="رقم الهاتف" required />
         <button type="submit" name="submit1" class="button">تقديم</button>
         <input type="text" class="company_id_hidden" hidden name="company_id">
      </form>
   </div>
   <script src="../JS/work.js"></script>
</body>

</html>
