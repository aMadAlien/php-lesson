<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        $title = "THE TRUTH";
        include "article-header.php";

        $immigrants = 5352;
        $year = 2035;
        include "tools.php";
        article($immigrants, $year);
        echo "<h6>The author: $name, $age</h6>";
    ?>

</body>
</html>