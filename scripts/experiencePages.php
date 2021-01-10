<?php
    include "dbconnect.php";
    $GLOBALS["dbconnection"] = connectDatabase();

    function printExperience() {
        
    }

    function closeConnection() {
        closeDatabase($GLOBALS["dbconnection"]);
    }
?>