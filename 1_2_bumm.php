<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eins, zwei, bumm!</title>
</head>
<body>
    <?php
        for ($i=1; $i<=100; $i++)
        {
            $count = $i;
            echo $i . " - ";
             if (fmod($i, 3) == 0)
            $count = "Bumm";
            if (fmod($i, 5) == 0)
            $count = "Bumm Bumm";
            if (fmod($i, 15) == 0)
            $count = "Bumm Bumm Bumm";
            echo $count . "<br>";            
        }
    ?>
</body>
</html>