<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {

        case "+":
            $result = $num1 + $num2;
            break;

        case "-":
            $result = $num1 - $num2;
            break;

        case "*":
            $result = $num1 * $num2;
            break;

        case "/":
            if ($num2 == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;

        default:
            $result = "Invalid operator!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="POST">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>

    Operator:
    <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <br><br>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
