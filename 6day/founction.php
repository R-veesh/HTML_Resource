<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calInput($x,$y)
    {
        return($x+$y);
    }
    function calDiv($x,$y)
    {
        return($x/$y);
    }
    ?>
    <p style="color:crimson; font-size: 20px;">
        <?php
        echo "sum of two number".calInput(25.5,20.25);
        echo "<br>------------------<br>";
        echo "Division fo two number".calDiv(50,26);
        ?>
    </p> 

    <br/>
    <p style="color: darkgreen; font-size: 26px;">
        <?php
        function callsum($i){
            $sum=0;
            for($x=1; $x <=$i; $x++){
                $sum= $sum + $x;
            }
            return $sum;
        }
        ?>
</body>
</html>