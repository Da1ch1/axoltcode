document.addEventListener('DOMContentLoaded', () => {
  const filterItems = document.querySelectorAll('.filter-item');
  const topicCards = document.querySelectorAll('.topic-card');

  // Filtrar elementos por categoría
  filterItems.forEach(item => {
    item.addEventListener('click', () => {
      const category = item.getAttribute('data-category');

      // Elimina la clase activa de todos los elementos de filtro
      filterItems.forEach(filter => filter.classList.remove('active'));

      // Añadir la clase activa al filtro clickeado
      item.classList.add('active');

      // Muestra/oculta tarjetas basadas en la categoría
      topicCards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
          card.classList.remove('hidden');

          // Añadir la animación fade-right a la tarjeta activa
          // Primero, elimina la clase si ya se aplicó anteriormente
          card.classList.remove('fade-right');

          // Forzar la reactividad de la animación eliminando y volviendo a agregar la clase
          void card.offsetWidth; // Esto fuerza una reflujo para reiniciar la animación

          // Ahora, agrega la clase fade-right
          card.classList.add('fade-right');
        } else {
          card.classList.add('hidden');

          // Elimina la animación si no pertenece a la categoría seleccionada
          card.classList.remove('fade-right');
        }
      });
    });
  });
});

