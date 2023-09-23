<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arr = array(0,1,0,1,1,0,0);
        function deBinarioParaDecimal($numBinario){
            $numDecimal= 0 ; 
            foreach($numBinario as $binario){
                $numDecimal = $numDecimal * 2 + $binario;
            }
            return $numDecimal; 
        }
        $converter = deBinarioParaDecimal($arr); 
        print "O número 0,1,0,1,1,0,0 convetido em decimal é igual á :".$converter;

    ?>
</body>
</html>