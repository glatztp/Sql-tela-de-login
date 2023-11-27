<?php

$servername = "5050";
$username = "root";
$password = "yes";
$dbname = "login";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem sucedida";
$conn->close();
?>



