<?php
    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];

        $checkerForBubble = true;
        for ($i = 0; ($i < count($numbers)) && $checkerForBubble; $i++) {
            $checkerForBubble = false;

            for ($j = 0; $j < count($numbers) - 1; $j++) {
                if ($numbers[$j + 1] < $numbers[$j]) {
                    $overflow = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j + 1] = $overflow;
                    $checkerForBubble = true;
                }
            }

            echo "\nStep " . $i+1 . " = ";

            for ($k = 0; $k < count($numbers); $k++){
                echo $numbers[$k]." " ;
            }
            echo "<br/>";
        }
    }
?>