<?php 
/*
    Programa: model/cliente_view.php 
    Autor: Lucas Matias
    Data: 31/08/2023
*/

$cliente = $_REQUEST[`cidades`];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>codcli</th>
            <th>nome</th>
            <th>endereco</th>
            <th>bairro</th>
            <th>cep</th>
            <th>telefone</th>
            <th>cpf</th>
            <th>ie</th>
        </tr>
        <?php 
            foreach($cliente as $cliente):
        ?> 
        <tr>
            <td><?php print $cliente['CODCLI']?></td>
            <td><?php print $cliente['NOME']?></td>
            <td><?php print $cliente['ENDERECO']?></td>
            <td><?php print $cliente['BAIRRO']?></td>
            <td><?php print $cliente['CEP']?></td>
            <td><?php print $cliente['TELEFONE']?></td>
            <td><?php print $cliente['CPF']?></td>
            <td><?php print $cliente['IE']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>