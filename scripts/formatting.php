<?php
    include "dbconnect.php";

    function formatExperienceBlock($title, $date, $location, $description, $imageRef) {
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
    function formatSkillsBlock($title, $rating) {
        echo "<td>";
        echo "<span style='float:left;'>" . $title . "</span>";
        $count = 5;
        while ($count > $rating) {
            echo "<span class='fa fa-star empty' style='float:right;'></span>";
            $count = $count - 1;
        }
        while ($count > 0) {
            echo "<span class='fa fa-star filled' style='float:right;'></span>";
            $count = $count - 1;
        }
        echo "</td>";
    }
    function printExperience() {
        $conn = connectDatabase();

        $sql = "SELECT title, imageRef, timePeriod, location, description FROM experience";
        $result = $conn->query($sql);

        if ($result->num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                formatExperienceBlock($row["title"], $row["timePeriod"], $row["location"], $row["description"], $row["imageRef"]);
            }
        }

        closeDatabase($conn);
    }
    function printSkills() {
        $conn = connectDatabase();

        $sql = "SELECT title, rating FROM skills";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 2 == 0) {
                    echo "<tr>";
                }
                formatSkillsBlock($row["title"], $row["rating"]);
                if ($count % 2 == 1) {
                    echo "</tr>";
                }

                $count = $count + 1;
            }
            echo "</table>";
        }

    }
    function printTools() {
        $conn = connectDatabase();

        $sql = "SELECT title, rating FROM tools";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 2 == 0) {
                    echo "<tr>";
                }
                formatSkillsBlock($row["title"], $row["rating"]);
                if ($count % 2 == 1) {
                    echo "</tr>";
                }

                $count = $count + 1;
            }
            echo "</table>";
        }
    }
    function printLanguages() {
        $conn = connectDatabase();

        $sql = "SELECT title, rating FROM languages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($count % 2 == 0) {
                    echo "<tr>";
                }
                formatSkillsBlock($row["title"], $row["rating"]);
                if ($count % 2 == 1) {
                    echo "</tr>";
                }

                $count = $count + 1;
            }
            echo "</table>";
        }
    }
?>