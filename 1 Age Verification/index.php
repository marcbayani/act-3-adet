<html>
<head>
    <title>Age Verification</title>
</head>
<body>
    <h2>Age Verification</h2>
    <form method="post">
        Enter your age: <input type="text" name="age">
        <input type="submit" name="submit" value="Submit">
    </form>

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
</body>
</html>