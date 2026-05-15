-- GASTROGO - SCHEMA DO BANCO DE DADOS

DROP DATABASE IF EXISTS gastrogo_db;

CREATE DATABASE gastrogo_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE gastrogo_db;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL COMMENT 'utilizei password_hash',
    nome VARCHAR(100) DEFAULT NULL,
    telefone VARCHAR(20) DEFAULT NULL,
    foto_perfil VARCHAR(300) DEFAULT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE restaurantes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    descricao TEXT,
    tipo_cozinha VARCHAR(100) COMMENT 'os tipos serão italiana, japonesa, brasileira, etc',
    preco_medio DECIMAL(10,2),
    latitude DECIMAL(10,8) DEFAULT NULL,
    longitude DECIMAL(11,8) DEFAULT NULL,
    endereco VARCHAR(300),
    bairro VARCHAR(100),
    cidade VARCHAR(100) DEFAULT 'Rio de Janeiro',
    estado CHAR(2) DEFAULT 'RJ',
    cep VARCHAR(10),
    telefone VARCHAR(20),
    site VARCHAR(200),
    instagram VARCHAR(100),
    imagem_url VARCHAR(300),
    horario_funcionamento VARCHAR(200),
    capacidade_pessoas INT DEFAULT NULL,
    aceita_reserva BOOLEAN DEFAULT TRUE,
    estacionamento BOOLEAN DEFAULT FALSE,
    acessibilidade BOOLEAN DEFAULT FALSE,
    wifi BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_tipo_cozinha(tipo_cozinha),
    INDEX idx_bairro (bairro),
    INDEX idx_localizacao (latitude, longitude)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE eventos(
    id int PRIMARY KEY AUTO_INCREMENT,
    restaurante_id INT NOT NULL,
    tipo VARCHAR(50) NOT NULL COMMENT 'pode ser show ao vivo, romantico, business, etc',
    nome_evento VARCHAR(200) NOT NULL,
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE,
    horario_inicio TIME,
    horario_fim TIME,
    preco_adicional DECIMAL(10,2) DEFAULT 0.00,
    vagas_disponiveis INT DEFAULT NULL,
    ativo BOOLEAN DEFAULT TRUE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id) ON DELETE CASCADE,
    INDEX idx_tipo (tipo),
    INDEX idx_data (data_inicio, data_fim)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE avaliacoes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    restaurante_id INT NOT NULL,
    nota INT NOT NULL CHECK (nota BETWEEN 1 AND 5),
    comentario TEXT,
    data_visita DATE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    UNIQUE KEY unique_avaliacao (usuario_id, restaurante_id) COMMENT 'usuário avalia 1 vez',
    INDEX idx_restaurante (restaurante_id),
    INDEX idx_nota (nota)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE favoritos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    restaurante_id INT NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id),
    INDEX idx_usuario (usuario_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE reservas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    restaurante_id INT NOT NULL,
    data_reserva DATE NOT NULL,
    horario TIME NOT NULL,
    numero_pessoas INT NOT NULL,
    observacoes TEXT,
    status ENUM('pendente', 'confirmada', 'cancelada', 'concluida') DEFAULT 'pendente',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id) ON DELETE CASCADE,
    INDEX idx_data (data_reserva),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE VIEW media_avaliacoes AS /* media sempre atualizada */
SELECT
    r.id AS restaurante_id,
    r.nome AS restaurante_nome,
    COUNT(a.id) AS total_avaliacoes,
    ROUND(AVG(a.nota), 1) AS nota_media
FROM restaurantes r
LEFT JOIN avaliacoes a ON r.id = a.restaurante_id
GROUP BY r.id, r.nome;