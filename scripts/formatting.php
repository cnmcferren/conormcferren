<?php

    function formatBlock($title, $date, $location, $description) {
        echo "<div class='experienceBubble'>";
        echo "<div class='titles'>" . $title . "</div>";
        echo "<div class='subtitles'>" . $location . "</div>";
        echo "<div class='subtitles'>" . $date . "</div>";
        echo "<div class='info'>" . $description . "</div>";
        echo "</div>";
        echo "<br><br>";
    }
    function printExperience() {
        include "dbconnect.php";
        $conn = connectDatabase();

        $sql = "SELECT title, timePeriod, location, description FROM experience";
        $result = $conn->query($sql);

        if ($result->num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                formatBlock($row["title"], $row["timePeriod"], $row["location"], $row["description"]);
            }
        }

        closeDatabase($conn);
    }
?>