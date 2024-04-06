<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Veiculos</title>
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
            <form action="cadastro-veiculo.php" method="post">
                <h1>Cadastrar Veículos</h1>
                <input type="text" name="vei_placa" placeholder="Placa do veiculo"><br>
                <input type="text" name="vei_modelo" placeholder="Modelo do veiculo"><br>
                <input type="text" name="vei_cor" placeholder="Cor do veiculo"><br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
    </body>

</html>


<?php
require_once 'banco.php';
$bc = new Banco;
if (isset($_POST['enviar'])) {
    $conc = $bc->conectar();
    $vei_modelo = $_POST['vei_modelo'];
    $vei_placa = $_POST['vei_placa'];
    $vei_cor = $_POST['vei_cor'];
    $sql = "INSERT INTO veiculo (vei_placa, vei_cor, vei_modelo) VALUES ('$vei_placa', '$vei_cor', '$vei_modelo)";
    $bc->query($conc, $sql);
    mysqli_close($conc);
    header("location: cadastro-entrada.php");
}
?>