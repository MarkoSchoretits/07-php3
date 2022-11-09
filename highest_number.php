<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highest Number in an Array</title>
</head>
<body>
    <?php
        $array = array();
        for($i=0; $i<10; $i++)
        {
            $r=random_int(1, 100);
            echo$i . ": ";
            echo $r . "<br>";
            array_push($array, $r);
            Print_r($array);
            echo "<br>";
        }
        function highest($array)
        {
            $h=0;
            foreach($array as $value)
            {
                if ($value > $h)
                {
                    $h=$value;
                } 
            }
            return $h;
        }
        $highest = highest($array);

        echo "<br> The highest value is " . $highest;
    ?>
</body>
</html>