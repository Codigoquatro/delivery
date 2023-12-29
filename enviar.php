<?php
include_once("config.php");

$remetente = $email_adm;
$assunto = 'Contato do Site';

$mensagem = mb_convert_encoding('Nome: ' . $_POST['nome'] . "\r\n" . "\r\n" . 'Telefone: ' . $_POST['telefone'] . "\r\n" . "\r\n" . 'Mensagem: ' . "\r\n" . "\r\n" . $_POST['mensagem'], 'UTF-8', 'ISO-8859-1');

$dest = $_POST['email'];
$cabecalhos = "From: " .$dest;

mail($para, $assunto, $mensagem, $cabecalhos);
?>