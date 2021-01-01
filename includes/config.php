<?php
// defining constants for database configuration
define("DB_NAME","winguav");
define("DB_SERVER","127.0.0.1");
define("DB_USER","root");
define("DB_PASS","");

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(mysqli_connect_errno()){
	die("Database connection Failed!".mysqli_connect_error().mysqli_connect_errno());
}
?>