$("#alterar_dados").click(function(){
	if($("#numero_altera").val() !="" && $("#nome_altera").val() !="" && $("#telefone_altera").val() !="" && $("#endereco_altera").val() !="" && $("#bairro_altera").val() !="" && $("#cidade_altera").val()){
		var dados = {id: $("#hidden").val(),
					 nome: $("#nome_altera").val(),
					 telefone: $("#telefone_altera").val(),
					 endereco: $("#endereco_altera").val(), 
					 bairro: $("#bairro_altera").val(), 
					 cidade: $("#cidade_altera").val(), 
					 numero: $("#numero_altera").val()};
		$.post("altera_agenda.php", dados, function(v){
			alert("Alterado com sucesso!!");
			window.location.href="tabela.php";
		});
	}
	else{
		alert("insira nome, telefone, endereço, bairro e cidade adequadamente !");
	}
});