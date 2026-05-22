<?php
if (isset($_POST['year'])) {
    $year = $_POST['year'];

    if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
        $result = "Leap Year";
    } else {
        $result = "Not a Leap Year";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>

<h2>Leap Year Checker</h2>

<form method="POST">
    Enter Year: <input type="number" name="year" required>
    <button type="submit">Check</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
