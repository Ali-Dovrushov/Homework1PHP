<?php
    if (isset($_POST['primeNumber'])) {
        $primeNumber = $_POST['primeNumber'];

        static $primeNumberChecker = true;

        for ($i = 2; $i <= $primeNumber; $i++) {
            if ($primeNumber % $i == 0){
                $primeNumberChecker = true;
                break;
            }
            else {
                $primeNumberChecker = false;
                break;
            }
        }
        if ($primeNumberChecker == true) {
            echo $primeNumber . " isn't a prime number.";
        }
        else {
            echo $primeNumber . " is a prime number.";
        }
    }
?>