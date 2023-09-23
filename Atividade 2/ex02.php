<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function numerosPrimos($numero){
            $temDivisores=0;
            for($i=2; $i<=$numero/2; $i++){
                if($numero % $i == 0 ){
                    $temDivisores = 1; 
                    break; 
                }
            }
            if($numero > 1 && !$temDivisores){
                return true; 
            }else{
                return false; 
            }
        }


        $arquivo = fopen("numerosprimos.txt", "w"); 

        if($arquivo){
            $contador = 0 ; 
            $numero >1;

            while($contador<=20){
                if (numerosPrimos($numero)){
                    fwrite($arquivo, $numero . ",");
                    $contador++;
                }
                $numero++; 
            }
            fclose($arquivo);
        }
    ?>
</body>
</html>