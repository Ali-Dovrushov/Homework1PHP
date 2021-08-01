<?php
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
        if ($year >= 1000 && $year <= 9999) {
            $anniversary = $year / 100;
            echo "Anniversary: " . (int)++$anniversary;
        } else {
            echo "Please enter 4 digit number!";
        }
    }
?>