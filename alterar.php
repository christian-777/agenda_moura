<?php
	include "conexao.php";
	include "cabecalho.php";
	
	$id=$_GET["id"];
	$select="SELECT * from entidade where id_entidade='$id'";
	$res = mysqli_query($con, $select) or die(mysqli_error($con));
	while($linha=mysqli_fetch_assoc($res)){
		echo '<fieldset>
				<form>
					<legend>Dados a serem agendados:</legend>
					<label for="nome_altera">Nome:</label>
					<input required="required" type="text" id="nome_altera" name="nome_altera" value="'.$linha["nome"].'"/>
					<br />
					<label for="telefone_altera">Telefone:</label>
					<input required="required" maxlenght="11" type="tel" id="telefone_altera" name="telefone_altera" value="'.$linha["telefone"].'" pattern="\([0-9]{2}\)[\s][0-9]{4}[0-9]{4,5}"/>
					<br />
					<label for="endereco_altera">Endereço:</label>
					<input required="required" type="text" id="endereco_altera" name="endereco_altera" value="'.$linha["endereco"].'"/>
					<br />
					<label for="numero_altera">Numero da casa ou empresa:</label>
					<input required="required" type="number" id="numero_altera" name="numero_altera" value="'.$linha["numero"].'"/>
					<br />
					<label for="bairro_altera">Bairro:</label>
					<input required="required" type="text" id="bairro_altera" name="bairro_altera" value="'.$linha["bairro"].'"/>
					<br />
					<label for="cidade_altera">Cidade:</label>
					<input required="required" type="text" id="cidade_altera" name="cidade_altera" value="'.$linha["cidade"].'"/>
					<br />
					<input type="hidden" name="hidden" id="hidden" value="'.$id.'"/>
					<input type="button" id="alterar_dados" value="Alterar dados"/>
					
				</form>
			</fieldset>';
	}

	include "rodape.php";
?>