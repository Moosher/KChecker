<?php
	header("Access-Control-Allow-Origin:*");
	require 'database.php';
	
	if (!empty($_GET)) {

		$estado = $_GET['estado'];
		$cidade = $_GET['cidade'];
		$bairro = $_GET['bairro'];
		$logradouro = $_GET['logradouro'];
		$cep = $_GET['cep'];
		$dataBusca = date("Y-m-d");

		if($_GET['complemento'] != "undefined"){
			$complemento = $_GET['complemento'];
		
		}else{
			$complemento = "Complemento não encontrado";
		}

		$pdo = Database::connect();
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO address (estado, cidade, bairro, logradouro, complemento, cep, dataBusca) values(?, ?, ?, ?, ?, ?, ?)";
	    $q = $pdo->prepare($sql);
	    $q->execute(array($estado, $cidade, $bairro, $logradouro, $complemento, $cep, $dataBusca));
	    Database::disconnect();
	    header("Location: index.php");	
	}
?>