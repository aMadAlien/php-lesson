<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <!-- my first task -->
    <?php
        echo "<h1>Mile's Site</h1>";
        echo "<hr>";
        echo "<p>This is my site</p>";
    ?>

    <!-- the second task -->
    <?php
        $characterName = "Tom";
        $characterAge = 80;
        echo "There once was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";
    ?>

    <!-- 4 main data types -->
    <?php
        // string
        echo "string";
        // number (Int and decimal)
        echo 54;
        echo 54.4343;
        // boolean
        echo true;
        // null
        echo null;
    ?>

    <!-- working with string -->
    <?php
    $phrase = "Giraffe Academy";
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase);
    $phrase[0] = "D";
    echo $phrase[0];
    echo str_replace("Diraffe","Panda", $phrase);
    echo substr($phrase, 8, 3);
    echo "<hr>"
    ?>

    <!-- working with numbers -->
    <?php
    echo 5 + 9;
    echo 10 % 3;
    echo "<hr>";

    $num = 5;
    $num -= 10;
    
    echo $num * 2;
    echo "<hr>";

    // methods
    echo abs(-100); //100
    echo "<hr>";
    echo pow(2, 4); //16
    echo "<hr>";
    echo sqrt(144); //12
    echo "<hr>";
    echo max(2, 4); //4
    echo "<hr>";
    echo round(3.2); //3
    echo "<hr>";
    echo ceil(3.3); //4
    echo "<hr>";
    echo floor(3.9); //3
    ?>

    <!-- getting user input -->
    <form action="site.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"]?>
    <br>
    Your age is <?php echo $_GET["age"]?>
</body>
</html>