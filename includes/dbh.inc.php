<?php

$servername = "sql12.freemysqlhosting.net";
$dbuser = "sql12296957";
$dbpwd = "1lDmsrxwwp";
$dbname = "sql12296957";

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn) {
	die("Database Conncetion Failed ".mysql_connect_error());
}
