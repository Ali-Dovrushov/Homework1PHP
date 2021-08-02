<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $minElement = min($numbers);

        echo "Minimum element from array $minElement";
    }
?>