<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function MDCEuclides($num1, $num2){
            if($num2 === 0 ){
                return $num1; 
            }
            return MDCEuclides($num2, $num1 % $num2); 
        }
        $num1 = 48;
        $num2 = 18;
        $resultado= MDCEuclides($num1, $num2); 

        print"O MDC é :" .$resultado; 

    ?>
</body>
</html>