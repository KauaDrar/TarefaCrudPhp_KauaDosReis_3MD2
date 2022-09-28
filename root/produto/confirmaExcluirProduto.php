<?php

$cod = $_GET['id'];

include_once('../conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM produto WHERE codigo=$cod");
		$delete->execute();

		header( "refresh:0;url=consultaProduto.php" );
		
		echo "<script>alert('PRODUTO EXCLUÍDO COM SUCESSO');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>