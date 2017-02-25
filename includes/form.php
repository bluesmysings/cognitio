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

<form id="form" method="POST" action="act_cadastro.php">
	<table width="300" cellspacing="5" cellpadding="0" border="0">
		<tr>
			<td>
				<img src="/img/perfil.png" width="40">
			</td>

			<td>
				<h2 style="margin-left: -80px!important;">Informações da conta:</h2>
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
				<input type="password" name="pass" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Confirme sua senha:</label>
			</td>

			<td>
				<input type="password" name="confpass" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Email:</label>
			</td>

			<td>
				<input type="email" name="email" required>
			</td>
		</tr>


		<tr>
			<td>
				<img src="/img/perfil.png" width="40">
			</td>

			<td>
				<h2 style="margin-left: -80px!important;">Informações pessoais:</h2>
			</td>
		</tr>

		<tr>
			<td>
				<label>Nome:</label>
			</td>

			<td>
				<input type="text" name="nome" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Sexo:</label>
			</td>

			<td>
				<input type="radio" name="sexo" value="M" required> Masculino
				<input type="radio" name="sexo" value="F" required> Feminino
			</td>
		</tr>	

		<tr>
			<td>
				<label>Data de Nascimento:</label>
			</td>

			<td>
				<input type="text" id="nasc" name="nasc" required>
			</td>
		</tr>				

		<tr>
			<td>
				<label>CPF:</label>
			</td>

			<td>
				<input type="text" id="cpf" name="cpf" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>RG:</label>
			</td>

			<td>
				<input type="text" id="rg" name="rg" required>
			</td>
		</tr>				

							

		<tr>
			<td>
				<label>Endereço:</label>
			</td>

			<td>
				<input type="text" name="end" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Bairro:</label>
			</td>

			<td>
				<input type="text" name="bairro" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Cidade:</label>
			</td>

			<td>
				<input type="text" name="cid" required>
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
					<option value="pr">PR</option>
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
				<input type="text" id="tel" name="tel" required>
			</td>
		</tr>

		<tr>
			<td>
				<label>Celular:</label>
			</td>

			<td>
				<input type="text" id="cel" name="cel" required>
			</td>
		</tr>

		<tr>
			<td>
				<input type="hidden" name="act" value="cadastrar">
			</td>

			<td>
				<button type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>