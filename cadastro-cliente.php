<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
    <link rel="stylesheet" href="estilos/manager.css">
</head>
<body>

    <body class="text-center">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">FMU - Parking</h3>
                    <nav class="nav nav-masthead justify-content-center">
                        <nav>
                            <ul>
                                <li><a href="index.php">Voltar</a></li>
                                <li><a href="cadastro-veiculo.php">Cadastrar veiculo</a></li>
                                <li><a href="cadastro-entrada.php">Cadastrar entrada</a></li>
                                <li><a href="cadastro-cliente.php">Cadastrar cliente</a></li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
            </header>
    <form action="cadastro-cliente.php" method="post">
        <h1>Cadastrar Cliente</h1>
        <input type="text" name="cli_nome" placeholder="Nome do cliente" required><br>
        <input type="text" name="cli_telefone" placeholder="Fone para contato" required><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>

</html>

<?php
require_once 'banco.php';
$bc = new Banco;
if (isset($_POST['enviar'])) {
    $conc = $bc->conectar();
    $cli_nome = $_POST['cli_nome'];
    $telefone = $_POST['cli_telefone'];
    $sql = "INSERT INTO cliente (cli_nome, cli_telefone) VALUES ('$cli_nome', '$cli_telefone')";
    $bc->query($conc, $sql);
    mysqli_close($conc);
    header("location: cadastro-veiculo.php");
}
?>