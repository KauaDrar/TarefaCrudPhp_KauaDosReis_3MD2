<?php

include_once('../conexao.php');

$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cat = $_POST['cat'];
$preco = $_POST['preco'];

	try 
	{

		$stmt = $conn->prepare("UPDATE produto SET nome = :nome,
                                                      cat = :cat,
													  preco = :preco WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cat' => $cat,
							 ':preco' => $preco));
		
		header( "refresh:0;url=consultaProduto.php" );

		echo "<script>alert('PRODUTO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}	

 ?>

