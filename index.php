<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter a Number (1-12): <input type="text" name="month" value="<?php if(isset($_POST['month'])) echo htmlspecialchars($_POST['month']); ?>">
 <input type="submit" value="Show Month">
</form>

<?php
if (isset($_POST['month'])) {
    $month = (int)$_POST['month'];

    switch ($month) {
        case 1:
            echo "January";
            break;
        case 2:
            echo "February";
            break;
        case 3:
            echo "March";
            break;
        case 4:
            echo "April";
            break;
        case 5:
            echo "May";
            break;
        case 6:
            echo "June";
            break;
        case 7:
            echo "July";
            break;
        case 8:
            echo "August";
            break;
        case 9:
            echo "September";
            break;
        case 10:
            echo "October";
            break;
        case 11:
            echo "November";
            break;
        case 12:
            echo "December";
            break;
        default:
            echo "Invalid input. Please enter a number from 1 to 12.";
    }
}
?>

</body>
</html>
