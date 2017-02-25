<?php
include 'includes/config.php';
if(isset($_POST['act']) && ($_POST['act'] == 'login')) {

	$user = verifica_sql($_POST['user']);
	$senha = verifica_sql(md5($_POST['senha']));
	$excluido = 0;

	try { 
		$sql = 'SELECT * FROM cogn_usuario WHERE userUser = :user AND passUser	 = :senha AND excluido = :excluido';
		$stm = $connect->prepare($sql); 
		$stm->bindValue(':user', $user, PDO::PARAM_STR);
		$stm->bindValue(':senha', $senha, PDO::PARAM_STR);
		$stm->bindValue(':excluido', $excluido, PDO::PARAM_STR);
		$stm->execute(); 
	    
		$result = $stm->fetchall(PDO::FETCH_OBJ);

	}catch(PDOexception $error){ 			
		echo 'Erro ao verificar o login. '.$error->getMessage(); 
	}

	
	if(count($result) <> 1){
		echo "<script>
				alert('Usuario e/ou senha invalido.');
				window.location.href='index.php';
			</script>";
	} else {
		$result = $result[0];

		if($result->ativo == 1){
		echo "<script>
				alert('Ative sua conta.');
				window.location.href='index.php';
			</script>";
			exit;			
		}

		session_start();

		$_SESSION['logado'] = TRUE;
		$_SESSION['id']		= $result->codUser;
		$_SESSION['nome']	= $result->nomeUser;

		header('location:home.php');
	}


}else{			
	header('location:index.php');
}
?>