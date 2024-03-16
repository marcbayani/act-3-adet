
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['amount'])) {
            $amount = floatval($_POST['amount']);
            $discounted_amount = $amount;

            if ($amount > 1000) {
                $discounted_amount *= 0.9;
            } elseif ($amount >= 500 && $amount <= 1000) {
                $discounted_amount *= 0.95;
            }

            echo "Discounted amount: $" . number_format($discounted_amount, 2);
        } else {
            echo "Please enter the total amount of purchase.";
        }
    }
    ?>