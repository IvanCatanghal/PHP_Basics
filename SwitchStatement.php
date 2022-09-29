<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "SwitchStatement.php" method = "post">
        What was your grade?
        <input type = "text" name = "grade"><br>
        <input type = "submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        switch ($grade){
            case "A":
                echo "You did great!";
                break;
            case "B":
                echo "You did good! Keep it up";
                break;
            case "C":
                echo "Try harder next time. alright?";
                break;
            default:
                echo "Invalid Grade";
        }
    ?>
    
</body>
</html>