
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
        <a href="<?= $BASE_URL ?>index.php" class="text-white me-4" >Início</a>
        <a href="<?= $BASE_URL ?>eventos.php" class="text-white me-4">Eventos</a>
        <a href="<?= $BASE_URL ?>restau_prox.php" class="text-white me-4">Restaurantes Próximos</a>
        
      </nav>
      
    </div>
  </header>
  <h4 class="text-center">Descubra os melhores sabores que estão bem pertinho de você!
    Com o GastroGo, você encontra restaurantes próximos à sua localização atual, sem complicação. É só abrir, deixar a gente te localizar, e pronto — as opções aparecem na sua tela, do jeitinho que você gosta. <br>
    
    Seja um almoço rápido, um date romântico ou um rolê com música ao vivo, a gente te mostra onde ir agora!<br>
    Nada de ficar procurando por horas... Aqui é na hora, no gosto e no bairro. 😎 </h4>
  <iframe class="mapa-centralizado" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0422393424346!2d-43.226205620390125!3d-22.911812825753053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e57963eedf3%3A0xaf52199fd71ffebb!2sUniversidade%20Veiga%20de%20Almeida%20-%20Campus%20Tijuca!5e0!3m2!1spt-BR!2sbr!4v1742518204714!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  <!-- RODAPÉ -->
  <footer class="bg-danger text-white text-center py-4">
    <p>&copy; 2025 GastroGo – Todos os direitos reservados.</p>
  </footer>

</body>
</html>