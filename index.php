<?php
  include_once("templates/header.php");
?>

  <header class="bg-danger text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="<?= $BASE_URL ?>img/logo edit.png" alt="Logo GastroGo" width="150">
      <nav>
        <a href="<?= $BASE_URL ?>eventos.php" class="text-white me-4">Eventos</a>
        <a href="<?= $BASE_URL ?>restau_prox.php" class="text-white me-4">Restaurantes Próximos</a>

        <?php if(isset($_SESSION["usuario_id"])): ?>
          <a href="<?= $BASE_URL ?>perfil.php" class="text-white me-4">
            👤 <?= $_SESSION["usuario_email"] ?>
          </a>
          <a href="<?= $BASE_URL ?>config/process.php?type=logout" class="text-white">Sair</a>
        <?php else: ?>
          <a href="<?= $BASE_URL ?>login.php" class="text-white me-4">Entrar</a>
          <a href="<?= $BASE_URL ?>create.php" class="text-white">Cadastre-se</a>
        <?php endif; ?>
      </nav>
    </div>
  </header>

  <section id="banner">
    <div id="carouselExample" class="carousel slide banner-gastrogo" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= $BASE_URL ?>img/marvermelho.jpg" class="d-block w-100"   alt="Banner 1">
        </div>
        <div class="carousel-item">
          <img src="<?= $BASE_URL ?>img/churrascaria.jpg  " class="d-block w-100" alt="Banner 2">
        </div>
        <div class="carousel-item">
          <img src="<?= $BASE_URL ?>img/hamburgueria.jpg" class="d-block w-100" alt="Banner 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section>

   

  <section class="py-5 bg-danger text-white">
    <div class="container text-center">
      <h2 class="fs-4">Melhor Restaurante do Mês!</h2>
      <div class="row align-items-center mt-4 justify-content-center">
        <div class="col-md-4 text-start">
          <p class="fs-5">Parabéns ao Restaurante Pioneiro por conquistar o topo das avaliações este mês no GastroGo!</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="<?= $BASE_URL ?>img/fachada.jpg" class="img-fluid rounded mx-auto d-block" alt="Restaurante Destaque">
        </div>
        <div class="col-md-4 text-end">
          <p class="fs-5">Com atendimento de excelência, ambiente acolhedor e pratos irresistíveis, ele conquistou o paladar e o coração dos nossos usuários.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <h3 class="mb-4 text-center">Favoritos por Ocasião</h3>
      <div class="row text-center">
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://mammajamma.com.br">Aniversários</a></button>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://loirebistro.com.br">Românticos</a></button>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://www.instagram.com/orla21rooftop/?hl=en">Negócios</a></button>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://www.outback.com.br">Despedidas</a></button>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://www.instagram.com/bobobaroficial/?hl=en">Show ao vivo</a></button>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-3">
          <button class="btn btn-outline-danger w-100"><a href="https://bigbenpub.com.br">Karaokê</a></button>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-danger text-white text-center py-4">
    <p>& copy; 2025 GastroGo – Todos os direitos reservados.</p>
  </footer>

</body>
</html>
