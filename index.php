<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter a Number (1-7): <input type="text" name="day" value="<?php if(isset($_POST['day'])) echo htmlspecialchars($_POST['day']); ?>">
 <input type="submit" value="Check Day">
</form>

<?php
if (isset($_POST['day'])) {
    $day = (int)$_POST['day'];

    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid input. Please enter a number from 1 to 7.";
    }
}
?>

</body>
</html>
