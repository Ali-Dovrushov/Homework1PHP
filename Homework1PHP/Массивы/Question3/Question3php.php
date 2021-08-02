<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $maxElement = max($numbers);

        echo "Maximum element from array $maxElement";
    }
?>