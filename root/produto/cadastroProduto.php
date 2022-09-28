<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link href="../css/estilo.css" type="text/css" rel="stylesheet">
	
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
					<li><a class="dropdown-item" href="../cliente/cadastroCliente.php">Cliente</a></li>
					<li><a class="dropdown-item" href="../funcionario/cadastroFuncionario.php">Funcionário</a></li>
					<li><a class="dropdown-item" href="../fornecedor/cadastroFornecedor.php">Fornecedor</a></li>
					<li><a class="dropdown-item" href="cadastroProduto.php">Produto</a></li>
					<li><a class="dropdown-item" href="../usuario/cadastroUsuario.php">Usuário</a></li>
				  </ul>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Consulta
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="../cliente/consultaCliente.php">Cliente</a></li>
					<li><a class="dropdown-item" href="../funcionario/consultaFuncionario.php">Funcionário</a></li>
					<li><a class="dropdown-item" href="../fornecedor/consultaFornecedor.php">Fornecedor</a></li>
					<li><a class="dropdown-item" href="consultaProduto.php">Produto</a></li>
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
				<h1 class="text-center" style="color:#ffffff" >Cadastro do Produto</h1>
</div>
			<form action="#" method="POST">
			  	<div class="row linha">
					<div class="col-sm">
						<label for="nomeProduto" class="form-label">Nome:</label>
						<input type="text" class="form-control" id="nomeProduto" name="nomeProduto">
					</div>
			  	</div>
			  	<div class="row linha">
				  	<div class="col-sm-6">
						<label for="catProduto" class="form-label">Categoria:</label>
						<input type="text" class="form-control" id="catProduto" name="catProduto">
					</div>
					<div class="col-sm-6">
						<label for="precoProduto" class="form-label">Preço:</label>
						<input type="text" class="form-control" id="precoProduto" name="precoProduto">
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
if(!empty($_POST))
{
	$nome = $_POST['nomeProduto'];
	$cat = $_POST['catProduto'];
	$preco = $_POST['precoProduto'];

	include_once('../conexao.php');

	try {
	  
	  $stmt = $conn->prepare("INSERT INTO produto (nome, cat, preco)
	  	                      VALUES (:nome, :cat, :preco)");

	  $stmt->bindParam(':nome', $nome);
	  $stmt->bindParam(':cat', $cat);
	  $stmt->bindParam(':preco', $preco);
	  
	  $stmt->execute();

	  echo "<script>alert('Cadastrado com Sucesso');</script>";

	} catch(PDOException $e) {
	  echo "Erro ao cadastrar: " . $e->getMessage();
	}
	$conn = null;
}
?>