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
<!-- first classes lesson -->
<?php 
    class Laptops {
        var $title;
        var $company;
        var $price;

        function __construct($aTitle, $aCompany, $aPrice){
            $this->title = $aTitle;
            $this->company = $aCompany;
            $this->price = $aPrice;
        }

        function isExpensive(){
            if($this->price >= 3000){
                return "$this->title is expensive";
            }
            return "$this->title is not expensive";
        }
    }
    $laptop1 = new Laptops("Super device 3000 | ", "Magic | ", 2560);
    echo $laptop1->title;
    echo $laptop1->company;
    echo $laptop1->price;
    echo "<hr>";

    $laptop2 = new Laptops("Your furure 3.5.0 | ", "Clouds | ", 4000);    
    echo $laptop2->company;
    echo $laptop2->isExpensive();
?>

<!-- second classes lesson -->
<?php
    class Computers{
        public $title;
        private $rating;

        function __construct($aTitle, $aRating){
            $this->title = $aTitle;
            $this->rating = $aRating;
        }

        // set rating value
        function setRating($rating){
            if($rating >= 3){
                echo "The rating is $rating, the device isn't recommended.";
            } else{
                echo "The rating is $rating, the majority recommends it.";
            }
        }

        // return rating value
        function getRating(){
            return $this->rating;
        }
    }

    $computer1 = new Computers("Your best 105", 4.3);
    echo $computer1->getRating();
?>
<hr>
<!-- example of inheritence -->
<?php 
    class Phone{
        public $name;
        function __construct($name){
            $this->name = $name;
        }
        function hasClock(){
            echo "$this->name has built-in clock | ";
        }
        function hasCalc(){
            echo "$this->name has accurate calculator | ";
        }
    }

    class Pearphone extends Phone{
        function isDurable(){
            echo "$this->name is very durable | ";
        }
    }

    $phone = new Phone("iPhone");
    echo $phone->hasClock();

    $pearPhone = new Pearphone("Pear-Phone");
    echo $pearPhone->isDurable();
?>

</body>
</html>