<?php
	include "cabecalho.php";
?>
		<fieldset>
			<form>
				<legend>Dados a serem agendados:</legend>
				<label for="nome">Nome:</label>
				<input required="required" type="text" id="nome" name="nome" placeholder="Insira seu nome ou de sua empresa"/>
				<br />
				<label for="telefone">Telefone:</label>
				<input required="required" maxlenght="11" type="tel" id="telefone" name="telefone" placeholder="Insira seu telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}[0-9]{4,5}"/>
				<br />
				<label for="cep">CEP:</label>
				<input type="text" id="cep" name="cep" placeholder="Insira seu Cep" pattern="[0-9]{5}-[0-9]{3}"/>
				<input type="button" id="validar" value="Validar CEP"/>
				<div style="color:red;" id="mensagem"></div>
				<br />
				<label for="endereco">Endereço:</label>
				<input required="required" type="text" id="endereco" name="endereco" placeholder="Insira seu endereço"/>
				<br />
				<label for="numero">Numero da casa ou empresa:</label>
				<input required="required" type="number" id="numero" name="numero" placeholder="Insira o numero"/>
				<br />
				<label for="bairro">Bairro:</label>
				<input required="required" type="text" id="bairro" name="bairro" placeholder="Insira o nome do seu bairro"/>
				<br />
				<label for="cidade">Cidade:</label>
				<input required="required" type="text" id="cidade" name="cidade" placeholder="Insira o nome da sua cidade"/>
				<br />
				<input type="button" id="cadastrar" value="Cadastrar"/>
				<input type="reset" id="reset" value="Limpar"/>
				
			</form>
		</fieldset>
<?php
	include "rodape.php";
?>