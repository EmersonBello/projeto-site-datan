<?php

    $host = "localhost";
    $user = "root"; 
    $pass = ""; 
    $dbname = "formulario";

    $conn = new mysqli($host, $user, $pass, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    echo "Conexão bem-sucedida!";
    
    $conn->$query = "INSERT INTO usuarios (id,nome, email, telefone, curso, identificacao_racial, evento) VALUES (auto_increment, '' , '', '', '', '', '')";
    
    // Preparar e vincular
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssss", $nome, $email, $telefone, $curso, $identificacao_racial, $evento);
    
    // Executar a consulta
    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a declaração
    $stmt->close();
?>
 


