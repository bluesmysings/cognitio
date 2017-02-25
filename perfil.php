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
		<div id="padrao">
			<div class="esq">
				<div>
					<?php include('includes/form_atualiza.php'); ?>
				</div>
			</div>

			<div class="dir_status">
				<?php include('includes/status.php'); ?>
			</div>
			
		</div>
	</div>

	<?php include ('includes/footer.php');?>
	
</body>
</html>