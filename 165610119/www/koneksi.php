<?php
$host = "db";	//nama host
$user = "user";	//username phpMyAdmin
$pass = "test";	//password phpMyAdmin
$name = "database";	//nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>