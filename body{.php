<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Suas informações: </h2>
        <p>Nome: <?php echo $_POST["nome"]; ?> </p>
        <p>Sobrenome: <?php echo $_POST["sobrenome"]; ?></p>
        <p>Idade: <?php echo $_POST["idade"]; ?></p>
    </div>
</body>
</html>
