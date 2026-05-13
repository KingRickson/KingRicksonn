<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get">
 Enter First Number: <input type="text" name="num1" value="<?php if(isset($_GET['num1'])) echo htmlspecialchars($_GET['num1']); ?>"><br>
 Enter Second Number: <input type="text" name="num2" value="<?php if(isset($_GET['num2'])) echo htmlspecialchars($_GET['num2']); ?>"><br>
 Enter Third Number: <input type="text" name="num3" value="<?php if(isset($_GET['num3'])) echo htmlspecialchars($_GET['num3']); ?>"><br>
 <input type="submit" value="Check Largest">
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
    $num3 = (int)$_GET['num3'];

    // Compare the three numbers
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: $num1";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: $num2";
    } else {
        echo "The largest number is: $num3";
    }
}
?>

</body>
</html>
