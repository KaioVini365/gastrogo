# 🍽️ GastroGo

> Plataforma web que conecta pessoas a restaurantes próximos, sugerindo opções para diferentes ocasiões e experiências gastronômicas.

---

## Sobre o Projeto

O GastroGo nasceu para resolver um problema simples: **você está em uma região desconhecida e não sabe onde comer bem.** A plataforma sugere restaurantes próximos filtrados por tipo de ocasião — seja um aniversário, um jantar romântico, uma reunião de negócios ou um show ao vivo.

---

## Funcionalidades

- **Carrossel de banners** com destaques e promoções de restaurantes parceiros
- **Opções Rápidas** por categoria de culinária — japonesa, churrasco, hambúrguer e vegetariana
- **Restaurante do Mês** — destaque para o estabelecimento mais bem avaliado pelos usuários
- **Filtro por ocasião** — encontre restaurantes ideais para aniversários, encontros românticos, negócios, despedidas, shows ao vivo e karaokê
- **Página de Eventos** — lista restaurantes com eventos especiais, filtráveis por categoria em tempo real via JavaScript
- **Restaurantes Próximos** — mapa integrado via Google Maps para localizar opções na sua região
- **Sistema completo de usuários (CRUD):**
  - **Cadastro** — criação de conta com e-mail único e senha criptografada
  - **Login / Logout** — autenticação segura com sessões PHP
  - **Perfil** — edição de e-mail e senha
  - **Exclusão de conta** — remoção permanente com confirmação

---

## Segurança

- Senhas armazenadas com `password_hash()` — nunca em texto puro
- Autenticação via `password_verify()`
- Proteção de páginas restritas por verificação de sessão
- Prevenção de SQL Injection via PDO com `bindParam()`
- Arquivo `connection.php` ignorado pelo Git via `.gitignore`

---

## Tecnologias Utilizadas

| Tecnologia | Uso |
|---|---|
| PHP 8.3 | Backend, sessões e lógica de negócio |
| MySQL 8.4 | Banco de dados de usuários |
| PDO | Conexão segura com o banco de dados |
| Bootstrap 5.3 | Layout responsivo e componentes visuais |
| JavaScript | Filtro dinâmico de eventos sem recarregar a página |
| HTML5 / CSS3 | Estrutura e estilização |
| Google Maps Embed | Mapa de restaurantes próximos |

---

## 📁 Estrutura de Pastas

```
GastroGo/
├── config/
│   ├── connection.php     # Conexão com o banco de dados (ignorado pelo Git)
│   ├── connection.example.php  # Modelo de conexão para configuração local
│   ├── process.php        # Lógica CRUD de usuários (create, login, editar, deletar, logout)
│   └── url.php            # URL base do projeto
├── templates/
│   ├── header.php         # Cabeçalho global com nav dinâmica (logado/deslogado)
│   └── footer.php         # Rodapé global
├── img/                   # Imagens do site
├── index.php              # Página inicial
├── login.php              # Login de usuários
├── create.php             # Cadastro de usuários
├── perfil.php             # Perfil — editar e excluir conta
├── eventos.php            # Página de eventos com filtro dinâmico
├── restau prox.php        # Página de restaurantes próximos com mapa
└── estilo.css             # Estilos principais
```

---

## Banco de Dados

```sql
CREATE DATABASE gastrogo;

USE gastrogo;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(191) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL,
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## Como Rodar Localmente

**Pré-requisitos:** WampServer 3.4+ instalado e rodando.

1. Clone o repositório:
```bash
git clone https://github.com/KaioVini365/gastrogo.git
```

2. Copie a pasta para:
```
C:\wamp64\www\Gastrogo\
```

3. Crie o arquivo `config/connection.php` com base no `connection.example.php`:
```php
<?php
  $host   = "localhost";
  $dbname = "gastrogo";
  $user   = "root";
  $pass   = ""; 

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
  }
```

4. Crie o banco de dados pelo PHPMyAdmin em `http://localhost/phpmyadmin` e execute o SQL acima.

5. Acesse no navegador:
```
http://localhost/Gastrogo/
```

---

## Desenvolvido por

**Kaio Vinicius Soares Luiz** — Estudante de Sistemas de Informação | UVA  
Projeto acadêmico desenvolvido para a disciplina de Desenvolvimento Web.
