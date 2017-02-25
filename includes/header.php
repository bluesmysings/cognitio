
	<header id="topo">
		<div class="alinha_geral">
			<div class="esq">
				<img src="img/logo_cognitio.png" width="180">
			</div>

			<nav class="dir">
				<ul>
					<li><img src="img/home.png" width="30" style="margin-bottom: -4px!important;"> <a href="home.php">Home</a></li>
					<li><img src="img/livro.png" width="30"> <a href="acervo.php">Acervo</a></li>
					<li><img src="img/perfil.png" width="30"> <a href="perfil.php">Perfil</a></li>
					
					<?php
					    if(!isset($_SESSION['logado'])|| $_SESSION['logado'] <> TRUE || !isset($_SESSION['id']) || !isset($_SESSION['nome'])){
					
					echo "";
					
					} else { echo "<li><img src='img/sair.png' width='30'> <a href='logout.php'>Sair</a></li>";} ?>
				</ul>
			</nav>
		</div>
	</header>