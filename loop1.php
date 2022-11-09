<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop 1</title>
</head>
<body>
    <?php
        for($i=0; $i<10; $i++)
        echo "forMarko " . $i . "<br>";
        
        $j=0;
        while($j<10)
        {
            echo "whileMarko" . $j . "<br>";
            $j++;
        };

        $k=0;
        do{
            $k++;
            echo "doMarko" . $k . "<br>";
        } while ($k<10);

    ?>
</body>
</html>