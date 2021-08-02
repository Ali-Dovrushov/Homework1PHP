<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $sumOddNumbers = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            if ($i % 2 != 0) {
                $sumOddNumbers += $numbers[$i];
            }
        }

        echo "Sum of elements all odd index = " . $sumOddNumbers;
    }
?>
