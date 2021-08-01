<?php
    if (isset($_POST['weather'])){
        $weather = $_POST['weather'];
        if ($weather >= -20 && $weather <= 5){
            echo "Today very cold weather.";
        }
        elseif ($weather >= 6 && $weather <= 15){
            echo "Today chilly weather.";
        }
        elseif ($weather >= 16 && $weather <= 20){
            echo "Today warmly weather.";
        }
        elseif ($weather >= 21 && $weather <= 35){
            echo "Today hot weather.";
        }
        elseif ($weather >= 36 && $weather <= 45){
            echo "Today very hot weather.";
        }
        elseif ($weather < -20){
            echo "Today very pizdec cold weather.";
        }
        elseif ($weather > 45){
            echo "Today very pizdec hot weather.";
        }
    }
?>