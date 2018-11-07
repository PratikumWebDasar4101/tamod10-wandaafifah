<?php 
session_start();
$nim = $_SESSION["nim"];
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<form action="inputpros.php" method="POST">
    <table align="center">
    	<tr>
    		<td colspan="2" align="center">
    			<h3>Data Baru</h3>
    		</td>
        <tr>
            <td>
                Nama Depan
            </td>
            <td>
                <input type="text" name="nama_depan">
            </td>
        <tr>
            <td>
                Nama Belakang
            </td>
            <td>
                <input type="text" name="nama_belakang">
            </td>
        <tr>
            <td>
                NIM
            </td>
            <td>
                <input type="text" value="<?php echo $nim ?>" disabled>
                <input type="hidden" name="nim" value="<?php echo $nim ?>">
            </td>
        <tr>
            <td>
                Kelas
            </td>
            <td>
                <input type="text" name="kelas">
            </td>
        <tr><td>
            Hobi
        </td>
            <td>
                <input type="checkbox" name="hobi[]" value="belanja">Belanja
                <input type="checkbox" name="hobi[]" value="jalanjalan">Jalan-jalan
                <input type="checkbox" name="hobi[]" value="tidur">Tidur
            </td>
        <tr>
            <td>
                Genre Film
            </td>
            <td>
                <input type="checkbox" name="genre_film[]" value="horror">Horror
                <input type="checkbox" name="genre_film[]" value="anime">Anime
                <input type="checkbox" name="genre_film[]" value="action">Action
                 <input type="checkbox" name="genre_film[]" value="drama">Drama
            </td>
        <tr>
            <td>
                Wisata
            </td>
            <td>
                <input type="checkbox" name="tempat_wisata[]" value="lombok">Lombok
                <input type="checkbox" name="tempat_wisata[]" value="bali">Bali
                <input type="checkbox" name="tempat_wisata[]" value="bandung">Bandung
                <input type="checkbox" name="tempat_wisata[]" value="tanjungselor">Tanjung Selor
                <input type="checkbox" name="tempat_wisata[]" value="jakarta">Jakarta
            </td>
        <tr>
            <td>
                Tanggal Lahir
            </td>
            <td>
                <input type="date" name="tanggal_lahir">
            </td>
        <tr>
            <td>
                E-mail
            </td>
            <td>
                <input type="text" name="email">
            </td>
        <tr>
        	<td colspan="2" align="center">
        		<input type="submit" name="kirim" value="kirim">
        	</td>
        </tr>
    </table>
    </form>
</body>
</html>