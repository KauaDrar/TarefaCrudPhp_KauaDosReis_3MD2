<?php

$cod = $_GET['id'];

include_once('../conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM usuario WHERE codigo=$cod");
		$delete->execute();

		header( "refresh:0;url=consultaUsuario.php" );
		
		echo "<script>alert('USUÁRIO EXCLUÍDO COM SUCESSO');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>