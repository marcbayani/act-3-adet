<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);

            if ($num1 > $num2) {
                echo "The first number ($num1) is greater than the second number ($num2).";
            } elseif ($num1 < $num2) {
                echo "The second number ($num2) is greater than the first number ($num1).";
            } else {
                echo "Both numbers are equal.";
            }
        } else {
            echo "Please enter both numbers.";
        }
    }
    ?>