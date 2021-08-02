<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $minIndex = array_keys($numbers, min($numbers))[0];

        echo "Minimum index from array $minIndex";
    }
?>