<?php
if(isset($_POST['firstNumber']) && ($_POST['secondNumber']))
{
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];

    if ($firstNumber > 0 && $secondNumber > 0 ){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
    elseif ($firstNumber < 0 && $secondNumber < 0){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
    elseif ($firstNumber < 0 && $secondNumber > 0){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
    elseif ($firstNumber > 0 && $secondNumber < 0){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
    elseif ($firstNumber == 0 && $secondNumber > 0){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
    elseif ($firstNumber == 0 && $secondNumber < 0){
        $result = $firstNumber / $secondNumber;
        echo "Result = $result";
    }
}
?>