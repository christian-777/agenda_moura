<?php
	include "conexao.php";
	
	$select="SELECT * from entidade";
	$res = mysqli_query($con, $select) or die(mysqli_error($con));
	while($linha=mysqli_fetch_assoc($res)){
		echo '
			  <tr>
				<td>'.$linha["nome"].'</td>
				<td>'.$linha["telefone"].'</td>
				<td>'.$linha["endereco"].'</td>
				<td>'.$linha["numero"].'</td>
				<td>'.$linha["bairro"].'</td>
				<td>'.$linha["cidade"].'</td>
				<td><a href="alterar.php?id='.$linha["id_entidade"].'"><button>Alterar</button></a></td>
				<td><button onclick="deleta('.$linha["id_entidade"].')">Deletar</button></td>
			 </tr>
			 ';
	}
?>