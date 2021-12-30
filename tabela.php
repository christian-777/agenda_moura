<?php
	include "conexao.php";
	include "cabecalho.php";
		

	echo '<label for="pesquisa_nome">Pesquisar por nome:</label>
		  <input type="text" id="pesquisa_nome" nome="pesquisa_nome" placeholder="Digite o nome da entidade"/>
		  <button id="pesquisar" name="pesquisar">Pesquisar</button>
		  <br />
		  <br />';
		  
		  

	echo '<table border="1">
		  <thead>
		  <tr style="text-align: center;">
			<td>Nome</td>
			<td>Telefone</td>
			<td>Endereço</td>
			<td>Numero</td>
			<td>Bairro</td>
			<td>Cidade</td>
		  </tr>
		  </thead>
		  <tbody id="tabela">';
	
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
	
	echo '</tbody>
		</table>';

	include "rodape.php";
?>
kshfsh