<?php
	include 'includes/config.php';
	session_start();

	if(!isset($_SESSION['logado'])|| $_SESSION['logado'] <> TRUE || !isset($_SESSION['id']) || !isset($_SESSION['nome'])){
		session_destroy();
		echo "<script>
				alert('Precisa estar logado para acessar.');
				window.location.href='index.php';
			</script>";
		exit;
	}
?>
