<?php

	$host ="us-cdbr-east-05.cleardb.net:3306";
	$bd = "heroku_5d2b1cab6cee9be";
	$usuario = "bece118490a044";
	$senha = "e25429ea";

	$con = mysqli_connect($host,$usuario,$senha,$bd) or die("Erro ao abrir a conexão com o banco de dados.");

	mysqli_set_charset($con, "utf8");
?>