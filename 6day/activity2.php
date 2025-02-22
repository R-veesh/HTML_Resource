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
    function sum($x){
        if($x<1) return 0;
        return array_Sum(range(1,$x));
    }
    echo 'All integer'.sum("5");
    ?>
    </h1>
</body>
</html>