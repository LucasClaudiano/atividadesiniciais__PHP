<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matriz1 = [
                    [1, 2],
                    [3, 4]
        ];
        $matriz2 =[
                    [5, 6],
                    [7, 8]
        ];

        function mutiplicamatrizes($matriz1, $matriz2){
            $resultado=[];

            $linhacol = [$matriz1]; 

            for($i = 0 ; $i < $linhacol; $i++){
                
                for($y = 0 ; $y< $linhacol; $y++){
                    $resultado[$i][$y]= 0; 
                    for($z=0; $z<$linhacol; $z++){{
                        $resultado[$i][$y] +=$matriz1[$i][$z] * $matriz2[$z][$y]; 
                    }
                }
            }
            return $resultado; 
        }
        $resultadofunçao = mutiplicamatrizes($matriz1, $matriz2);

        foreach ($resultadofunçao as $linha) {
    echo implode(" ", $linha) . "\n";
}
    }
    ?>
</body>
</html>