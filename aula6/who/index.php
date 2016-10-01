<?php
	require_once "core/settings.php";
	require_once "bootstrap.php";
	require_once "core/db_mysql.php";

 	if (! isset($_SESSION)) session_start(); 

 	if (! isset($_SESSION['email'])) {
 		header('Location: '. $URL_PATH . 'login.php');
 	}

 ?>	

<html>

<head>
	

		<title><?= $_SESSION['nome'] ?> | Meu site.com </title>
<body>


	<!--======================== NAVbar -->

	<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WHO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="cadastro.php">Cadastrar</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="<?= $URL_PATH ?>core/logout.php">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<!--======================== NAVbar -->

		<table class="table table-hover">
  			<thead>
  				<th>ID</th>
  				<th>Nome</th>
  				<th>Email</th>
  				<th>Acoes</th>
  			</thead>	
  				<tbody>
  					<?php 
  						// realizar a consulta ao banco 
  					$mysqli_query = mysqli_query($conn, "SELECT * FROM usuarios");

  					?>

<?php while (($row = mysqli_fetch_assoc($mysqli_query) )): ?>

	<tr>
		<td><?= $row['id'] ?></td>
		<td><?= $row['nome'] ?></td>
		<td><?= $row['email'] ?></td>
		<td>
			<a href="<?= $URL_PATH ?>core/editar.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">editar</a>
			<a href="<?= $URL_PATH ?>core/deletar.php?id=<?= $row['id'] ?>" class= "btn btn-danger btn-sm">excluir</a>


		</td>
	</tr>

<?php endwhile ?>


  			</tbody>
		</table>


</body>

</head>
</html>