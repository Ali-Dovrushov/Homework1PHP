<?php
    if (isset($_POST['sum'])){
        $sum = $_POST['sum'];
        $sum = 0;
        $counter = 0;
        for ($i = 1; $i < 100; $i++){
            if ($i % 2 == 0) {
                $sum += $i;
                ++$counter;
            }
        }
        echo "Summ = " . $sum . ", Counter = " . $counter . "<br/>";
    }
?>