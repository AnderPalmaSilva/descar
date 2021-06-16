<?php
	$servidor = "186.202.152.129";
	$usuario = "bddescarsite";
	$senha = "DESCAR9606";
	$dbname = "bddescarsite";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		echo "Conexao realizada com sucesso";
	}	
	
?>