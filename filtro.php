<?php 
    include "conexao.php";
		if(!empty($_POST["nome"])){
			$nome=strtoupper($_POST["nome"]);
		}
		
		$dados="";
		$aux=0;
        $select="SELECT * from entidade";
		
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			if(isset($nome)){
				$var=strtoupper($linha["nome"]);
				$resultado_nome= stripos($var, $nome);
			}
			
			if($resultado_nome=="true"){
				$aux=1;
				$dados.='
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
		}
		if($aux==0){
			$dados.='<tr>
				<td colspan="6" style="color:red; text-align:center;">Nenhum resultado encontrado!!</td>
			 </tr>';
		}
	echo $dados;
?>
