<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:login.php'); }
?>

<title>Form Pendaftaran</title>
<thead>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</thead>
<div align='center'>
  <form action="registerpros.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td>NIM</td><td> : <input name="nim" type="text"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>