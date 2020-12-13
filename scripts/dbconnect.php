<?php
    function connectDatabase() {
        $servername = "localhost";
        $username = "conormcf_root";
        $password = "Superior!12";
        $dbname = "conormcf_experience";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function closeDatabase($conn) {
        $conn->close();
    }
?>