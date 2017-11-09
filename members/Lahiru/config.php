<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erd";

$conn  = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$con.connect_error);
}
?>