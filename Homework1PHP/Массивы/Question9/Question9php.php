<?php
    if (isset($_POST['numbers1'])) {
        $numbers1 = $_POST['numbers1'];

        $numbers2 = [];
        $counter = 0;
        $checker = 1;
        $checkerForOddEvenArray = 1;

        if (count($numbers1) % 2 != 0) {
            $checkerForOddEvenArray = 1;
            for ($i = 0; $i < count($numbers1); $i++) {
                if ($i < count($numbers1) / 2) {
                    $numbers2[count($numbers1) / 2 + $checkerForOddEvenArray] = $numbers1[$i];
                    $checkerForOddEvenArray++;
                }
                elseif ($i > count($numbers1) / 2) {
                    $numbers2[$counter] = $numbers1[$i];
                    $counter++;
                }
                else {
                    $numbers2[$i] = $numbers1[$i];
                }
            }
        }

        elseif (count($numbers1) % 2 == 0) {
            $checkerForOddEvenArray = 0;
            for ($i = 0; $i < count($numbers1); $i++) {
                if ($i < count($numbers1) / 2) {
                    $numbers2[count($numbers1) / 2 + $checkerForOddEvenArray] = $numbers1[$i];
                    $checkerForOddEvenArray++;
                }
                elseif ($i > count($numbers1) / 2 - 1) {
                    $numbers2[$counter] = $numbers1[$i];
                    $counter++;
                }
                elseif ($i == count($numbers1) / 2 + 1) {
                    $numbers2[$i] = $numbers1[$i];
                }
            }
        }

        foreach ($numbers2 as $elements) {
            echo "sal" . $numbers2;
        }
    }
?>