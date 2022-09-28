<?php

$cod = $_GET['id'];

include_once('../conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM cliente WHERE codigo=$cod");
		$delete->execute();

		header( "refresh:0;url=consultaCliente.php" );
		
		echo "<script>alert('CLIENTE EXCLUÍDO COM SUCESSO');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>