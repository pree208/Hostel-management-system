<?php
//$dbuser = "root";
//$dbpass = "pree208";
//$host = "localhost";
//$db = "hostel";
//$mysqli = new mysqli($host, $dbuser, $dbpass, $db);
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "pree208";
$DB_name = "hostel";
try {
  $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $e->getMessage();
}
