<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $id = $_POST["idade"];

        if ($id >= 16) {
            $resultado = "Você pode votar.";
        } else {
            $resultado = "Você não pode votar.";
        }
    } 
        $_SESSION["nome"]=$nome; 
        $_SESSION["resultado"]=$resultado;
    ?>

    <?php  
    if (isset($_SESSION["nome"]) && isset($_SESSION["resultado"])) : ?>
        <p><?php print $_SESSION["resultado"]; ?></p>
        <p>Nome: <?php print $_SESSION["nome"]; ?></p>
    <?php endif; ?>
    
    
</body>
</html>