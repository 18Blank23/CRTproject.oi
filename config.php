<?php
session_start();
$host = "remotemysql.com"; /* Host name */
$user = "C6SjdJHEFF"; /* User */
$password = "bRHLoGh2BV"; /* Password */
$dbname = "C6SjdJHEFF"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
