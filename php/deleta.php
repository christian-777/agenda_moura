<?php 
    include "conexao.php";
		$id=$_POST["id"];
		$delete="DELETE from entidade where id_entidade='$id'";
		mysqli_query($con, $delete) or die(mysqli_error($con));
?>
