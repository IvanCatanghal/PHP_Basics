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
        function sayHi ($name, $age){
            echo "Hello $name, your are $age <br>";
        }

        sayHi("Mike", 45);  /*calling the function to be executed */
        sayHi("Kiel", 22);
        sayHi ("Hazel", 60);
    ?>
</body>
</html>