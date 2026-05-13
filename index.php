<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Username: <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>"><br>
 Password: <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>"><br>
 <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "admin" && $password === "1234") {
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
}
?>

</body>
</html>
