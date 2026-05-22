<?php
if (isset($_POST['day'])) {

    $day = $_POST['day'];

    switch ($day) {
        case 1:
            $result = "Monday";
            break;
        case 2:
            $result = "Tuesday";
            break;
        case 3:
            $result = "Wednesday";
            break;
        case 4:
            $result = "Thursday";
            break;
        case 5:
            $result = "Friday";
            break;
        case 6:
            $result = "Saturday";
            break;
        case 7:
            $result = "Sunday";
            break;
        default:
            $result = "Invalid input. Please enter a number from 1 to 7 only.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>

<h2>Day of the Week Finder</h2>

<form method="POST">
    Enter number (1–7): <input type="number" name="day" required>
    <button type="submit">Check</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
