<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">


    </form>

    <?php
        $isMale = true;
        $isTall = true;
        if ($isMale && $isTall){
            echo "Hey man";
        }
        else if ($isMale && !$isTall){ /* use ! for negation */
            echo "You are a short male";
        }
        else if (!$isMale && !$isTall){
            echo "You are tall but not male";
        }
        else{
            echo "Hey Gurlie";
        }
    ?>
</body>
</html>