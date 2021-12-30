function atualiza(){
	$.post("atualiza.php", function(v){
		$("#tabela").html(v);
	});
}
$("#pesquisar").click(function(){
	var dados= {nome: $("#pesquisa_nome").val(),
				select: $("#pesquisa_select").val()};
	
	$.post("filtro.php", dados, function(v){
		console.log(v);
		$("#tabela").html(v);
	});
});

function deleta(id){
	var dados = {id: id};
	$.post("deleta.php", dados, function(v){
		alert("Entidade deletada com sucesso!!!");
		atualiza();
	});
}