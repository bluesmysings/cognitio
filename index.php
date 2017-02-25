<!DOCTYPE html>
<html>
<head>
	<title>Cognitio | Sua biblioteca em uma página</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css"> 
</head>
<body>
	
	<?php include ('includes/header.php');?>
	
	<div id="conteudo" class="alinha_geral" style="background-color: transparent!important;">
		<div id="quadro_login">
			<div class="esq">
				<table id="tab_link" cellpadding="0" cellspacing="5" border="0" width="200">
					<tr>
						<td colspan="2">
							<h2>Conheça-nos!</h2>
						</td>
					</tr>
					<tr>
						<td>
							<label><img src="img/entrar.png"></label>
						</td>

						<td>
							<a href="#janela1" rel="modal">Nosso Projeto</a>
						</td>
					</tr>

					<tr>
						<td>
							<label><img src="/img/entrar.png"></label>
						</td>

						<td>
							<a href="#janela2" rel="modal">Dúvidas</a>
						</td>
					</tr>

					<!-- <tr>
						<td colspan="2">
							<a href="#cadastro" rel="modal"><button>Cadastre-se</button></a>
						</td>
					</tr>	 -->			
				</table>

			</div>



			<div class="dir">

				<?php
					// include 'includes/config.php';
					    //session_start();

					    // if(!isset($_SESSION['logado'])|| $_SESSION['logado'] <> TRUE || !isset($_SESSION['id']) || !isset($_SESSION['nome'])){
				?>

				<form action="home.php" method="POST">
					<table id="tab_log" cellpadding="0" cellspacing="5" border="0" width="200">
						<tr>
							<td colspan="2">
								<h2>Login</h2>
							</td>
						</tr>
						<tr>
							<td>
								<label>Usuário:</label>
							</td>

							<td>
								<input type="text" name="user" required>
							</td>
						</tr>

						<tr>
							<td>
								<label>Senha:</label>
							</td>

							<td>
								<input type="password" name="senha" required>
							</td>
						</tr>

						<tr>
							<td colspan="2">
							 <input type="hidden" name="act" value="login">
            				<button type="submit">Entrar</button>
								<!--<a href="home.php"><button>Entrar</button></a>-->
							</td>
						</tr>
					</table>
				</form>

				<?php //} else{
					// header('Location: home.php');
					// exit;

				//} ?>

			</div>
		</div>
	</div>

	<?php include ('includes/footer.php');?>

	<!-- MODAIS -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/modal.js"></script>
				
		<div class="window" id="cadastro">
			<a href="#" class="fechar">X</a>

			<?php include ('includes/form.php'); ?>
		</div>

		<div class="window" id="janela1">
			<a href="#" class="fechar">X</a>

			<div id="txt_pad" class="alinha_geral">
				<p>
				Os Instrumentos Mortais (nos Estados Unidos, The Mortal Instruments) é uma série literária 
				composta por seis livros de fantasia, escritos por Cassandra Clare. Os seis livros que formam 
				a série já foram todos lançados, sendo eles: Cidade dos Ossos, Cidade das Cinzas, Cidade de Vidro, 
				Cidade dos Anjos Caídos, Cidade das Almas Perdidas e Cidade do Fogo Celestial.
				</p>
			</div>
		</div>

		<div class="window" id="janela2">
			<a href="#" class="fechar">X</a>

			<div id="txt_pad" class="alinha_geral">
				<p>
				Os Instrumentos Mortais (nos Estados Unidos, The Mortal Instruments) é uma série literária 
				composta por seis livros de fantasia, escritos por Cassandra Clare. Os seis livros que formam 
				a série já foram todos lançados, sendo eles: Cidade dos Ossos, Cidade das Cinzas, Cidade de Vidro, 
				Cidade dos Anjos Caídos, Cidade das Almas Perdidas e Cidade do Fogo Celestial.
				</p>
			</div>
		</div>


		<!-- mascara para cobrir o site -->  
		<div id="mascara"></div>
	<!-- FIM DOS MODAIS -->
	
</body>
</html>