<?php
    if (isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && isset($_POST['thirdNumber'])) {
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        $thirdNumber = $_POST['thirdNumber'];

        if ($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
            echo "Maximum number is first - $firstNumber";
        }
        elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
            echo "Maximum number is second - $secondNumber";
        }
        elseif ($thirdNumber > $firstNumber && $thirdNumber > $secondNumber) {
            echo "Maximum number is third - $thirdNumber";
        }
        elseif ($firstNumber > $secondNumber && $firstNumber == $thirdNumber) {
            echo "Maximum number is first - $firstNumber, and third - $thirdNumber";
        }
        elseif ($firstNumber > $thirdNumber && $firstNumber == $secondNumber) {
            echo "Maximum number is first - $firstNumber, and second - $secondNumber";
        }
        elseif ($secondNumber > $firstNumber && $secondNumber == $thirdNumber) {
            echo "Maximum number is second - $secondNumber, and third - $thirdNumber";
        }
        elseif ($thirdNumber > $firstNumber && $thirdNumber == $secondNumber) {
            echo "Maximum number is second - $secondNumber, and third - $thirdNumber";
        }
        else {
            echo "All number equals";
        }
    }
?>