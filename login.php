<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<form action="loginpros.php" method="post">
  <table align="center">
    <center><h3>LOGIN</h3></center>
    <tr>
      <td>
      Username
      </td>
      <td>
       : <input name="username" type="text">
      </td>
    </tr>
  <tr>
    <td>
    Password
    </td>
    <td>
    : <input name="password" type="password">
    </td>
  </tr>
  <tr>
    <td colspan="2" align="right">
      <input value="Login" type="submit">
      <input value="Batal" type="reset">
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      Tidak Punya akun ? <a href="register.php"><b>Daftar</b></a>
    </td>
  </tr>
  </table>
</form>
</body>
</html>