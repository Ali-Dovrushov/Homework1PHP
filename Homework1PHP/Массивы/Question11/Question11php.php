<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $numbers[0] = 0;
        $numbers[1] = 1;

        for ($i = 2; $i < count($numbers); $i++) {
            $numbers[$i] = $numbers[$i - 1] + $numbers[$i - 2];
        }

        foreach ($numbers as $elem) {
            echo " " . $elem;
        }
    }
?>
