<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="BetterCalculator.php" method="post">
        First value: <input type = "number" name = "num1"><br>
        Second value: <input type = "number" name = "num2"><br>
        Operator: <input type = "text" name = "operator"><br>
        <input type = "submit">
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        if("op" == "+"){
            echo $num1 + $num2;
        }
        else if("op" == "-"){
            echo $num1 - $num2;
        }
        else if("op" == "/"){
            echo $num1 / $num2;
        }
        else if("op" == "*"){
            echo $num1 * $num2;
        }
        else {
            echo "Invalid choice";
        }
    ?>
</body>
</html>