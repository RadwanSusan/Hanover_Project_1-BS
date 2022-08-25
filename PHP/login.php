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
   <title>login</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
   <div class="pen-title">
      <h1>تسجيل الدخول السيرة الذاتية</h1>
   </div>
   <div class="container">
      <div class="card"></div>
      <div class="card">
         <h1 class="title">Login</h1>
         <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginSubmit"])) {
            $userName = mysqli_real_escape_string($conn, $_POST["user_name"]);
            $mypassword = mysqli_real_escape_string($conn, $_POST["password"]);
            $sql = "SELECT * FROM user_info WHERE username = '$userName' and password = '$mypassword'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            $_SESSION["ID"] = $row["ID"];
            if ($count == 1) {
               echo "<script>alert('تم تسجيل الدخول بنجاح')</script>";
            } else {
               echo "<script>alert('رقم الطالب او كلمة المرور غير صحيحة')</script>";
            }
         }
         ?>
         <form action="" method="POST">
            <div class="input-container">
               <input type="#{type}" id="#{label}" name="user_name" required="required" />
               <label for="#{label}">Username</label>
               <div class="bar"></div>
            </div>
            <div class="input-container">
               <input type="#{type}" id="#{label}" name="password" required="required" />
               <label for="#{label}">Password</label>
               <div class="bar"></div>
            </div>
            <div class="button-container">
               <button type="submit" name="loginSubmit"><span>Go</span></button>
            </div>
            <div class="footer"><a href="#">Forgot your password?</a></div>
         </form>
      </div>
      <div class="card alt">
         <div class="toggle"></div>
         <h1 class="title">Register
            <div class="close"></div>
         </h1>
         <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["SignUpSubmit"])) {
            $username = $_POST["newUser"];
            $password = $_POST["newPass"];
            $password2 = $_POST["newPass2"];
            $sql2 = "Select * from user_info where username='$username'";
            $result = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_assoc($result);
            $num = mysqli_num_rows($result);
            if ($password === $password2) {
               if ($num == 0) {
                  $sql3 = "INSERT INTO user_info (username,password) VALUES ('$username','$password')";
                  mysqli_query($conn, $sql3);
                  echo '<script type="text/javascript">alert("Account Created Successfully");</script>';
               } else {
                  echo '<script type="text/javascript">alert("Account already exists!");</script>';
               }
            } else {
               echo '<script type="text/javascript">alert("Password does not match!");</script>';
            }
         }
         ?>
         <form action="" method="POST">
            <div class="input-container">
               <input type="#{type}" id="#{label}" name="newUser" required="required" />
               <label for="#{label}">Username</label>
               <div class="bar"></div>
            </div>
            <div class="input-container">
               <input type="#{type}" id="#{label}" name="newPass" required="required" />
               <label for="#{label}">Password</label>
               <div class="bar"></div>
            </div>
            <div class="input-container">
               <input type="#{type}" id="#{label}" name="newPass2" required="required" />
               <label for="#{label}">Repeat Password</label>
               <div class="bar"></div>
            </div>
            <div class="button-container">
               <button type="submit" name="SignUpSubmit"><span>Create</span></button>
            </div>
         </form>
      </div>
   </div>
   <script src="../JS/login.js"></script>
</body>

</html>
