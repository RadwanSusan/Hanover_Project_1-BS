<?php
$servername = $_SERVER['SERVER_NAME'];
$conn = new mysqli($servername, "root", "", "business_city");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
