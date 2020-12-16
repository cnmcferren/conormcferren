<?php
    function connectDatabase() {
        $servername = "localhost";
        $username = "root";
        $password = "Superior!12";
        $dbname = "experience";

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