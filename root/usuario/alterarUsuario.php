<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alterar Usuário</title>

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
					<li><a class="dropdown-item" href="../produto/cadastroProduto.php">Produto</a></li>
					<li><a class="dropdown-item" href="cadastroUsuario.php">Usuário</a></li>
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
					<li><a class="dropdown-item" href="../produto/consultaProduto.php">Produto</a></li>
					<li><a class="dropdown-item" href="consultaUsuario.php">Usuário</a></li>
				  </ul>
				</li>
				<li class="nav-item">
				  <a href="../index.php" class="nav-link">Sair</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
  	<main class="main">
		<div class="container-fluid c-main">
			<div class="center">
				<h4> Alterar Usuários </h4>
				<p> ♡</p>
			</div>
		</div>
	</main>
	<?php

	$cod = $_GET['id'];

	include_once('../conexao.php');

		$select = $conn->prepare("SELECT * FROM usuario where codigo=$cod");
		$select->execute();

		$row = $select->fetch();
		
	?>
	<div class="container formulario">
			<form action="confirmaAlterarUsuario.php" method="POST">
			  	<div class="row linha">
				  <div class="col-sm-6">
						<label for="uname" class="form-label">Código:</label>
						<input type="text" class="form-control" name="codigo" value="<?php echo $row['codigo'];?>" readonly="true">
					</div>
					<div class="col-sm-6">
						<label for="uname" class="form-label">Nome:</label>
						<input type="text" class="form-control" name="nome" value="<?php echo $row['nome'];?>" required>
					</div>
			  	</div>
				<div class="row linha">
					<div class="col-sm-6">
						<label for="uEmail" class="form-label">E-mail:</label>
						<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"  required>
					</div>
                    <div class="col-sm-6">
						<label for="uSenha" class="form-label">Senha:</label>
						<input type="text" class="form-control" name="senha" value="<?php echo $row['senha'];?>"  required>
					</div>
				</div>
				<div class="text-center botoes">
				  	<input type="submit" class="btn estilo-btn" value="Alterar">
					<button type="button" class="btn estilo-btn-outline" onclick="javascript:location.href ='../index.php';">Voltar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
  </body>
</html>