<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Array with foreach</title>
</head>
<body>
    <?php
        $array = array(1, 1, 2, 3, 5, 8, 13, 21, 34, 55);
        foreach($array as $key=>$value)
        {
            $natural_key=$key+1;
            echo "Fibonacci Number N° " . $natural_key . " is " . $value . "<br>";
        }
    ?>    
</body>
</html>