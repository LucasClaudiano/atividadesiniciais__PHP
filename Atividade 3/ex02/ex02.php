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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $id = $_POST["idade"];

        if ($id >= 16) {
            print "Você pode votar.";
        } else {
            print "Você não pode votar.";
        }
    } 
    ?>
</body>
</html>