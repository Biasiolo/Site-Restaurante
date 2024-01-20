<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    // Configurações do e-mail
    $destinatario = "biasiolorafael@gmail.com";
    $assunto = "Novo contato do site";

    // Corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    mail($destinatario, $assunto, $corpo);

    // Pode retornar uma resposta se necessário
    echo "E-mail enviado com sucesso!";
} else {
    // Se não for uma solicitação POST, redirecione ou retorne um erro
    header("Location: index.html");
    exit();
}
?>
