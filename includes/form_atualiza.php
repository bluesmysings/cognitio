<?php 
@mysql_connect("localhost","giova739_giova73","cgrrms2s210+");
@mysql_select_db("giova739_cognitio" );

@mysql_query("SET NAMES'utf8'");
@mysql_query('SET character_set_connection=utf8');
@mysql_query('SET character_set_client=utf8');
@mysql_query('SET character_set_results=utf8');

$seleciona = @mysql_query("SELECT * FROM cogn_usuario");
$contar    = @mysql_num_rows($seleciona);
if($seleciona == 0) {
echo'Sem resultados';
} else {
      while($res = @mysql_fetch_array($seleciona)){
      	$user = $res['userUser'];
     	$email = $res['emailUser'];
     	$nome = $res['nomeUser'];
     	$sexo = $res['sexoUser'];
    	$nasc = $res['nascUser'];
    	$cpf = $res['cpfUser'];
    	$rg = $res['rgUser'];
    	$end = $res['endUser']; 
    	$bairro = $res['bairroUser'];
    	$cidade = $res['cidUser']; 
    	$est = $res['estUser']; 
    	$tel = $res['telUser']; 
   	 	$cel = $res['celUser'];  
}
 
 }

?>


<table style="float: left;">
	<tr>
		<td>
			<h2>Perfil de <?php echo $_SESSION['nome']; ?></h2> 
		</td>
	</tr>

	<tr>
		<td>
			Se deseja atualizar suas informações, por favor, digite novamente.
		</td>
	</tr>
</table>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script>

<script>
jQuery(function($){
   $("#nasc").mask("99/99/9999");
   $("#cpf").mask("999.999.999-99");
   $("#rg").mask("99.999.999-9");
   $("#tel").mask("(99) 9999-9999");
   $("#cel").mask("(99)-99999-9999");
});
</script>

<form id="form" method="POST" action="includes/form_atualiza.php">
	<table width="100%" cellspacing="5" cellpadding="0" border="0" style="margin-top: -15px;">
		<tr>
			<td>
				<img src="/img/perfil.png" width="40">
			</td>

			<td>
				<h2 style="  margin-left: -120px;">Informações da conta:</h2>
			</td>
		</tr>

		<tr>
			<td>
				<label>Usuário:</label>
			</td>

			<td>
				<input type="text" value="<?php echo $user; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Email:</label>
			</td>

			<td>
				<input type="email" value="<?php echo $email; ?>" required>
			</td>
		</tr>


		<tr>
			<td>
				<img src="/img/perfil.png" width="40">
			</td>

			<td>
				<h2 style="  margin-left: -120px;">Informações pessoais:</h2>
			</td>
		</tr>

		<tr>
			<td>
				<label>Nome:</label>
			</td>

			<td>
				<input type="text" value="<?php echo $nome; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Sexo:</label>
			</td>

			<td>
				<input type="radio" name="sexo" value="0" required> Masculino
				<input type="radio" name="sexo" value="1" required> Feminino
			</td>
		</tr>	

		<tr>
			<td>
				<label>Data de Nascimento:</label>
			</td>

			<td>
				<input type="text" id="nasc" value="<?php echo $nasc; ?>" required>
			</td>
		</tr>				

		<tr>
			<td>
				<label>CPF:</label>
			</td>

			<td>
				<input type="text" id="cpf" value="<?php echo $cpf; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>RG:</label>
			</td>

			<td>
				<input type="text" id="rg" value="<?php echo $rg; ?>" required>
			</td>
		</tr>				

							

		<tr>
			<td>
				<label>Endereço:</label>
			</td>

			<td>
				<input type="text" value="<?php echo $end; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Bairro:</label>
			</td>

			<td>
				<input type="text" value="<?php echo $bairro; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Cidade:</label>
			</td>

			<td>
				<input type="text" value="<?php echo $cidade; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Estado:</label>
			</td>

			<td>
				<select name="est">
					<option value="0">Selecione</option>
					<option value="ac">AC</option>
					<option value="al">AL</option>
					<option value="ap">AP</option>
					<option value="am">AM</option>
					<option value="ba">BA</option>
					<option value="ce">CE</option>
					<option value="df">DF</option>
					<option value="es">ES</option>
					<option value="go">GO</option>
					<option value="ma">MA</option>
					<option value="ms">MS</option>
					<option value="mt">MT</option>
					<option value="mg">MG</option>
					<option value="pa">PA</option>
					<option value="pb">PB</option>
					<option value="pr">PPR</option>
					<option value="pe">PE</option>
					<option value="pi">PI</option>
					<option value="rj">RJ</option>
					<option value="rn">RN</option>
					<option value="rs">RS</option>
					<option value="ro">RO</option>
					<option value="rr">RR</option>
					<option value="sc">SC</option>
					<option value="sp">SP</option>
					<option value="se">SE</option>
					<option value="to">TO</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				<label>Telefone:</label>
			</td>

			<td>
				<input type="text" id="tel" value="<?php echo $tel; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Celular:</label>
			</td>

			<td>
				<input type="text" id="cel" value="<?php echo $cel; ?>" required>
			</td>
		</tr>

		<tr>
			<td>
				<input type="hidden" name="act" value="atualizar">
			</td>

			<td>
				<input type="reset" value="Excluir">
				<input type="hidden" name="act" value="login">
            	<button type="submit">Atualizar</button>
			</td>
		</tr>
	</table>
</form>