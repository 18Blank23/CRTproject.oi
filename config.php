<?php
session_start();
$host = "sql6.freesqldatabase.com"; /* Host name */
$user = "sql6420409"; /* User */
$password = "jQilRuYtWF"; /* Password */
$dbname = "sql6420409"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
