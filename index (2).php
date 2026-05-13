<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get" class="box1">
 Enter your Grade: <input type="text" name="name">
 <input type="submit">
</form>

<?php

if (isset($_GET['name'])) {
    $number = (int)$_GET['name'];
    if ($number > 90 && $number <= 100) {
        echo "90-100 -> Excellent\n";
    } 
    else if ($number > 80 && $number <= 90) {
        echo "80-89 -> Good\n";
    } 
    else if ($number > 70 && $number <= 80) {
        echo "70-79 -> Average\n";
    } 
    else if ($number > 60 && $number <= 70) {
        echo "Below 70 -> Failed\n";
    } 
}

?>

</body>
</html>
