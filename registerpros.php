<?php
   require_once("Class.php");
   $db = new Data;
   $nim = $_POST["nim"];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $cekuser = $db->query("SELECT * FROM webprog WHERE username = '$username'");
   if($db->numRow($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $simpan = $db->query("INSERT INTO user VALUES('$nim','','','','','','','','')");
       if ($simpan) {
        $hasil = $db->query("INSERT INTO webprog VALUES('','$username','$password', '$nim')");
        if($hasil) {
           echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
         } else {
           echo "<div align='center'>Proses Gagal!</div>";
         } 
       }
        
     }
   }
?>