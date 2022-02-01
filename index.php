<!--
    Matt Hogan
    INF 653 A
    Get Parameter Assignment
-->

<?php    
    htmlspecialchars($_GET["firstname"] ?? NULL);
    htmlspecialchars($_GET["lastname"] ?? NULL);
    htmlspecialchars($_GET["age"] ?? NULL);

    $firstName = filter_input(INPUT_GET, "firstname", FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_GET, "lastname", FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, "age", FILTER_SANITIZE_STRING);

    if ($firstName == NULL || $lastName == NULL || $age == NULL) {
        if ($firstName == NULL) {
            echo "First name parameter is not set.<br>";
        }
        if ($lastName == NULL) {
            echo "Last name parameter is not set.<br>";
        }
        if ($age == NULL) {
            echo "Age parameter is not set.<br>";
        }
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Parameter Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <h1>
            <?php echo "Hello, my name is $firstName $lastName." ?>
        </h1>
    </header>
    <main>
        <h2>
            <?php 
                if ($age >= 18) {
                    echo "I am $age years old and I am old enough to vote in the United States.";
                } else {
                    echo "I am $age years old and I am not old enough to vote in the United States.";
                }
            ?>
        </h2>
        <h3>
            <?php 
                $minDays = $age * 365;
                $maxDays = ($age + 1) * 365 - 1;
                echo "I have been alive for $minDays to $maxDays days depending on when my birthday is.";
            ?>
        </h3>
    </main>
    <footer>
        <p>
            <?php
                date_default_timezone_set("America/Chicago");
                $date = date('F j, Y');
                echo "Today's date is $date.";
            ?>
        </p>
    </footer>
</body>
</html>