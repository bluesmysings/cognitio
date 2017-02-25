<!DOCTYPE html>
<html>
<head>
	<title>Cognitio | Sua biblioteca em uma página</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
</head>
<body>

	
	<?php include ('includes/header.php');?>
	
	<div id="conteudo" class="alinha_geral">
		<div class="novidades">
			<div class="txt">
				<table>
					<tr>
						<td>
							<img src="/img/novidades.png" width="60">
						</td>
						<td>
							<h2 class="dir">Novidades</h2>
						</td>
					</tr>
				</table>
			</div>

			<div>
				<div class="esq txt">
					<p class="txt_1">
						Acompanhe os novos lançamentos de seus livros preferidos!<br>
						Veja ao lado o que andou chegando em nossas prateleiras e corra (ou melhor, clique) para pegar o seu!
					</p>
				</div>

				<div id="slide" class="dir">
					<div class="flexslider">
					  <ul class="slides">
					    <li>
					      <a href="novidades.php"><img src="img/banner/banner_1.jpg" /></a>
					      <p class="flex-caption">Jane Austen aqui em nossa biblioteca!</p>
					    </li>
					    <li>
					      <a href="novidades.php"><img src="img/banner/banner_2.jpg" /></a>
					      <p class="flex-caption">Chegou o Ciclo da Morte, confira!</p>
					    </li>
					    <li>
					      <a href="novidades.php"><img src="img/banner/banner_3.jpg" /></a>
					      <p class="flex-caption">Oferta horripilante!</p>
					    </li>
					  </ul>
					</div>
				</div>

			</div>
		</div>

		<div class="novidades">
			<div class="txt">
				<table>
					<tr>
						<td>
							<img src="/img/resenha.png" width="60">
						</td>
						<td>
							<h2 class="dir">Resenhas</h2>
						</td>
					</tr>
				</table>
			</div>

			<div>
				<div class="esq txt">
					<p class="txt_1">
						Está em dúvida se aquele livro é bom ou não?<br>
						Bem, fizemos para você resenhas, não só nossa como a opinião de outros leitores!<br>
						Não tenha dúvida, acompanhe!<br>

					</p>
				</div>

				<div id="slide" class="dir">
					<div class="box_branco">
					  <table cellspacing="2" cellpadding="0" border="0" width="100%">
					  	<tr>
					  		<td>
					  			<h3>Mais recentes ...</h3>
					  		</td>
					  	</tr>

					  	<tr>
					  		<td>
					  			<p>
					  				Instrumentos Mortais <br><br>

									A série Os Instrumentos Mortais, inicialmente prevista para ser uma trilogia (Cidades dos Ossos, Cidades das Cinzas e Cidade de Vidro), é formada por seis livros. Caracterizada como um romance YA ...
					  			</p>
					  		</td>
					  	</tr>

					  	<tr>
					  		<td>
					  			<a href="resenha.php"><img src="/img/mais.png" width="30"></a>
					  		</td>
					  	</tr>
					  </table>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include ('includes/footer.php');?>
	
</body>
</html>