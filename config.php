<html style="text-align: center;" backgraund-color="#e3e3e3">
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
    
    $conn->$query = "INSERT INTO usuario (id, nome, email, telefone, curso, identificacao_racial, evento) VALUES (auto_increment, '$_POST[nome]', '$_POST[email]', '$_POST[telefone]', '$_POST[curso]', '$_POST[identificacao_racial]', '$_POST[evento]')";
       
?>
</html>
