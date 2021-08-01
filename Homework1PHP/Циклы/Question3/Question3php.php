<?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $counter = 1;

        for ($i = 1; $i <= $number; $i++) {
            $counter *= $i;
        }
        echo $counter;
    }
?>