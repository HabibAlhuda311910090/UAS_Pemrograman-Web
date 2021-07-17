<?php

    include "../database.php";
    include 'session_check.php';


    if (isset($_POST['delete_loket1'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "DELETE FROM loket1 WHERE nomor_antrian = '$nomor_antrian'") or die(mysqli_error($databaseconn));

        header("location:admin-loket1.php?antrian=show");
        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['delete_loket2'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "DELETE FROM loket2 WHERE nomor_antrian = '$nomor_antrian'") or die(mysqli_error($databaseconn));

        header("location:admin-loket2.php?antrian=show");
        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['delete_loket3'])) {
        $nomor_antrian = $_POST['nomor_antrian'];

        mysqli_query($databaseconn, "DELETE FROM loket3 WHERE nomor_antrian = '$nomor_antrian'") or die(mysqli_error($databaseconn));

        header("location:admin-loket3.php?antrian=show");
        }
        else {
        echo 'Eror Bray';
    }
?>