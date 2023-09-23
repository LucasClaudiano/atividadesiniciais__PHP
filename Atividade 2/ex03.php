<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = fopen("somadenumeros.txt", "r"); 

        if($file){
            $numeros = []; 

            while(($linhas = fgets($file))!==false){
                $numeros[] = intval($line); 
            }
            fclose($file); 
            $soma = array_sum($numeros); 
            
        }
    ?>
</body>
</html>