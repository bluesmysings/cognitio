<!DOCTYPE html>
<html>
<head>
	<title>Cognitio | Sua biblioteca em uma página</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	
	<?php include ('includes/header.php');?>
	
	<div id="conteudo" class="alinha_geral">
		<div id="padrao_2">
			<div class="txt">
				<table>
					<tr>
						<td>
							<img src="/img/lista_gen.png" width="50">
						</td>
						<td>
							<h2 class="dir">Gêneros</h2>
						</td>
					</tr>
				</table>
			</div>

			<div class="aloca">
				

				 <div class="aloca_gen">
				                                    <a href="livros.php"><h2>Romance</h2></a>
				                                    <p>
				                                        Histórias de amor
				                                    </p>
				                                </div> <div class="aloca_gen">
				                                    <a href="livros.php"><h2>Ficcao Cientifica</h2></a>
				                                    <p>
				                                        Histórias de imaginação
				                                    </p>
				                                </div> <div class="aloca_gen">
				                                    <a href="livros.php"><h2>Terror</h2></a>
				                                    <p>
				                                        Histórias de fantasmas e assomabração
				                                    </p>
				                                </div> <div class="aloca_gen">
				                                    <a href="livros.php"><h2>Suspense</h2></a>
				                                    <p>
				                                        Histórias de resolução de crimes
				                                    </p>
				                                </div>
			<div class="pag">
				<div class="pag_num">
					<a href="acervo.php?pagina=1" class="numero numativo"> 1 </a>				</div>
			</div>
		</div>
	</div>
</div>

	<?php include ('includes/footer.php');?>
	
</body>
</html>