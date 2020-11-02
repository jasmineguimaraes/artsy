<?php
if (isset($_POST['nomeCompletoField']) && isset($_POST['emailField']) && isset($_POST['mensagemField'])) {
    $nome = $_POST['nomeCompletoField'];
    $email = $_POST['emailField'];
    $mensagem = $_POST['mensagemField'];
   
    $sql = "insert into atendimento (nomecompleto, email, mensagem) values('$nome', '$email', '$mensagem')";
    $result = $conn->query($sql);
}   

else {
    null;
}
?>