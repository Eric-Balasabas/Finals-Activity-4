<?php

$result = "";

$fixedPassword = "admin123";

if (isset($_POST['password'])) {

    $password = $_POST['password'];

    if ($password == $fixedPassword) {
        $result = "Access Granted";
    } else {
        $result = "Access Denied";
    }
}

?>

<form method="POST">

    Enter password:
    <input type="password" name="password" required>
    <br><br>
    <input type="submit" value="Login">

</form>
<br>

<?php
echo $result;
?>
