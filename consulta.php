<?php 
//Criando tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nome</th>";
echo "<th>E-mail:</th>";
echo "</tr>";

//Conectando ao banco:
	$servidor = "186.202.152.129";
	$usuario = "bddescarsite";
	$senha = "DESCAR9606";
	$dbname = "bddescarsite";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso" ."</br>";
	}
	
$sql ="SELECT * FROM visitante";
$resultado = mysqli_query($conn, $sql) or die("Erro ao tentar cadastrar registro");
// obter dados por loop while

/* while ($registro = msql_fetch_array($resultado)) 
{
	$id = $registro["id"];
	$nome =$registro["nome"];
	$email = $registro["email"];
	echo "<tr>";
	echo "<td>".$id."</td";
	echo "<td>".$nome."</td>";
	echo "<td>".$email."</td>";
	echo "</tr>";
}

mysqli_close($conn);
echo "</table>";
*/
echo $resultado;
 ?>