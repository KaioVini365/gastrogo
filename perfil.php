<?php
  include_once("templates/header.php");

  // Se não estiver logado, redireciona para login
  if(!isset($_SESSION["usuario_id"])) {
    header("Location: " . $BASE_URL . "login.php");
    exit;
  }

  // Busca dados atuais do usuário
  include_once("config/connection.php");
  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
  $stmt->bindParam(":id", $_SESSION["usuario_id"]);
  $stmt->execute();
  $usuario = $stmt->fetch();
  $conn = null;
?>

  <header class="bg-danger text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
      <img src="<?= $BASE_URL ?>img/logo edit.png" alt="Logo GastroGo" width="150">
      <nav>
        <a href="<?= $BASE_URL ?>index.php" class="text-white me-4">Início</a>
        <a href="<?= $BASE_URL ?>eventos.php" class="text-white me-4">Eventos</a>
        <a href="<?= $BASE_URL ?>restau_prox.php" class="text-white me-4">Restaurantes Próximos</a>
        <a href="<?= $BASE_URL ?>config/process.php?type=logout" class="text-white">Sair</a>
      </nav>
    </div>
  </header>

  <div class="container mt-5" style="max-width: 500px;">
    <h1 class="mb-4">Meu Perfil</h1>

    <?php if(isset($_SESSION["msg"]) && $_SESSION["msg"] != ""): ?>
      <div class="alert alert-success"><?= $_SESSION["msg"] ?></div>
      <?php $_SESSION["msg"] = ""; ?>
    <?php endif; ?>

    <!-- EDITAR DADOS -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Editar dados</h5>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST">
          <input type="hidden" name="type" value="editar">
          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $usuario['email'] ?>" required>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Nova senha: <small class="text-muted">(deixe em branco para manter a atual)</small></label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite nova senha">
          </div>
          <button type="submit" class="btn btn-danger w-100">Salvar alterações</button>
        </form>
      </div>
    </div>

    <!-- DELETAR CONTA -->
    <div class="card border-danger">
      <div class="card-body">
        <h5 class="card-title text-danger">Excluir conta</h5>
        <p class="text-muted">Esta ação é irreversível. Todos os seus dados serão removidos.</p>
        <form action="<?= $BASE_URL ?>config/process.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta?')">
          <input type="hidden" name="type" value="deletar">
          <button type="submit" class="btn btn-outline-danger w-100">Excluir minha conta</button>
        </form>
      </div>
    </div>

  </div>

  <footer class="bg-danger text-white text-center py-4 mt-5">
    <p>&copy; 2025 GastroGo – Todos os direitos reservados.</p>
  </footer>

</body>
</html>
