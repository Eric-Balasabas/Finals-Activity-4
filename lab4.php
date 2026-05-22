<?php

$result = "";

if (isset($_POST['number'])) {

    $number = $_POST['number'];

    if ($number % 2 == 0) {
        $result = "Even number";
    } else {
        $result = "Odd number";
    }
}

?>

<form method="POST">
    Enter a number:
    <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>

<br>

<?php
echo $result;
?>
