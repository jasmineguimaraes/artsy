<?php   
    $servername = "mysql";
    $username = "root";
    $password = "recode";
    $database = "artsy";

    // Criando conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if(!$conn) {
        die("A conexão com o Banco de dados falhou: " . mysqli_connect_error());
    }
    
?>