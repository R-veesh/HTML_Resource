<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $names = array("Hashan","Shani","Manel");
    echo "Array Element 1" .$names[0]."<br/>";
    echo "All the array elements <br/>--------------<br/>";
        foreach($names as $x){
            echo $x."<br/>";
        }
    //assortative
    $student = array("Name"=> "chanaka","age"=> 20,"contact"=>"0765533495");

    foreach($student as $key => $value){
        echo $key. ":" .$value ."<br/>";
    }
    ?>
</body>
</html>