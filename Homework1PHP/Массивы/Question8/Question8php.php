<?php
if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];

    $sumOddNumbers = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 != 0) {
            ++$sumOddNumbers;
        }
    }
    echo "Sum all odd elements = " . $sumOddNumbers;
}
?>
