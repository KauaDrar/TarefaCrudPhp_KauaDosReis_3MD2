<?php

$cod = $_GET['id'];

include_once('../conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM fornecedor WHERE codigo=$cod");
		$delete->execute();

		header( "refresh:0;url=consultaFornecedor.php" );
		
		echo "<script>alert('FORNECEDOR EXCLUÍDO COM SUCESSO');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>