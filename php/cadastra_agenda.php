<?php
    include "conexao.php";
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $endereco=$_POST["endereco"];
	$numero=$_POST["numero"];
	$bairro=$_POST["bairro"];
	$cidade=$_POST["cidade"];

   

    $insert= "INSERT INTO entidade(
                                    nome,
                                    telefone,
                                    endereco,
									numero,
									bairro,
									cidade
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
									?
                                )";


if($stmt = mysqli_prepare($con, $insert)) { 

    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $telefone, $endereco, $numero, $bairro, $cidade);
    

    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>