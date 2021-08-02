<?php
if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];

    $maxIndex = array_keys($numbers, max($numbers))[0];

    echo "Minimum index from array $maxIndex";
}
?>