<?php
$servername = "localhost"; // ou o endereço do servidor do banco de dados
$username = "root"; // o nome de usuário do banco de dados
$password = ""; // a senha do banco de dados
$dbname = "library"; // o nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>
