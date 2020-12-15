<?php

    function formatBlock($title, $date, $location, $description, $imageRef) {
        echo "<div class='flipcard'>";
        echo "<div class='flipcard-inner'>";
        echo "<div class='flipcard-front' style='background-image:url(" . $imageRef . ")'>";
        echo "<h1>" . $title . "</h1>";
        echo "<h2>" . $location . "</h2>";
        echo "</div>";
        echo "<div class='flipcard-back'>";
        echo "<div style='font-weight:700'>" . $date . "</div><br>";
        echo "<div>" . $description . "</div>";
        echo "</div>";
        echo "</div></div>";
    }
    function printExperience() {
        include "dbconnect.php";
        $conn = connectDatabase();

        $sql = "SELECT title, imageRef, timePeriod, location, description FROM experience";
        $result = $conn->query($sql);

        if ($result->num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                formatBlock($row["title"], $row["timePeriod"], $row["location"], $row["description"], $row["imageRef"]);
            }
        }

        closeDatabase($conn);
    }
?>