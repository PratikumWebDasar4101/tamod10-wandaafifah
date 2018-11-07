<?php
session_start();
   require_once("Class.php");
   $db = new Data;

    $nim = $_SESSION['nim'];

    $hasil = "DELETE FROM user WHERE nim=$nim";

    if ($db->query($hasil)) {
      session_destroy();
        header("location: login.php");

    }else {

        echo "Error: " . $sql . "<br?" . mysqli_error($conn);

    }

?>