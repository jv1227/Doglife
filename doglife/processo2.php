<?php 
require_once 'db_connect2.php';


if($_POST) {
	$nome = $_POST['nomep'];
	$tel = $_POST['tel'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$nasc = $_POST['nasc'];
	$cidade = $_POST['cidade'];
	$ncartao = $_POST['ncartao'];
	$cod = $_POST['cod'];
	$nomeani = $_POST['nomeani'];
	$raca = $_POST['raca'];
	$sexo = $_POST['sexo'];
    $nascani = $_POST['nascani'];
	$info = $_POST['info'];
	$pacote = $_POST['pacote'];
	$datapre = $_POST['datapre'];
	$horario = $_POST['horario'];


}

$sql = "INSERT INTO table_contract (nomep, tel, cpf, email, nasc, cidade, ncartao, cod, nomeani, raca, sexo, nascani, info, pacote, datapre, horario) VALUES ('$nomep', '$tel', '$cpf', '$email', '$nasc', '$cidade', '$ncartao', '$cod', '$nomeani', '$raca', '$sexo', '$nascani', '$info', '$pacote', '$datapre', '$horario')";


if($connect->query($sql) === TRUE) {	
 		header("Refresh: 0;  url=home.php");
 	}
 else {
 	echo "Error ". $sql . ' ' . $connect->connect_error;

 }

 $connect->close();
 ?>
