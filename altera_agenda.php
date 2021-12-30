<?php
    include "conexao.php";
	$id=$_POST["id"];
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $endereco=$_POST["endereco"];
	$numero=$_POST["numero"];
	$bairro=$_POST["bairro"];
	$cidade=$_POST["cidade"];
	
	
	$update= "UPDATE entidade SET
                                nome='$nome',
								telefone='$telefone',
								endereco='$endereco',
								numero='$numero',
								bairro='$bairro',
								cidade='$cidade'
								WHERE
								id_entidade='$id'
								";
	mysqli_query($con, $update) or die(mysqli_error($con));
	mysqli_close($con);
?> 