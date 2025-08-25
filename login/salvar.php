<?php

$servername = 'localhost';
$username = 'nicolas';
$password = 'nic_freitas_2405';
$dbaname = 'portifolio_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);

    $nome = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO acessos (nome, email, gender) VALUES ('$nome', '$email', '$gender')";
}

if ($conn->query($sql) === TRUE){
    echo "dados salvos com sucesso!";
} else{
    echo "Erro: ". $sql "<br>". $conn->error;
}

$conn->close();

?>