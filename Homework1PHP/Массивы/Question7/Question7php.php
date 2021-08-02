<?php
if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];

    echo "Revers array = ";
    for ($i = count($numbers); $i > 0; $i--) {
        echo $numbers[$i-1];
    }
}
?>