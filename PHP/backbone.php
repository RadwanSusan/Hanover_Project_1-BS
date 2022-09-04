<?php
include_once "connection.php";
session_start();

if (isset($_POST['deleteCompany'])) {
   $company_id = $_POST['company_id'];
   $sql = "DELETE FROM company_list WHERE company_id = $company_id";
   mysqli_query($conn, $sql);
}
if (isset($_POST['deleteCourse'])) {
   $course_id = $_POST['course_id'];
   $sql = "DELETE FROM courses_list WHERE course_id = $course_id";
   mysqli_query($conn, $sql);
}
if (isset($_POST['deleteIntern'])) {
   $form_id = $_POST['form_id'];
   $sql = "DELETE FROM internship_form WHERE form_id = $form_id";
   mysqli_query($conn, $sql);
}
if (isset($_POST['deleteStudent'])) {
   $form_id = $_POST['form_id'];
   $sql = "DELETE FROM courses_form WHERE form_id = $form_id";
   mysqli_query($conn, $sql);
}
