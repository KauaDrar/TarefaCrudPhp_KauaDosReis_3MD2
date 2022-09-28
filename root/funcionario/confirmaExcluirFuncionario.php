<?php

$cod = $_GET['id'];

include_once('../conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM funcionario WHERE codigo=$cod");
		$delete->execute();

		header( "refresh:0;url=consultaFuncionario.php" );
		
		echo "<script>alert('FUNCIONÁRIO EXCLUÍDO COM SUCESSO');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>