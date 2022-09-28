<?php

include_once('../conexao.php');

$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

	try 
	{

		$stmt = $conn->prepare("UPDATE usuario SET nome = :nome,
                                                      email = :email,
													  senha = :senha WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
                             ':email' => $email,
                             ':senha' => $senha));
		
		header( "refresh:0;url=consultaUsuario.php" );

		echo "<script>alert('USUÁRIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}	

 ?>

