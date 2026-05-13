<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Select an Option:<br>
 1 = Add<br>
 2 = Edit<br>
 3 = Delete<br><br>
 Enter Choice: <input type="text" name="choice" value="<?php if(isset($_POST['choice'])) echo htmlspecialchars($_POST['choice']); ?>">
 <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['choice'])) {
    $choice = (int)$_POST['choice'];

    switch ($choice) {
        case 1:
            echo "You selected: Add";
            break;
        case 2:
            echo "You selected: Edit";
            break;
        case 3:
            echo "You selected: Delete";
            break;
        default:
            echo "Invalid choice. Please enter 1, 2, or 3.";
    }
}
?>

</body>
</html>
