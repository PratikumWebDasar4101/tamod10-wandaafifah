<?php
require_once("Class.php");

$db = new Data;

$nama_depan	 		= $_POST["nama_depan"];
$nama_belakang 		= $_POST["nama_belakang"];
$nim				= $_POST["nim"];
$kelas				= $_POST["kelas"];
$hobi				= implode(",", $_POST["hobi"]);
$genre_film			= implode(",", $_POST["genre_film"]);
$tempat_wisata		= implode(",", $_POST["tempat_wisata"]);
$tanggal_lahir		= $_POST["tanggal_lahir"];
$email				= $_POST["email"];
$sql = "UPDATE user SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', kelas='$kelas', hobi='$hobi', genre_film='$genre_film',tempat_wisata ='$tempat_wisata',tanggal_lahir='$tanggal_lahir',email='$email' WHERE nim=$nim";
if ($db->query($sql)) {
    echo "Berhasil mengedit data<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo "Silahkan klik <a href='dashboard.php'>link ini</a> untuk Lihat Data";
?> 