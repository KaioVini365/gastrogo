
-- GASTROGO - DADOS DE EXEMPLO (SEED)


USE gastrogo_db;


INSERT INTO restaurantes (nome, descricao, tipo_cozinha, preco_medio, endereco, bairro, cidade, estado, telefone, latitude, longitude, imagem_url) VALUES
('Restaurante Bella Vista', 'Show ao vivo enquanto você janta! Ambiente elegante com música italiana ao vivo todas as sextas e sábados.', 'Italiana', 80.00, 'Rua das Laranjeiras, 123', 'Laranjeiras', 'Rio de Janeiro', 'RJ', '(21) 2222-3333', -22.9335, -43.1825, 'bella_vista.jpg'),

('Restaurante Sabor do Brasil', 'Festa de aniversário com música ao vivo! Espaço perfeito para comemorações com família e amigos.', 'Brasileira', 50.00, 'Av. Presidente Vargas, 456', 'Centro', 'Rio de Janeiro', 'RJ', '(21) 3333-4444', -22.9035, -43.1825, 'sabor_brasil.jpg'),

('Restaurante Doce Brilho', 'Ambiente decorado, bolo incluso e música para animar a festa. Especializado em festas de aniversário.', 'Internacional', 78.90, 'Rua Visconde de Pirajá, 789', 'Ipanema', 'Rio de Janeiro', 'RJ', '(21) 4444-5555', -22.9838, -43.1964, 'doce_brilho.jpg'),

('Restaurante Celebra Gourmet', 'Ideal para festas com grupos grandes e menu personalizado para aniversariantes.', 'Contemporânea', 89.00, 'Rua Barão da Torre, 321', 'Ipanema', 'Rio de Janeiro', 'RJ', '(21) 5555-6666', -22.9847, -43.1989, 'celebra_gourmet.jpg'),

('Restaurante Parabéns & Prato', 'Decoração temática e equipe preparada para deixar sua noite especial.', 'Italiana', 72.50, 'Rua Garcia D Ávila, 654', 'Ipanema', 'Rio de Janeiro', 'RJ', '(21) 6666-7777', -22.9851, -43.1978, 'parabens_prato.jpg'),

('Restaurante Brisa da Festa', 'Lugar tranquilo para discutir negócios. Ambiente reservado e cardápio executivo.', 'Italiana', 30.00, 'Av. Rio Branco, 987', 'Centro', 'Rio de Janeiro', 'RJ', '(21) 7777-8888', -22.9068, -43.1729, 'brisa_festa.jpg'),

('Restaurante La Dolce Vita', 'Ambiente romântico para um jantar especial. Vista para o mar e música ambiente francesa.', 'Francesa', 105.90, 'Av. Atlântica, 1020', 'Copacabana', 'Rio de Janeiro', 'RJ', '(21) 8888-9999', -22.9711, -43.1822, 'la_dolce_vita.jpg'),

('Restaurante Sabor do Oriente', 'Só músicas internacionais! Ambiente moderno com culinária árabe autêntica.', 'Árabe', 45.50, 'Rua Senador Vergueiro, 234', 'Flamengo', 'Rio de Janeiro', 'RJ', '(21) 9999-0000', -22.9292, -43.1755, 'sabor_oriente.jpg'),

('Restaurante Som & Sabor', 'Show ao vivo com só músicas brasileiras. MPB, samba e bossa nova ao vivo.', 'Brasileira', 67.50, 'Rua do Catete, 567', 'Catete', 'Rio de Janeiro', 'RJ', '(21) 1111-2222', -22.9250, -43.1778, 'som_sabor.jpg'),

('Restaurante Aconchego', 'Ideal para um jantar romântico. Ambiente intimista com culinária japonesa contemporânea.', 'Japonesa', 85.00, 'Rua Dias Ferreira, 890', 'Leblon', 'Rio de Janeiro', 'RJ', '(21) 2222-3344', -22.9840, -43.2172, 'aconchego.jpg');


INSERT INTO eventos (restaurante_id, tipo, nome_evento, descricao, data_inicio, data_fim, horario_inicio, horario_fim) VALUES
-- Bella Vista (show ao vivo)
(1, 'show-ao-vivo', 'Noite Italiana com Música ao Vivo', 'Todas as sextas e sábados com repertório de clássicos italianos', '2025-01-01', '2025-12-31', '20:00:00', '23:00:00'),

-- Sabor do Brasil (aniversário)
(2, 'niver', 'Pacote Festa Completo', 'Inclui decoração, bolo e música ao vivo', '2025-01-01', '2025-12-31', '18:00:00', '23:00:00'),

-- Doce Brilho (aniversário)
(3, 'niver', 'Aniversário VIP', 'Ambiente decorado + bolo personalizado', '2025-01-01', '2025-12-31', '19:00:00', '00:00:00'),

-- Celebra Gourmet (aniversário)
(4, 'niver', 'Festa Premium', 'Menu personalizado para o aniversariante', '2025-01-01', '2025-12-31', '18:00:00', '23:00:00'),

-- Parabéns & Prato (aniversário)
(5, 'niver', 'Celebração Especial', 'Decoração temática inclusa', '2025-01-01', '2025-12-31', '19:00:00', '00:00:00'),

-- Brisa da Festa (negócios)
(6, 'negocios', 'Almoço Executivo', 'Ambiente reservado para reuniões', '2025-01-01', '2025-12-31', '12:00:00', '15:00:00'),

-- La Dolce Vita (romântico)
(7, 'romantico', 'Jantar Romântico', 'Menu especial para casais', '2025-01-01', '2025-12-31', '19:00:00', '23:00:00'),

-- Sabor do Oriente (show ao vivo)
(8, 'show-ao-vivo', 'Noite Árabe', 'Música internacional ao vivo', '2025-01-01', '2025-12-31', '20:00:00', '23:00:00'),

-- Som & Sabor (show ao vivo)
(9, 'show-ao-vivo', 'MPB e Samba ao Vivo', 'Terças, quintas e sábados', '2025-01-01', '2025-12-31', '20:00:00', '00:00:00'),

-- Aconchego (romântico)
(10, 'romantico', 'Experiência Omakase', 'Jantar japonês especial para dois', '2025-01-01', '2025-12-31', '19:00:00', '22:00:00');


-- Senha: teste123 (hash gerado com password_hash)
INSERT INTO usuarios (email, senha, nome) VALUES
('teste@gastrogo.com', 'abc123,,k1', 'Usuário Teste'),
('kaio@gastrogo.com', 'abc123,,k2', 'Kaio Vinicius');


INSERT INTO avaliacoes (usuario_id, restaurante_id, nota, comentario, data_visita) VALUES
(1, 1, 5, 'Excelente! A música ao vivo é maravilhosa e a comida divina.', '2025-01-10'),
(1, 7, 5, 'Perfeito para um jantar romântico. Ambiente incrível!', '2025-01-15'),
(2, 2, 4, 'Ótimo para festas de aniversário. Só achei um pouco caro.', '2025-01-20'),
(2, 9, 5, 'A melhor MPB ao vivo do Rio! Comida brasileira autêntica.', '2025-01-25');


INSERT INTO favoritos (usuario_id, restaurante_id) VALUES
(1, 1),
(1, 7),
(1, 10),
(2, 2),
(2, 9);


