<?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $counter = 0;

        while ($number > 0) {
            $counter += $number % 10;
            $number = (int)($number / 10);
        }
        echo $counter;
    }
?>