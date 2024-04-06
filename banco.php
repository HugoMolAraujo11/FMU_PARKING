<?php
class Banco
{

    function conectar()
    {
        $conexão = mysqli_connect("localhost", "root", "admin1234", "fmu_parking");
        return $conexão;
    }

    function query($con, $sql)
    {
        mysqli_query($con, $sql);
    }

    // Verifica se a conexão foi estabelecida com sucesso
//if ($con->connect_error) {
 //   die("Erro na conexão: " . $conn->connect_error);
//}
}
