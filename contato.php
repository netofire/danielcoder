<?php

if (!isset($_POST) || !count($_POST))
	exit;

$dados = $_POST;
$retorno = array();

foreach ($_POST as $k => $v) {
	$dados[$k] = trim(strip_tags($v));
}

if (!isset($dados['name']) || !isset($dados['email']) || !isset($dados['message'])) {
	exit;
} 

if (empty($dados['name']) || empty($dados['email']) || empty($dados['message']) 
		|| !preg_match('/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/', $dados['email'])) {
	$retorno['status'] = false;
} else {
	$destino = 'netofire@netofire.com';
	$assunto = 'Mensagem enviada do site';
	$headers = 'From: ' . strtolower($dados['email']) . "\r\n" .'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf8' . "\r\n";
	$mensagem = '<html>
<head>
 <title>Mensagem enviada através do site</title>
</head>
<body><p>Mensagem enviada através do site:<br><br>
Nome: <b>' . $dados['name'] . '</b><br>
E-mail: <b>' . strtolower($dados['email']) . '</b><br>
Mensagem: <b>' . $dados['message'] . '</b><br><br>
IP: '. $_SERVER['REMOTE_ADDR'] . '<br>
Data: ' . date("d/m/Y H:i") . '</p></body></html>';
	
	if (mail($destino, $assunto, $mensagem, $headers)) {
		$retorno['status'] = true;
	} else {
		$retorno['status'] = false;
	}
	
	print json_encode($retorno);
}