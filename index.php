<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter Password: <input type="password" name="password">
 <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['password'])) {
    $fixedPassword = "introtoweb"; 
    $userInput = $_POST['password'];

    if ($userInput === $fixedPassword) {
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
}
?>

</body>
</html>
