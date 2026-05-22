<form method="post">
    <label>Choose Menu (1-3):</label>
    <input type="number" name="choice" min="1" max="3" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $choice = $_POST['choice'];

    switch ($choice) {
        case 1:
            echo "You selected: ADD";
            break;
        case 2:
            echo "You selected: EDIT";
            break;
        case 3:
            echo "You selected: DELETE";
            break;
        default:
            echo "Invalid selection!";
    }
}
?>
