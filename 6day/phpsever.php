<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:cadetblue">
        <?php
        echo "My First PHP program <br/>";
        print("this is used to display a text");
        //variable
        $name = "John";
        $_number = 10.50;
        $_option = true;
        $score = 400;

        echo "variable <br/>-----------------<br/>";
        echo "text: $name <br/>";
        echo "Float: $_number <br/>";
        echo "Boolean: $_option <br/>";
        echo "Integer: $score <br/>";
        ?>
    </h1>
    <h1 style="color:cadetblue">
        <?php
        echo "constant <br/>-----------------<br/>";
        define("number", 120);
        echo "constant: " . number . "<br/>";
        define("FirstName", "John");
        echo "constant 2: " . FirstName . "<br/>";
        ?>
    </h1>
</body>
</html>