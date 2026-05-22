<?php
if (isset($_POST['amount'])) {

    $amount = $_POST['amount'];
    $discount = 0;

    if ($amount >= 1000) {
        $discount = 0.20;
    } elseif ($amount >= 500) {
        $discount = 0.10;
    } else {
        $discount = 0;
    }

    $discountAmount = $amount * $discount;
    $finalPrice = $amount - $discountAmount;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Discount Calculator</title>
</head>
<body>

<h2>Discount Calculator</h2>

<form method="POST">
    Purchase Amount: <input type="number" name="amount" required>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($amount)) {
    echo "<h3>Original Amount: ₱$amount</h3>";
    echo "<h3>Discount: ₱$discountAmount</h3>";
    echo "<h3>Final Price: ₱$finalPrice</h3>";
}
?>

</body>
</html>
