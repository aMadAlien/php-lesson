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

    <!-- function -->
    <?php
        function shop($title, $price, $discount){
            echo "<h2>$title</h2><br> price: $price, you can save $discount <hr>";
        }
        shop("laptop", "5000$", "10%");
        shop("mouse", "200$", "25%");
        shop("table", "3000$", "%");
    ?>

    <!-- return statements -->
    <?php
        function currency($num){
            $euro = round($num / 39.3);
            $usd = round($num / 36.6);
            return "$num uah equals: $euro euro and $usd dollars";
        }
        echo currency("2500");
    ?>
    <hr>
    <!-- IF statements -->
    <?php
        $hasPet = true;
        $likesReading = false;
        if($hasPet){
            echo "Lily has one nice cat";
        } elseif ($likesReading){
            echo "Lily reads every evining";
        } elseif ($hasPet && $likesReading){
            echo "Lily always reads this book for her cat";
        } elseif (! $hasPet){
            echo "Lily doesn't like pats";
        } else {
            echo "Lily hates literature";
        }
    ?>

    <!-- IF statements (con't) -->
    <?php
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >=$num3){
                return $num1;
            } elseif($num2 >= $num1 && $num2 >= $num3){
                return $num2;
            } else {return $num3;}
        }

        echo getMax(32, 645, 34);
    ?>

</body>
</html>