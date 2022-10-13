<?php
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];

//https://stackoverflow.com/questions/1483497/split-string-by-new-line-characters
$mensagem_array = preg_split("/\r\n|\n|\r/", $mensagem);

$mensagem = "";
foreach ($mensagem_array as &$value) {
    $mensagem .= $value . "<br>";
}

$to = "comercial@alemanhabebidas.com.br";
$subject = "Contato de cliente";

$message = "<b>Dados do cliente:</b>";
$message .= "<br><br>";
$message .= "Nome: " . $nome . "<br>";
$message .= "E-mail: " . $email . "<br>";
$message .= "Nome: " . $telefone . "<br><br>";
$message .= "Mensagem:<br>" . $mensagem;

$header = "From:comercial@alemanhabebidas.com.br \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);
?>