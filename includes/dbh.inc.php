<?php

$servername = "http://saintmtct.com:2082";
$dbuser = "saintc3e_wp";
$dbpwd = "naresh:wp";
$dbname = "saintc3e_naresh";

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn) {
	die("Database Conncetion Failed ".mysql_connect_error());
}
