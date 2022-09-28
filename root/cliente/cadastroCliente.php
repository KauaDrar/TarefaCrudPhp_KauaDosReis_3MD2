<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cadastro Cliente</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link href="../css/estilo.css" type="text/css" rel="stylesheet">
	<script src="../js/buscaCep.js"> </script>
	<script src="../js/validaCPF.js"> </script>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark navegacao">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Kauã dos Reis - 3MD2</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cadastro
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="cadastroCliente.php">Cliente</a></li>
							<li><a class="dropdown-item" href="../funcionario/cadastroFuncionario.php">Funcionário</a></li>
							<li><a class="dropdown-item" href="../fornecedor/cadastroFornecedor.php">Fornecedor</a></li>
							<li><a class="dropdown-item" href="../produto/cadastroProduto.php">Produto</a></li>
							<li><a class="dropdown-item" href="../usuario/cadastroUsuario.php">Usuário</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Consulta
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="consultaCliente.php">Cliente</a></li>
							<li><a class="dropdown-item" href="../funcionario/consultaFuncionario.php">Funcionário</a></li>
							<li><a class="dropdown-item" href="../fornecedor/consultaFornecedor.php">Fornecedor</a></li>
							<li><a class="dropdown-item" href="../produto/consultaProduto.php">Produto</a></li>
							<li><a class="dropdown-item" href="../usuario/consultaUsuario.php">Usuário</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="../index.php" class="nav-link">Sair</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container formulario">
		<div class="jumbotron">
			<form action="#" method="POST">
				<h1 class="text-center" style="color:#ffffff">Cadastro Cliente</h1>
		</div>
		<div class="row linha">
			<div class="col-sm">
				<label for="nomeCliente" class="form-label">Nome:</label>
				<input type="text" class="form-control" id="nomeCliente" name="nomeCliente">
			</div>
		</div>
		<div class="row linha">
			<div class="col-sm-6">
				<label for="cpfCliente" class="form-label">CPF:</label>
				<input type="text" class="form-control" id="cpfCliente" name="cpfCliente" onblur="TestaCPF(this.value);">
			</div>
			<div class="col-sm-6">
				<label for="rg" class="form-label">RG:</label>
				<input type="text" class="form-control" id="rgCliente" name="rgCliente">
			</div>
		</div>
		<div class="row linha">
			<div class="col-sm-6">
				<label for="cep" class="form-label">CEP:</label>
				<input type="text" class="form-control" id="cep" name="cepCliente" onblur="pesquisacep(this.value);">
			</div>
			<div class="col-sm-6">
				<label for="rua" class="form-label">Rua:</label>
				<input type="text" class="form-control" id="rua" name="ruaCliente">
			</div>
		</div>
		<div class="row linha">
			<div class="col-sm-6">
				<label for="bairro" class="form-label">Bairro:</label>
				<input type="text" class="form-control" id="bairro" name="bairroCliente">
			</div>
			<div class="col-sm-6">
				<label for="cidade" class="form-label">Cidade:</label>
				<input type="text" class="form-control" id="cidade" name="cidadeCliente">
			</div>
		</div>
		<div class="row linha">
			<div class="col-sm-6">
				<label for="uf" class="form-label">Estado:</label>
				<input type="text" class="form-control" id="uf" name="ufCliente">
			</div>
			<div class="col-sm-6">
				<label for="numCliente" class="form-label">Número:</label>
				<input type="text" class="form-control" id="numCliente" name="numCliente">
			</div>
		</div>
		<div class="row linha">
			<div class="col-sm-6">
				<label for="celularCliente" class="form-label">Celular:</label>
				<input type="text" class="form-control" id="celularCliente" name="celularCliente">
			</div>
			<div class="col-sm-6">
				<label for="emailCliente" class="form-label">E-mail:</label>
				<input type="text" class="form-control" id="emailCliente" name="emailCliente">
			</div>
		</div>
		<div class="text-center botoes">
			<input type="submit" class="btn estilo-btn" value="Cadastrar">
			<button type="button" class="btn estilo-btn-outline" onclick="javascript:location.href ='../index.php';">Voltar</button>
		</div>
		</form>
	</div>

	</div>
	</div>
</body>

</html>


<?php
if (!empty($_POST)) {
	$nome = $_POST['nomeCliente'];
	$cpf = $_POST['cpfCliente'];
	$rg = $_POST['rgCliente'];
	$cep = $_POST['cepCliente'];
	$numero = $_POST['numCliente'];
	$celular = $_POST['celularCliente'];
	$email = $_POST['emailCliente'];

	include_once('../conexao.php');

	try {

		$stmt = $conn->prepare("INSERT INTO cliente (nome, cpf, rg, cep, numero, celular, email)
	  	                      VALUES (:nome, :cpf, :rg, :cep, :numero, :celular, :email)");

		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':cpf', $cpf);
		$stmt->bindParam(':rg', $rg);
		$stmt->bindParam(':cep', $cep);
		$stmt->bindParam(':numero', $numero);
		$stmt->bindParam(':celular', $celular);
		$stmt->bindParam(':email', $email);

		$stmt->execute();

		echo "<script>alert('Cadastrado com Sucesso');</script>";
	} catch (PDOException $e) {
		echo "Erro ao cadastrar: " . $e->getMessage();
	}
	$conn = null;
}
?>