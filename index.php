<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get">
 Enter a Year: <input type="text" name="year" value="<?php if(isset($_GET['year'])) echo htmlspecialchars($_GET['year']); ?>">
 <input type="submit" value="Check">
</form>

<?php
if (isset($_GET['year'])) {
    $year = (int)$_GET['year'];
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a Leap Year";
    } else {
        echo "$year is NOT a Leap Year";
    }
}
?>

</body>
</html>
