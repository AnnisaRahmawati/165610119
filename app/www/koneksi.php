<?php
  // buat koneksi dengan database mysql
  $host = "db";
  $user = "user";
  $pass = "test";
  $name = "database";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
