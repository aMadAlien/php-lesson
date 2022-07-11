<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/index.css">
    <title>lesson 2</title>
</head>
<body>

    <!-- calcutator -->
    <form action="lesson2.php">
        <input type="numper" name="num1">
        <br>
        <input type="numper" name="num2">
        <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>


    <!-- mad libs game -->
    <form action="lesson2.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

    <!-- parameters -->
    <form action="lesson2.php" method="get">
        Name: <input type="text" name="name">
        <br>
        <input type="submit">
    </form>
    <br>

    <?php echo $_GET["name"];?>

</body>
</html>