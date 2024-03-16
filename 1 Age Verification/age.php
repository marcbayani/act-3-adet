<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['age'])) {
            $age = intval($_POST['age']);
            if ($age >= 18) {
                echo "You are old enough to enter.";
            } else {
                echo "You are too young to enter.";
            }
        } else {
            echo "Please enter your age.";
        }
    }
    ?>