<?php

include_once('../conexao.php');

$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

	try 
	{

		$stmt = $conn->prepare("UPDATE fornecedor SET nome = :nome,
													  cnpj = :cnpj,
													  cep = :cep,
													  numero = :numero,
                                                      email = :email,
													  telefone = :telefone WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cnpj' => $cnpj,
							 ':cep' => $cep,
							 ':numero' => $numero,
                             ':email' => $email,
                             ':telefone' => $telefone));
		
		header( "refresh:0;url=consultaFornecedor.php" );

		echo "<script>alert('FORNECEDOR ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}	

 ?>

