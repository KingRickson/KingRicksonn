<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get" class="box1">
 Enter A Number: <input type="text" name="name">
 <input type="submit">
</form>

<?php

if (isset($_GET['name'])) {
    $number = (int)$_GET['name'];
    if ($number > 0) {
        echo "Positive number\n";
    } elseif ($number < 0) {
        echo "Negative number\n";
    } else {
        echo "Zero\n"; // Optional case
    }
}
?>


</body>
</html>
