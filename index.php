<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter Purchase Amount: <input type="text" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">
 <input type="submit" value="Calculate Discount">
</form>

<?php
if (isset($_POST['amount'])) {
    $amount = (float)$_POST['amount'];

    if ($amount >= 1000) {
        $discount = $amount * 0.20;
        $finalPrice = $amount - $discount;
        echo "Purchase: $amount<br>";
        echo "Discount: 20% ($discount)<br>";
        echo "Final Price: $finalPrice";
    } elseif ($amount >= 500) {
        $discount = $amount * 0.10;
        $finalPrice = $amount - $discount;
        echo "Purchase: $amount<br>";
        echo "Discount: 10% ($discount)<br>";
        echo "Final Price: $finalPrice";
    } else {
        echo "Purchase: $amount<br>";
        echo "No discount applied.<br>";
        echo "Final Price: $amount";
    }
}
?>

</body>
</html>
