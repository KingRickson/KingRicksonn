<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter Color (red, yellow, green): 
 <input type="text" name="color" value="<?php if(isset($_POST['color'])) echo htmlspecialchars($_POST['color']); ?>">
 <input type="submit" value="Check Action">
</form>

<?php
if (isset($_POST['color'])) {
    $color = strtolower($_POST['color']);

    switch ($color) {
        case "red":
            echo "Stop";
            break;
        case "yellow":
            echo "Ready";
            break;
        case "green":
            echo "Go";
            break;
        default:
            echo "Invalid input. Please enter red, yellow, or green.";
    }
}
?>

</body>
</html>
