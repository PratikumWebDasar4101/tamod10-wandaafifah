<?php
   session_start();

   require_once("Class.php");

   $db = new Data;

   ?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
      <a class="nav-link" id="v-pills-adddata-tab" data-toggle="pill" href="inputdata.php" role="tab" aria-controls="v-pills-adddata" aria-selected="false">Tambah Data</a>
      <a class="nav-link" id="v-pills-logout-tab" data-toggle="pill" href="profile.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lihat Profile</a>
      <a class="nav-link" id="v-pills-logut-tab" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-logout" aria-selected="false">Logout</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>
<table class="table table-sm">
<h3><center>Selamat Data Di Praktikum Webdas</center></h3>
    <tr>
      <td>
        <form action="dashboard.php" method="get">
          <div class="form-inline">
            Cari NIM <input type="text" class="form-control mx-2" name="cari"><button class="btn btn-primary" type="input">CARI</button>
          </div>
          
        </form>
      </td>
    <tr>
      <th>Nama Depan</th>
      <th>Nama Belakang</th>
      <th>NIM</th>
      <th>Kelas</th>
      <th>Hobi</th>
      <th>Genre Film</th>
      <th>Tempat Wisata</th>
      <th>Tanggal Lahir</th>
      <th>E-mail</th>

    </tr>

    <?php
            if (isset($_GET["cari"])) {
              $value = $_GET["cari"];
               $result = $db->query("SELECT * FROM webprog JOIN user USING(nim) WHERE nim like '%$value%'");
             }else {
              $result = $db->query("SELECT * FROM webprog JOIN user USING(nim)");
             }
            $row = $db->numRow($result);
            if ($db->numRow($result) > 0) {
      while ($row = $db->fetchAll($result)) {
        ?>

        <tr>
        <td><?php echo $row['nama_depan']?></td>
        <td><?php echo $row['nama_belakang']?></td>
        <td><?php echo $row['nim']?></td>
        <td><?php echo $row['kelas']?></td>
        <td><?php echo $row['hobi']?></td>
        <td><?php echo $row['genre_film']?></td>
        <td><?php echo $row['tempat_wisata']?></td>
        <td><?php echo $row['tanggal_lahir']?></td>
        <td><?php echo $row['email']?></td>
        </tr>

        <?php
      }
    }else {
      echo "0 Result";
    }
        ?>


</table>

</body>

</html>