<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
 Enter First Number: <input type="text" name="num1" value="<?php if(isset($_POST['num1'])) echo htmlspecialchars($_POST['num1']); ?>"><br>
 Enter Second Number: <input type="text" name="num2" value="<?php if(isset($_POST['num2'])) echo htmlspecialchars($_POST['num2']); ?>"><br>
 Enter Operator (+, -, *, /): <input type="text" name="operator" value="<?php if(isset($_POST['operator'])) echo htmlspecialchars($_POST['operator']); ?>"><br>
 <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            echo "Result: $num1 + $num2 = $result";
            break;
        case "-":
            $result = $num1 - $num2;
            echo "Result: $num1 - $num2 = $result";
            break;
        case "*":
            $result = $num1 * $num2;
            echo "Result: $num1 * $num2 = $result";
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $num1 / $num2 = $result";
            } else {
                echo "Error: Division by zero is not allowed.";
            }
            break;
        default:
            echo "Invalid operator. Please use +, -, *, or /.";
    }
}
?>

</body>
</html>
