<?php
require_once 'db_connect.php';

if($_POST){
    $nomeanimal = $_POST['nomeanimal'];
	$nomep = $_POST['nomep'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$cpf = $_POST['cpf'];
	$tel = $_POST['telefone'];
	
	
	
	
}

 $sql = "INSERT INTO adota_animals (nomeanimal, nomep, email, endereco, cidade, bairro, cpf, telefone) VALUES ('$nomeanimal', '$nomep', '$email', '$endereco', '$cidade','$bairro', '$cpf', '$telefone')";


 if($connect->query($sql) === TRUE) {	
 		header("Refresh: 0;  url=home.php");
 	}
 else {
 	echo "Error ". $sql . ' ' . $connect->connect_error;

 }

 $connect->close();
 ?>
