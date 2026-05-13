<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get" class="box1">
 Enter a Number: <input type="text" name="number">
 <input type="submit">
</form>

<?php

if (isset($_GET['number'])) {
   $number = (int)$_GET['number'];
     if ($number % 2 == 0) {
        echo "$number is Even<br>";
    } else {
        echo "$number is Odd<br>";
    }
}

?>

</body>
</html>
