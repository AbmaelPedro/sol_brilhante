<?
require_once('includes/funcao09_conexaopostgresql.php');


$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$nascimento = $_GET['data_nascimento'];
$telefone = $_GET['telefone'];
$ap = $_GET['ap'];
$bloco = $_GET['bloco'];

echo "<br><br><u>Nome</u>: ".$nome;
echo "<br><br><u>CPF</u>: ".$cpf;
echo "<br><br><u>Data nascimento</u>: ".$nascimento;
echo "<br><u>Telefone</u>: ".$telefone;
echo "<br><u>Ap</u>: ".$ap;
echo "<br><u>Masil</u>: ".$bloco;

$conexao = conexaoPostgresql();

$id = criaChavePrimaria($conexao, "id","inquilino");

echo "<br>Chave Primaria Criada".$id;
echo "<br>Comando Insert".$insert;

$insert = "insert into inquilino 
(id,nome,cpf,nascimento,telefone,ap,bloco) 
values 
('$id','$nome','$cpf','$nascimento','$telefone','$ap',$bloco)";

if ( pg_query($conexao, $insert))
{
	echo "Registro Inserido com Sucesso no Banco de Dado!";
}
else {
	echo "Problema na Inserção!";
}



echo "<br><br><br>".$_SERVER['PHP_SELF'];

echo "<table border='1'>
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>cpf</td>
			<td>nascimento</td>
			<td>telefone</td>
			<td>ap</td>
			<td>bloco</td>
		</tr>	";
	
$select = "select id,nome,cpf,nascimento, telefone, ap, bloco  from inquilino";
$resultadoMatriz = pg_query( $conexao, $select );

while( $resultadoVetor = pg_fetch_array( $resultadoMatriz ) )
{
	$id = $resultadoVetor[0];
	$nome = $resultadoVetor[1];
	$cpf = $resultadoVetor[2];
	$nascimento = $resultadoVetor[3];
	$telefone = $resultadoVetor[4];	
	$ap = $resultadoVetor[5];
	$bloco = $resultadoVetor[6];	
	
	echo "
		<tr>
			<td>$id</td>
			<td>$nome</td>
			<td>$cpf</td>
			<td>$nascimento</td>
			<td>$telefone</td>
			<td>$ap</td>
			<td>$bloco</td>
		</tr>";

}	


echo "</table>";
	



desconexaoPostgresql( $conexao );
?>