//Este es codigo para el icono del perfil 
function toggleperfil() {
  const menu = document.getElementById('user-menu');
  const isVisible = menu.classList.contains('hidden');
  
  if (isVisible) {
    menu.classList.remove('hidden');  // Muestra el menú
  } else {
    menu.classList.add('hidden');  // Oculta el menú
  }
}
///////////////////////////////////////////////////////////////
// Función para cerrar el menú si se hace clic fuera de él
function closeMenuOnClickOutside(event) {
  const menu = document.getElementById('user-menu');
  const menuButton = document.getElementById('user-menu-button');

  // Si el clic no fue en el menú ni en el botón para abrirlo, cierra el menú
  if (!menu.contains(event.target) && !menuButton.contains(event.target)) {
      menu.classList.add('hidden');
  }
}

// Escucha para cerrar el menú al hacer clic fuera de él
document.addEventListener('click', closeMenuOnClickOutside);



//Script para el icono de menu en pantalla pequeña
function toggleMenu() {
  const mobileMenu = document.getElementById("mobile-menu");
  const body = document.body;

  // Verificar si el menú está abierto o cerrado
  if (mobileMenu.classList.contains("transform") && mobileMenu.classList.contains("-translate-x-full")) {
    mobileMenu.classList.remove("-translate-x-full");
    mobileMenu.classList.add("translate-x-0");
    body.style.overflow = "hidden"; // Deshabilitar el scroll del body
  } else {
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("-translate-x-full");
    body.style.overflow = "auto"; // Habilitar el scroll del body
  }
}
