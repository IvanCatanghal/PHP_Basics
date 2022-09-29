<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                echo "First value is bigger";
                return $num1;
            }
            else if ($num2 >= $num3 && $num2 >= $num1){
                echo "Second value is bigger";
                return $num2;
            }
            else return $num3;
        }

        echo getMax (100, 90, 110);

    ?>
</body>
</html>