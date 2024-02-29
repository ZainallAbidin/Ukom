<?php
session_start();

if($_SESSION['level']==""){
    header("location:../index.php?pesan=gagal");
}
?>
<!doctype html>
<html>
  <head>
    <title>Halaman administrator</title>
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="content">