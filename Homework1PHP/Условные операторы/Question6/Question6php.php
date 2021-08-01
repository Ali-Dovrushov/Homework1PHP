<?php
    if (isset($_POST['price'])) {
        $price = $_POST['price'];
        if ($price >= 501 && $price <= 1000) {
            echo  "You have a discount 50$ total: " . $price - 50;
        }
        elseif ($price >= 1001) {
            echo "You have a discount 100$ total: " . $price - 100;
        }
    }
?>
