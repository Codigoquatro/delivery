<?php
include_once("config.php");

// Certifique-se de que $email_adm está definido em config.php
if (isset($email_adm)) {
    // Use $email_adm como remetente
    $remetente = $email_adm;

    // Assunto do e-mail
    $assunto = 'Contato do Site';

    // Construa a mensagem com quebras de linha
    $mensagem = "Nome: {$_POST['name']}\r\n\r\nTelefone: {$_POST['telefone']}\r\n\r\nMensagem:\r\n\r\n{$_POST['mensagem']}";

    // Destinatário do e-mail
    $dest = $_POST['email'];

    // Cabeçalhos
    $cabecalhos = "From: $dest\r\n";
    $cabecalhos .= "Reply-To: $dest\r\n";
    $cabecalhos .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Envie o e-mail
    mail($remetente, $assunto, $mensagem, $cabecalhos);
} else {
    // Se $email_adm não estiver definido, lide com isso de acordo com sua lógica
    echo "Erro: Endereço de e-mail do administrador não configurado.";
}
?>