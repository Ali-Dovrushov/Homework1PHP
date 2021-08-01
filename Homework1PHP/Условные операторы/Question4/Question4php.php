<?php
    if (isset($_POST['day'])) {
        $day = (int)$_POST['day'];
        $weekDay = match($day) {
            1 => "Monday",
            2 => "Tuesday",
            3 => "Wednesday",
            4 => "Thursday",
            5 => "Friday",
            6 => "Saturday",
            7 => "Sunday",
            default => "Please choose only one of the 7 days with only number",
        };
        echo $weekDay;
    }
?>