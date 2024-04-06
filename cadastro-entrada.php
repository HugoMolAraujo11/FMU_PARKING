<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Entrada</title>
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

      <div class="clearfix"></div>
      </header>
      <form action="cadastro-entrada.php" method="post">
        <h1>Cadastrar Entrada e Saída</h1>
        <label for="horaentrada">Hora da entrada:</label>
        <input type="time" name="reg_data_entrada" required><br>
        <label for="horasaida">Hora da saida:</label>
        <input type="time" name="reg_data_saida" required><br>
        <input type="submit" value="Enviar" name="enviar">

      </form>

  </body>

</html>

<?php
require_once 'banco.php';
$bc = new Banco;
if (isset($_POST['enviar'])) {
  $conc = $bc->conectar();
  $reg_data_entrada = $_POST['reg_data_entrada'];
  $reg_data_saida = $_POST['reg_data_saida'];
  $sql_reg = "INSERT INTO registro (reg_data_entrada, reg_data_saida, vei_placa, cli_id) VALUES ('$reg_data_entrada', '$reg_data_saida', '$vei_placa', '$cli_id')";
  $bc->query($conc, $sql_reg);
  mysqli_close($conc);
  header("location: listar.php");
}
?>