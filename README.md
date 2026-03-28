🍽️ GastroGo



Plataforma web que conecta pessoas a restaurantes próximos, sugerindo opções para diferentes ocasiões e experiências gastronômicas.





📖 Sobre o Projeto

O GastroGo nasceu para resolver um problema simples: você está em uma região desconhecida e não sabe onde comer bem. A plataforma sugere restaurantes próximos filtrados por tipo de ocasião — seja um aniversário, um jantar romântico, uma reunião de negócios ou um show ao vivo.



✨ Funcionalidades



🎠 Carrossel de banners com destaques e promoções de restaurantes parceiros

🍣 Opções Rápidas por categoria de culinária — japonesa, churrasco, hambúrguer e vegetariana

🏆 Restaurante do Mês — destaque para o estabelecimento mais bem avaliado pelos usuários

🎉 Filtro por ocasião — encontre restaurantes ideais para aniversários, encontros românticos, negócios, despedidas, shows ao vivo e karaokê

📅 Página de Eventos — lista restaurantes com eventos especiais, filtráveis por categoria em tempo real via JavaScript

📍 Restaurantes Próximos — mapa integrado via Google Maps para localizar opções na sua região

📝 Cadastro de usuários — criação de conta com e-mail e senha criptografada





🛠️ Tecnologias Utilizadas

TecnologiaUsoPHP 8.3Backend e renderização de páginasMySQL 8.4Banco de dados de usuáriosBootstrap 5.3Layout responsivo e componentes visuaisJavaScriptFiltro dinâmico de eventos sem recarregar a páginaHTML5 / CSS3Estrutura e estilizaçãoPDOConexão segura com o banco de dadosGoogle Maps EmbedMapa de restaurantes próximos



📁 Estrutura de Pastas

GastroGo/

├── config/

│   ├── connection.php   # Conexão com o banco de dados

│   ├── process.php      # Lógica de cadastro de usuários

│   └── url.php          # Geração dinâmica da URL base

├── templates/

│   ├── header.php       # Cabeçalho global (HTML head + Bootstrap)

│   └── footer.php       # Rodapé global

├── img/                 # Imagens do site

├── css/                 # Estilos adicionais

├── index.php            # Página inicial

├── eventos.php          # Página de eventos

├── restau prox.php      # Página de restaurantes próximos

├── create.php           # Cadastro de usuários

└── estilo.css           # Estilos principais



🚀 Como Rodar Localmente

Pré-requisitos: WampServer 3.4+ instalado e rodando.



Clone o repositório:



bashgit clone https://github.com/seu-usuario/gastrogo.git

```



2\. Copie a pasta para:

```

C:\\wamp64\\www\\Gastrogo\\



Acesse o PHPMyAdmin em http://localhost/phpmyadmin e crie o banco:



sqlCREATE DATABASE gastrogo;



USE gastrogo;



CREATE TABLE usuarios (

&#x20; id INT AUTO\_INCREMENT PRIMARY KEY,

&#x20; email VARCHAR(191) NOT NULL UNIQUE,

&#x20; senha VARCHAR(255) NOT NULL,

&#x20; criado\_em TIMESTAMP DEFAULT CURRENT\_TIMESTAMP

);

```



4\. Acesse no navegador:

```

http://localhost/Gastrogo/



👨‍💻 Desenvolvido por

Kaio Vinicius Soares Luiz — Estudante de Sistemas de Informação | UVA

Projeto acadêmico desenvolvido para a disciplina de Desenvolvimento Web.

