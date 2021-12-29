$(document).ready(function(){
	$("#telefone").mask("(00) 000000009");
	$("#cep").mask("00000-000");
	
	$("#validar").click(function(){
		var cep = $("#cep").val().replace("/[^0-9]/g","");
	
		$.get("https://viacep.com.br/ws/"+cep+"/json/", function(valor){
			if(valor.erro){
				$("#mensagem").html("Cep Invalido");
			}
			if(valor.localidade){
				$("#mensagem").html("Cep Valido");
				$("#endereco").val(valor.logradouro);
				$("#endereco").attr("readonly", true);
				$("#bairro").val(valor.bairro);
				$("#bairro").attr("readonly", true);
				$("#cidade").val(valor.localidade);
				$("#cidade").attr("readonly", true);
			}
			console.log(valor);
		});
	});
		
	$("#cadastrar").click(function(){
		if($("#numero").val() !="" && $("#nome").val() !="" && $("#telefone").val() !="" && $("#endereco").val() !="" && $("#bairro").val() !="" && $("#cidade").val()){
			var dados = {nome: $("#nome").val(),
						 telefone: $("#telefone").val(),
						 endereco: $("#endereco").val(), 
						 bairro: $("#bairro").val(), 
						 cidade: $("#cidade").val(), 
						 numero: $("#numero").val()};
			
			$.post("cadastra_agenda.php", dados, function(v){
				alert("Cadastrado com sucesso!!");
				$("#reset").click();
			});
		}
		else{
			alert("insira nome, telefone, endereço, bairro e cidade adequadamente !");
		}
	});
});
	
	