<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter Age: <input type="text" name="age" value="<?php if(isset($_POST['age'])) echo htmlspecialchars($_POST['age']); ?>"><br>
 Enter Citizenship: <input type="text" name="citizenship" value="<?php if(isset($_POST['citizenship'])) echo htmlspecialchars($_POST['citizenship']); ?>"><br>
 <input type="submit" value="Check Eligibility">
</form>

<?php
if (isset($_POST['age']) && isset($_POST['citizenship'])) {
    $age = (int)$_POST['age'];
    $citizenship = $_POST['citizenship'];

    if ($age >= 18) {
        if (strtolower($citizenship) === "filipino") {
            echo "You are eligible to vote.";
        } else {
            echo "You are not eligible to vote. Citizenship requirement not met.";
        }
    } else {
        echo "You are not eligible to vote. Age requirement not met.";
    }
}
?>

</body>
</html>
