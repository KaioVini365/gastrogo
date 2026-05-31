# GastroGo

Plataforma web para descoberta de restaurantes por ocasião e localização.

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

---

## Sobre

GastroGo permite que usuários encontrem restaurantes por tipo de ocasião — aniversário, jantar romântico, reunião de negócios, show ao vivo. A ideia nasceu de um problema simples: é difícil achar restaurante certo para cada situação.

O sistema está em desenvolvimento ativo. Cadastro e login funcionam, banco de dados está estruturado, interface básica no ar.

---

## Funcionalidades

### Funcionando agora
- Cadastro e login de usuários
- Edição e exclusão de conta
- Listagem de restaurantes por categoria de evento
- Filtro de eventos no frontend
- Banner com carrossel de imagens
- Design responsivo com Bootstrap 5

### Em andamento
- Busca de restaurantes do banco de dados (hoje os dados estão hardcoded)
- Sistema de avaliações
- Sistema de favoritos

### Planejado
- Busca por geolocalização real
- Sistema de reservas
- API RESTful

---

## Tecnologias

**Backend:** PHP 8.0+, MySQL 8.0+, PDO

**Frontend:** HTML5, CSS3, Bootstrap 5.3, JavaScript

**Ambiente:** WampServer, phpMyAdmin, VSCode

---

## Como rodar localmente

**Requisitos:** PHP 8.0+, MySQL 8.0+, WampServer ou XAMPP

```bash
git clone https://github.com/KaioVini365/gastrogo.git
```

Importe o banco de dados pelo phpMyAdmin:
1. Importe `database/schema.sql`
2. Importe `database/seed.sql`

Configure `config/connection.php` com suas credenciais MySQL:

```php
$host   = "localhost";
$dbname = "gastrogo_db";
$user   = "root";
$pass   = "";
```

Acesse `http://localhost/gastrogo/`

**Usuário de teste:**
- Email: `teste@gastrogo.com`
- Senha: `teste123`

---

## Estrutura do projeto

```
gastrogo/
├── config/
│   ├── connection.php    # Conexão PDO com MySQL
│   ├── process.php       # CRUD (cadastro, login, edição, exclusão)
│   └── url.php           # URL base
├── templates/
│   ├── header.php
├── database/
│   ├── schema.sql        # 6 tabelas + 1 view
│   └── seed.sql          # Dados de exemplo
├── img/
├── index.php
├── login.php
├── create.php
├── perfil.php
├── eventos.php
├── restau_prox.php
├── estyle.css
└── script.js
```

---

## Banco de dados

6 tabelas: `usuarios`, `restaurantes`, `eventos`, `avaliacoes`, `favoritos`, `reservas`

View `media_avaliacoes` calcula nota média por restaurante automaticamente.

```
usuarios (1) ──< (N) avaliacoes (N) >── (1) restaurantes
usuarios (1) ──< (N) favoritos (N)  >── (1) restaurantes
restaurantes (1) ──< (N) eventos
restaurantes (1) ──< (N) reservas >── (1) usuarios
```

---

## Segurança

- Senhas com `password_hash()`
- Prepared Statements via PDO (sem SQL injection)
- Controle de sessão PHP nas rotas protegidas
- CSRF tokens: a implementar

---

## Progresso

- [x] Banco de dados modelado e populado
- [x] Autenticação completa (cadastro, login, logout, edição, exclusão)
- [ ] Restaurantes vindos do banco
- [ ] Sistema de avaliações
- [ ] Deploy

---

## Autor

**Kaio Vinicius Soares Luiz**
Estudante de Sistemas de Informação — UVA

- GitHub: [@KaioVini365](https://github.com/KaioVini365)
- Portfolio: [kaiovini365.github.io/Portifolio](https://kaiovini365.github.io/Portifolio)

## Acesse o projeto https://gastrogo.great-site.net