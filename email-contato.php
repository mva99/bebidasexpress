<?php
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];

$to = "comercial@alemanhabebidas.com.br";
$subject = "Contato de cliente";

$message = "<b>Dados do cliente:</b>";
$message .= "<br><br>";
$message .= "Nome: " . $nome . "<br>";
$message .= "E-mail: " . $email . "<br>";
$message .= "Nome: " . $telefone . "<br>";
$message .= "Mensagem: " . $mensagem . "<br>";

$header = "From:comercial@alemanhabebidas.com.br \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);
?>