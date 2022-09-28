<!doctype html>
<html lang="en">
  	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Menu Principal </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link href="css/estilo.css" type="text/css" rel="stylesheet">

	</head>
  <body>
	  <!-- nav -->
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
					<li><a class="dropdown-item" href="cliente/cadastroCliente.php">Cliente</a></li>
					<li><a class="dropdown-item" href="funcionario/cadastroFuncionario.php">Funcionário</a></li>
					<li><a class="dropdown-item" href="fornecedor/cadastroFornecedor.php">Fornecedor</a></li>
					<li><a class="dropdown-item" href="produto/cadastroProduto.php">Produto</a></li>
					<li><a class="dropdown-item" href="usuario/cadastroUsuario.php">Usuário</a></li>
				  </ul>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Consulta
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="cliente/consultaCliente.php">Cliente</a></li>
					<li><a class="dropdown-item" href="funcionario/consultaFuncionario.php">Funcionário</a></li>
					<li><a class="dropdown-item" href="fornecedor/consultaFornecedor.php">Fornecedor</a></li>
					<li><a class="dropdown-item" href="produto/consultaProduto.php">Produto</a></li>
					<li><a class="dropdown-item" href="usuario/consultaUsuario.php">Usuário</a></li>
				  </ul>
				</li>
				<li class="nav-item">
				  <a href="index.php" class="nav-link">Sair</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="container-fluid">
		<div class="cards justify-content-center">
		<div class="card bg-dark carrd" style="width: 20rem;">
			<div class="card-header">Cliente</div>
			<div class="card-body">
					<a href="cliente/cadastroCliente.php" class="btn btn-primary">Cadastro</a>
					<a href="cliente/consultaCliente.php" class="btn btn-secondary">Consulta</a>
			</div>
		</div>
		<div class="card bg-dark carrd" style="width: 20rem;">
			<div class="card-header">Funcionário</div>
			<div class="card-body">
					<a href="funcionario/cadastroFuncionario.php" class="btn btn-primary">Cadastro</a>
					<a href="funcionario/consultaFuncionario.php" class="btn btn-secondary">Consulta</a>
			</div>
		</div>
		<div class="card bg-dark carrd" style="width: 20rem;">
			<div class="card-header">Fornecedor</div>
			<div class="card-body">
					<a href="fornecedor/cadastroFornecedor.php" class="btn btn-primary">Cadastro</a>
					<a href="fornecedor/consultaFornecedor.php" class="btn btn-secondary">Consulta</a>
			</div>
		</div>
	</div>
	<div class="cards justify-content-center">
	<div class="card bg-dark carrd" style="width: 20rem;">
			<div class="card-header">Produto</div>
			<div class="card-body">
					<a href="produto/cadastroProduto.php" class="btn btn-primary">Cadastro</a>
					<a href="produto/consultaProduto.php" class="btn btn-secondary">Consulta</a>
			</div>
		</div>
		<div class="card bg-dark carrd" style="width: 20rem;">
			<div class="card-header">Usuário</div>
			<div class="card-body">
					<a href="usuario/cadastroUsuario.php" class="btn btn-primary">Cadastro</a>
					<a href="usuario/consultaUsuario.php" class="btn btn-secondary">Consulta</a>
			</div>
		</div>
	</div>
  </body>
</html>