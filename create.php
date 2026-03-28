<?php
  include_once("templates/header.php");
?>

  <header class="bg-danger text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="<?= $BASE_URL ?>img/logo edit.png" alt="Logo GastroGo" width="150">
      <nav>
        <a href="<?= $BASE_URL ?>index.php" class="text-white me-4">Início</a>
        <a href="<?= $BASE_URL ?>eventos.php" class="text-white me-4">Eventos</a>
        <a href="<?= $BASE_URL ?>restau prox.php" class="text-white me-4">Restaurantes Próximos</a>
      </nav>
    </div>
  </header>

  <div class="container mt-5" style="max-width: 500px;">
    <h1 class="mb-4">Cadastre-se no GastroGo</h1>

    <?php if(isset($_SESSION["msg"]) && $_SESSION["msg"] != ""): ?>
      <div class="alert alert-success"><?= $_SESSION["msg"] ?></div>
      <?php $_SESSION["msg"] = ""; ?>
    <?php endif; ?>

    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
      </div>
      <button type="submit" class="btn btn-danger w-100">Cadastrar</button>
      <div class="text-center mt-3">
        <a href="<?= $BASE_URL ?>index.php">Voltar para o início</a>
      </div>
    </form>
  </div>

  <footer class="bg-danger text-white text-center py-4 mt-5">
    <p>&copy; 2025 GastroGo – Todos os direitos reservados.</p>
  </footer>

</body>
</html>
