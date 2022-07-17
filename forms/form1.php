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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        Website: <input type="text" name="website">
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>

        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
    </form>
    <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        // Notice that at the start of the script, we check whether the form has been submitted
        // using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been
        // submitted - and it should be validated. If it has not been submitted,skip the validation
        // and display a blank form.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>
</body>
</html>