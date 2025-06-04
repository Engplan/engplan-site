<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $destinatario = "contato@engplanbrasil.com.br";
    $assunto = "Mensagem do site Engplan";
    $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

    $headers = "From: $email\r\nReply-To: $email";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar. Tente novamente.');window.history.back();</script>";
    }
}
?>
