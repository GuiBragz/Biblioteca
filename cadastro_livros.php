<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Coletar dados do formulário
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];
    $ano_publicacao = $_POST['ano-publicacao'];

    // Inserir dados na tabela books
    $sql = "INSERT INTO books (title, author, category_id, publication_year) VALUES ('$titulo', '$autor', '$categoria', '$ano_publicacao')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo livro adicionado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
