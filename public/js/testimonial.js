const submitButton = document.getElementById('submitButton');
const confirmModal = document.getElementById('confirmModal');
const cancelButton = document.getElementById('cancelButton');
const confirmButtonModal = document.getElementById('confirmButton');
const testimonialTextArea = document.querySelector('textarea[name="testimonial"]');

// Cuando el botón de "Enviar" es presionado, verifica si el textarea está vacío
submitButton.addEventListener('click', function () {
  if (testimonialTextArea.value.trim() === '') {
    alert('Por favor, escribe un comentario antes de enviarlo.');
  } else {
    confirmModal.classList.remove('hidden');
    // Bloquear el scroll del fondo
    document.body.style.overflow = 'hidden';
  }
});

// Cuando el botón de "Cancelar" es presionado, oculta el modal
cancelButton.addEventListener('click', function () {
  confirmModal.classList.add('hidden');
  // Liberar el scroll del fondo
  document.body.style.overflow = 'auto';
});

// Cuando el botón de "Confirmar" es presionado, envía el formulario
confirmButtonModal.addEventListener('click', function () {
  document.getElementById('testimonialForm').submit();
});
