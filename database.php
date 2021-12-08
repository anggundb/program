<?php
 
// Konfigurasi Database
$host       = 'belajar'; // host
$username   = 'root'; // username database
$password   = '123'; // password database
$dbname     = 'koneksi'; // nama database
 
$db = mysqli_connect($host, $username, $password, $dbname);
 
if ($db) {
    echo "Database Terhubung";
} else {
    echo "Database Error";
}
