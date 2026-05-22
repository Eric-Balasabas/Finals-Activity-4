<?php

$result = "";

if (isset($_POST['grade'])) {

    $grade = $_POST['grade'];

    if ($grade >= 90 && $grade <= 100) {
        $result = "Excellent";
    } elseif ($grade >= 80 && $grade <= 89) {
        $result = "Good";
    } elseif ($grade >= 70 && $grade <= 79) {
        $result = "Average";
    } else {
        $result = "Failed";
    }
}

?>

<form method="POST">
    Enter student's grade:
    <input type="number" name="grade" required>
    <input type="submit" value="Submit">
</form>

<br>

<?php
echo $result;
?>
