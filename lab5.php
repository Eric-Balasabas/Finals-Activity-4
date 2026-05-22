<?php

$result = "";

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 >= $num2 && $num1 >= $num3) {
        $largest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $largest = $num2;
    } else {
        $largest = $num3;
    }

    $result = "Largest number is: " . $largest;
}

?>

<form method="POST">

    Enter first number:
    <input type="number" name="num1" required>
    <br><br>

    Enter second number:
    <input type="number" name="num2" required>
    <br><br>

    Enter third number:
    <input type="number" name="num3" required>
    <br><br>

    <input type="submit" value="Submit">

</form>
<br>

<?php
echo $result;
?>
