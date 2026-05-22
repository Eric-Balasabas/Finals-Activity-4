<?php
if (isset($_POST['grade'])) {

    $grade = strtoupper($_POST['grade']);

    switch ($grade) {
        case "A":
            $result = "Excellent";
            break;
        case "B":
            $result = "Very Good";
            break;
        case "C":
            $result = "Good";
            break;
        case "D":
            $result = "Needs Improvement";
            break;
        case "F":
            $result = "Failed";
            break;
        default:
            $result = "Invalid grade. Please enter A, B, C, D, or F.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Description</title>
</head>
<body>

<h2>Grade Description Checker</h2>

<form method="POST">
    Enter Grade (A–F): <input type="text" name="grade" required>
    <button type="submit">Check</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
