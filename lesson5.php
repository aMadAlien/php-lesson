<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/index.css">
    <title>Document</title>
</head>
<body>

    <!-- switch statements -->
    <form action="lesson5.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amaizing";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL" ;
                break;
            default:
                echo "Invalid Garde";
        }
    ?>
<hr>
    <!-- while loop -->
    <?php
        $index = 1;
        while($index <= 10){
            echo "$index <br>";
            $index++;
        }
    ?>
    <!-- do while loop -->
    <?php
        $index = 2;
        do{
            echo "$index <br>";
            $index +=2;
        }while($index <= 10);
    ?>
<hr>
    <!-- for loop -->
    <?php
        $colors = array("red", "green", "brown", "black", "blue", "yellow");
        for($i = 0; $i <= count($colors); $i++){
            echo "$colors[$i] <br>";
        }
    ?>

    <!-- improved calculator -->
    <form action="projects.php" method="post">
        First number: <input type="number" name="num1" step="0.001">
        Operatop: <input type="text" name="op">
        Second number: <input type="number" name="num2" step="0.001">
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+"){
            echo $num1 + $num2;
        } elseif ($op == "-"){
            echo $num1 - $num2;
        } elseif ($op == "/"){
            echo $num1 / $num2;
        } elseif ($op == "*"){
            echo $num1 * $num2;
        } else {
            echo "Invalid operator";
        }
    ?>

</body>
</html>