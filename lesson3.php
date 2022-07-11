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

    <!-- arrays -->
    <?php
        $colors = array("red", "blue", "brown");
        $colors[4] = "black";
        echo $colors[4];
        echo count($colors);
    ?>

    <!-- checkbox -->
    <form action="lesson3.php" method="post">
        Sofa: <input type="checkbox" name="furniture[]" value="sofa">
        Table: <input type="checkbox" name="furniture[]" value="table">
        Chair: <input type="checkbox" name="furniture[]" value="chair">
        Armchair: <input type="checkbox" name="furniture[]" value="armchair">
        <input type="submit">
    </form>
    <?php
        $furniture = $_POST["furniture"];
        echo $furniture[1];
    ?>

    <!-- asocciative array -->
    <form action="lesson3.php" method="POST">
        <input type="text" name="students">
        <input type="submit">
    </form>
    <?php
        $grades = array("Lena" => "A+", "John" => "B", "Sasha" => "C+", "Mike" => "A");
        echo $grades[$_POST["students"]];
    ?>
</body>
</html>