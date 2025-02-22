<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> 
    <?php
    
    function CalSum($num){
        $num+=10;
        return $num;
    }
    $val =5;
    echo 'Passing value : $val <br/>';
    $newValue =CalSum($val);
    echo "return : $newValue" 

    ?>
    </h1>
</body>
</html>