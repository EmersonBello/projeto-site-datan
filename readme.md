CREATE DATABASE formulario;

USE formulario;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    curso ENUM('administracao', 'agronegocio', 'desenvolvimento', 'enfermagem', 'logistica') NOT NULL,
    identificacao_racial ENUM('branco', 'negro', 'pardo', 'indigena', 'outro') NOT NULL,
    evento ENUM('Miss EEEP', 'Desfile da Consciência Negra') NOT NULL,
    CONSTRAINT check_evento CHECK (
        (identificacao_racial IN ('negro', 'pardo') AND evento IN ('Desfile da Consciência Negra')) OR
        (evento = 'Miss EEEP')
    )
);
