function filtrarEventos(evento) {
  const todosRestaurantes = document.querySelectorAll(".restaurante-card");
  
  // Exibe todos os restaurantes
  if (evento === 'todos') {
    todosRestaurantes.forEach(restaurante => {
      restaurante.style.display = "block";
    });
  } else {

    todosRestaurantes.forEach(restaurante => {
      if (restaurante.classList.contains(evento)) {
        restaurante.style.display = "block"; 
      } else {
        restaurante.style.display = "none"; 
      }
    });
  }
}