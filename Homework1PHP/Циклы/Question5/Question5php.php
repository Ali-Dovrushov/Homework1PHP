<?php
    if (isset($_POST['number'])){
        $number = $_POST['number'];

        while ($number > 0) {
            echo $number % 10;
            $number = (int)($number / 10);
        }
    }
?>