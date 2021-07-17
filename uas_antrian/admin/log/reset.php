<?php

    include "../../database.php";
    include '../session_check.php';

    if (isset($_POST['reset_loket1'])) {
        
        mysqli_query($databaseconn, "DELETE FROM log_loket1") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket1 DROP id_log") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket1 ADD id_log INT NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST") or die(mysqli_error($databaseconn));
        header("location:log-loket1.php");

        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['reset_loket2'])) {
        
        mysqli_query($databaseconn, "DELETE FROM log_loket2") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket2 DROP id_log") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket2 ADD id_log INT NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST") or die(mysqli_error($databaseconn));
        header("location:log-loket2.php");

        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['reset_loket3'])) {
        
        mysqli_query($databaseconn, "DELETE FROM log_loket3") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket3 DROP id_log") or die(mysqli_error($databaseconn));
        mysqli_query($databaseconn, "ALTER TABLE log_loket3 ADD id_log INT NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST") or die(mysqli_error($databaseconn));
        header("location:log-loket3.php");

        }
        else {
        echo 'Eror Bray';
    }

?>