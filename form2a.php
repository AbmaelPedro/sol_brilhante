<HTML>
	<HEAD>
	 <TITLE>FORM2 Front-End</TITLE>
	</HEAD>
	<BODY>

		<h2>Bem vindo ao condomínio Masil</h2>
		<h2>Novo por aqui?</h2>
		<h3>Preencha com seus dados</h3>

<form method="GET" action='form2a_processa.php' >
<table border="1" cellspacing=1 cellpadding=1 width="550">
<tr>
	<td>Nome:</td>
	<td>
		<input type="text" name='nome'  size="30">
	</td>
</tr>
<tr>
	<td>CPF:</td>
	<td>
		<input type="text" name='cpf' size="30">
	</td>
</tr>
<tr>
	<td>Data nascimento:</td>
	<td>
		<input type="date" name='data nascimento' size="20">
	</td>
</tr>
<tr>
	<td>Telefone:</td>
	<td>
		<input type="text" name='telefone' size="30">
	</td>
</tr>
<tr>
	<td>Apartamento:</td>
	<td>
		<input type="number" name='ap'>
	</td>
</tr>
<tr>
	<td>Masil:</td>
	<td>
		<select name='bloco'>
			<option value='1'>I</option>
			<option value='2'>II</option>		  		  		  
		</select>
	</td>
</tr>
<tr>
	<td colspan=2 align='center'>
		<input type="submit" value="cadastrar">
	</td>
</tr>
</table>
</form>

	</BODY>
</HTML>


<?

echo $_SERVER['PHP_SELF'];
?>
