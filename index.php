<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter Letter Grade (A-F): <input type="text" name="grade" value="<?php if(isset($_POST['grade'])) echo htmlspecialchars($_POST['grade']); ?>">
 <input type="submit" value="Check Grade">
</form>

<?php
if (isset($_POST['grade'])) {
    $grade = strtoupper($_POST['grade']);

    switch ($grade) {
        case "A":
            echo "Excellent";
            break;
        case "B":
            echo "Good";
            break;
        case "C":
            echo "Average";
            break;
        case "D":
            echo "Below Average";
            break;
        case "F":
            echo "Fail";
            break;
        default:
            echo "Invalid input. Please enter A, B, C, D, or F.";
    }
}
?>

</body>
</html>
