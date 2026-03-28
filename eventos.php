<?php
  include_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GastroGo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="outro.css">
</head>
<body>

  <!-- TOPO -->
  <header class="bg-danger text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="img/logo edit.png" alt="Logo GastroGo" width="150">
      <nav> 
        <a href="<?= $BASE_URL ?>index.php" class=me-5>Início</a>
        <a href="<?= $BASE_URL ?>eventos.php" class=me-5>Eventos</a>
        <a href="<?= $BASE_URL ?>restau prox.php" class=me-5>Restaurantes Próximos</a>
       
      </nav>
    </div>
  </header>

 
  
    <section id="eventos">
        <h2>Eventos dos Restaurantes</h2>
        <label for="eventoSelect">Filtrar por evento:</label>
        <div id="eventoSelect" class="select">
          <div class="opcao" onclick="filtrarEventos('todos')">Todos</div>
          <div class="opcao" onclick="filtrarEventos('show-ao-vivo')">Show ao Vivo</div>
          <div class="opcao" onclick="filtrarEventos('romantico')">Romântico</div>
          <div class="opcao" onclick="filtrarEventos('negocios')">Negócios</div>
          <div class="opcao" onclick="filtrarEventos('niver')">Aniversários</div>
        </div>
    
        <div id="Eventos">
            <a href="https://www.google.com/maps?q=Restaurante+Bella+Vista" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card show-ao-vivo">
                  <h3>Restaurante Bella Vista</h3>
                  <p>Show ao vivo enquanto você janta!</p>
                  <p><strong>Preço:</strong> a partir de 80,00R$ por pessoa</p>
                  <p><strong>Comida:</strong> Italiana</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Sabor+do+Brasil" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card niver">
                  <h3>Restaurante Sabor do Brasil</h3>
                  <p>Festa de aniversário com música ao vivo!</p>
                  <p><strong>Preço:</strong> a partir de 50,00R$ por pessoa</p>
                  <p><strong>Comida:</strong> Brasileira</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Doce+Brilho" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card niver">
                  <h3>Restaurante Doce Brilho</h3>
                  <p>Ambiente decorado, bolo incluso e música para animar a festa.</p>
                  <p><strong>Preço:</strong> a partir de 78,90R$ por pessoa</p>
                  <p><strong>Comida:</strong> Internacional</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Celebra+Gourmet" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card niver">
                  <h3>Restaurante Celebra Gourmet</h3>
                  <p>Ideal para festas com grupos grandes e menu personalizado para aniversariantes.</p>
                  <p><strong>Preço:</strong> a partir de 89,00R$ por pessoa</p>
                  <p><strong>Comida:</strong> Contemporânea</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Parabéns+%26+Prato" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card niver">
                  <h3>Restaurante Parabéns & Prato</h3>
                  <p>Decoração temática e equipe preparada pra deixar sua noite especial.</p>
                  <p><strong>Preço:</strong> a partir de 72,50R$ por pessoa</p>
                  <p><strong>Comida:</strong> Italiana</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Brisa+da+Festa" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card negocios">
                  <h3>Restaurante Brisa da Festa</h3>
                  <p>Lugar tranquilo para discutir negócios</p>
                  <p><strong>Preço:</strong> a partir de 30,00R$ por pessoa</p>
                  <p><strong>Comida:</strong> Italiana</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+La+Dolce+Vita" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card romantico">
                  <h3>Restaurante La Dolce Vita</h3>
                  <p>Ambiente romântico para um jantar especial.</p>
                  <p><strong>Preço:</strong> a partir de 105,90R$ por pessoa</p>
                  <p><strong>Comida:</strong> Francesa</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Sabor+do+Oriente" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card show-ao-vivo">
                  <h3>Restaurante Sabor do Oriente</h3>
                  <p>Só músicas internacionais!!</p>
                  <p><strong>Preço:</strong> a partir de 45,50R$ por pessoa</p>
                  <p><strong>Comida:</strong> Árabe</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Som+%26+Sabor" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card show-ao-vivo">
                  <h3>Restaurante Som & Sabor</h3>
                  <p>Show ao vivo com só músicas</p>
                  <p><strong>Preço:</strong> a partir de 67,50R$ por pessoa</p>
                  <p><strong>Comida:</strong> Brasileira</p>
                </div>
              </a>
              
              <a href="https://www.google.com/maps?q=Restaurante+Aconchego" target="_blank" style="text-decoration: none; color: inherit;">
                <div class="restaurante-card romantico">
                  <h3>Restaurante Aconchego</h3>
                  <p>Ideal para um jantar romântico.</p>
                  <p><strong>Preço:</strong> a partir de 85,00R$ por pessoa</p>
                  <p><strong>Comida:</strong> Japonesa</p>
                </div>
              </a>
              
        </div>
      </section>
  
  
  <!-- RODAPÉ -->
  <footer class="bg-danger text-white text-center py-4">
    <p>&copy; 2025 GastroGo – Todos os direitos reservados.</p>
  </footer>
</body>
<script src="script.js"></script>
</html>