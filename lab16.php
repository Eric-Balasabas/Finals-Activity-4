<form method="post">
    <label>Enter Traffic Light Color:</label>
    <input type="text" name="color" placeholder="red, yellow, green" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $color = strtolower($_POST['color']); // makes input case-insensitive

    switch ($color) {
        case "red":
            echo "STOP";
            break;

        case "yellow":
            echo "SLOW DOWN";
            break;

        case "green":
            echo "GO";
            break;

        default:
            echo "Invalid color. Please enter red, yellow, or green!";
    }
}
?>
