<?php

    include "../database.php";

    if (isset($_POST['add_loket1'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "INSERT INTO loket1 VALUES ('','$nomor_antrian', NOW())") or die(mysqli_error($databaseconn));

        header("location:sukses_loket1.php");
        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['add_loket2'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "INSERT INTO loket2 VALUES ('','$nomor_antrian', NOW())") or die(mysqli_error($databaseconn));

        header("location:sukses_loket2.php");
        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['add_loket3'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "INSERT INTO loket3 VALUES ('','$nomor_antrian', NOW())") or die(mysqli_error($databaseconn));

        header("location:sukses_loket3.php");
        }
        else {
        echo 'Eror Bray';
    }
?>