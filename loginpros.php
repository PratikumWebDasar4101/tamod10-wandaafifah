<?php
   session_start();
   require_once("Class.php");

     $db  = new Data;

   $username = $_POST['username'];
   $password = $_POST['password'];
   $nim      = $_POST['nim'];

   $cekuser = $db->query("SELECT * FROM webprog WHERE username = '$username'");
   $hasil = $db->fetchAll($cekuser);
   if($db->numRow($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       $_SESSION['nim'] = $hasil['nim'];
       header('Location:dashboard.php');
     }
   }
?>