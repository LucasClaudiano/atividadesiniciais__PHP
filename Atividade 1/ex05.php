<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = [35,70,1,9,6,25,12]; 

        rsort($numeros);
        foreach($numeros as $ordenado){
            print $ordenado." ";
        }
        ?>
</body>
</html>