<?php
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {
        $result = "Login Successful. Welcome Admin!";
    } else {
        $result = "Login Failed: The username or password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<?php
if (isset($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>
