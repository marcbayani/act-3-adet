<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post">
        Enter your score (out of 100): <input type="text" name="score">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['score'])) {
            $score = intval($_POST['score']);

            if ($score >= 90 && $score <= 100) {
                echo "Your grade is A.";
            } elseif ($score >= 80 && $score <= 89) {
                echo "Your grade is B.";
            } elseif ($score >= 70 && $score <= 79) {
                echo "Your grade is C.";
            } elseif ($score >= 60 && $score <= 69) {
                echo "Your grade is D.";
            } elseif ($score < 60) {
                echo "Your grade is F.";
            } else {
                echo "Invalid score entered.";
            }
        } else {
            echo "Please enter your score.";
        }
    }
    ?>
</body>
</html>
