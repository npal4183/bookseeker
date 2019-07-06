<?php

$servername = "cp-ht-8:3306";
$dbuser = "saintc3e_wp";
$dbpwd = "naresh:wp";
$dbname = "saintc3e_naresh";

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn) {
	die("Database Conncetion Failed ".mysql_connect_error());
}
