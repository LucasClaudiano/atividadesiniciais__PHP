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
            $arr = array(1,2,3,4,5,6,7,8,9,10);
            $somaNumeros = 0; 

            $tamarray = count($arr); 

            for($i = 0; $i<$tamarray; $i++){
                if($arr[$i]%2 ==0){
                    $somaNumeros += $arr[$i]; 
                }
            }
            print "Soma dos números pares = ".$somaNumeros;
        ?>
    </h1>
</body>
</html>