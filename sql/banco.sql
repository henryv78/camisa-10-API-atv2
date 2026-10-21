-- Banco separado: importar não apaga os times da versão anterior.
CREATE DATABASE IF NOT EXISTS camisa_10_basico
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE camisa_10_basico;

CREATE TABLE IF NOT EXISTS times (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    ponta_esquerda VARCHAR(100) NOT NULL,
    centroavante VARCHAR(100) NOT NULL,
    ponta_direita VARCHAR(100) NOT NULL,
    meia_esquerda VARCHAR(100) NOT NULL,
    volante VARCHAR(100) NOT NULL,
    meia_direita VARCHAR(100) NOT NULL,
    lateral_esquerdo VARCHAR(100) NOT NULL,
    zagueiro_esquerdo VARCHAR(100) NOT NULL,
    zagueiro_direito VARCHAR(100) NOT NULL,
    lateral_direito VARCHAR(100) NOT NULL,
    goleiro VARCHAR(100) NOT NULL
);
