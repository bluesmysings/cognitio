<?php
include 'includes/config.php';
if(isset($_POST['act']) && ($_POST['act'] == 'cadastrar')) {


	$nome = verifica_sql($_POST['nome']);
	$user = verifica_sql($_POST['user']);
	$pass = verifica_sql(md5($_POST['pass']));
	$confpass = verifica_sql(md5($_POST['confpass']));
	$cpf = verifica_sql($_POST['cpf']);
	$rg = verifica_sql($_POST['rg']);
	$sexo = verifica_sql($_POST['sexo']);
	$nasc = verifica_sql($_POST['nasc']);
	$email = verifica_sql($_POST['email']);
	$end = verifica_sql($_POST['end']);
	$bairro = verifica_sql($_POST['bairro']);
	$cid = verifica_sql($_POST['cid']);
	$est = verifica_sql($_POST['est']);
	$tel = verifica_sql($_POST['tel']);
	$cel = verifica_sql($_POST['cel']);
	$ativo = 0;
	$excluido = 0;

	// Verifica senhas iguais
	if($pass <> $confpass){
		echo'<script>alert("Senha e confirmação de senha estão diferentes.");window.location.href="cadastro.php"</script>';
		exit;
	}
	
	// Verifica se ja ha login
	try { 
		$sql = 'SELECT * FROM cogn_usuario WHERE userUser = :user';
		$stm = $connect->prepare($sql); 
		$stm->bindValue(':user', $user, PDO::PARAM_STR);
		$stm->execute(); 
	    
		$result = $stm->fetchall();

	}catch(PDOexception $error){ 			
		echo 'Erro ao verificar o Email. '.$error->getMessage(); 
	}

	if(count($result)>0){
		echo'<script>alert("Login ja existente.");window.location.href="cadastro.php"</script>';
		exit;
	}

	// Verifica se ja ha email
	try { 
		$sql = 'SELECT * FROM cogn_usuario WHERE emailUser = :email';
		$stm = $connect->prepare($sql); 
		$stm->bindValue(':email', $email, PDO::PARAM_STR);
		$stm->execute(); 
	    
		$result = $stm->fetchall();

	}catch(PDOexception $error){ 			
		echo 'Erro ao verificar o Email. '.$error->getMessage(); 
	}

	if(count($result)>0){
		echo'<script>alert("Email ja existente.");window.location.href="cadastro.php"</script>';
		exit;
	}

	// Verifica se ja ha login
	try { 
		$sql = 'INSERT INTO cogn_usuario ( nomeUser, userUser, passUser, cpfUser, rgUser, sexoUser, nascUser, emailUser, endUser, bairroUser, cidUser, estUser, telUser, celUser, ativo, excluido, data_cadastro, data_edicao) VALUES (:nome, :user, :pass, :cpf, :rg, :sexo, :nasc, :email, :end, :bairro, :cid, :est, :tel, :cel, :ativo, :excluido, now(), now())';
		$stm = $connect->prepare($sql); 
		$stm->bindValue(':nome', $nome, PDO::PARAM_STR);
		$stm->bindValue(':user', $user, PDO::PARAM_STR);
		$stm->bindValue(':pass', $pass, PDO::PARAM_STR);
		$stm->bindValue(':cpf', $cpf, PDO::PARAM_STR);
		$stm->bindValue(':rg', $rg, PDO::PARAM_STR);
		$stm->bindValue(':sexo', $sexo, PDO::PARAM_STR);
		$stm->bindValue(':nasc', $nasc, PDO::PARAM_STR);
		$stm->bindValue(':email', $email, PDO::PARAM_STR);
		$stm->bindValue(':end', $end, PDO::PARAM_STR);
		$stm->bindValue(':bairro', $bairro, PDO::PARAM_STR);
		$stm->bindValue(':cid', $cid, PDO::PARAM_STR);
		$stm->bindValue(':est', $est, PDO::PARAM_STR);
		$stm->bindValue(':tel', $tel, PDO::PARAM_STR);
		$stm->bindValue(':cel', $cel, PDO::PARAM_STR);
		$stm->bindValue(':ativo', $ativo, PDO::PARAM_STR);
		$stm->bindValue(':excluido', $excluido, PDO::PARAM_STR);
		 
		if($stm->execute()){
			echo'<script>alert("Cadastrado com sucesso.");window.location.href="index.php"</script>';
			exit;
		}

	}catch(PDOexception $error){ 			
		echo 'Erro ao verificar o Email. '.$error->getMessage(); 
	}

}else{			
	header('location:index.php');
}
?>