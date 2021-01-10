<?php
    include "dbconnect.php";
    $GLOBALS["dbconnection"] = connectDatabase();

    function formatExperienceBlock($title, $description, $url, $imageRef) {
        echo "<a href='" . $url . "'><div class='experienceBubble'>";
        echo "<img src='" . $imageRef ."' alt='some image'>";
        echo "<div class='experienceSubtitle'>" . $title . "</div>";
        echo "<div class='experienceText'>" . $description . "</div>";
        echo "<div class='experienceLink'>Click here to read more</div>";

        echo "</div></a>";
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
        $sql = "SELECT link FROM experience";
        $result = $GLOBALS["dbconnection"]->query($sql);

        if ($result->num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data = getOpenGraphData($row["link"]);
                formatExperienceBlock($data[0], $data[2], $data[3], $data[4]);
            }
        }
    }
    function printSkills() {
        $sql = "SELECT title, rating FROM skills";
        $result = $GLOBALS["dbconnection"]->query($sql);

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
        else {
            echo "Oops! Something went wrong! Please check back at a later time to see these skills.";
        }

    }
    function printTools() {
        $sql = "SELECT title, rating FROM tools";
        $result = $GLOBALS["dbconnection"]->query($sql);

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
        else {
            echo "Oops! Something went wrong! Please check back at a later time to see these tools.";
        }
    }
    function printLanguages() {
        $sql = "SELECT title, rating FROM languages";
        $result = $GLOBALS["dbconnection"]->query($sql);

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
        else {
            echo "Oops! Something went wrong! Please check back at a later time to see these languages.";
        }
    }

    function closeConnection() {
        closeDatabase($GLOBALS["dbconnection"]);
    }
?>