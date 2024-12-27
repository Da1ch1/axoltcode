const languageSelectors = document.querySelectorAll(".language-selector");
const codeContents = document.querySelectorAll(".code-content");
let currentLanguage = "py";

languageSelectors.forEach((selector) => {
  selector.addEventListener("click", () => {
    const selectedLang = selector.getAttribute("data-lang");

    if (currentLanguage !== selectedLang) {
      currentLanguage = selectedLang;

      // Mostrar solo el contenido del lenguaje seleccionado
      codeContents.forEach((content) => {
        if (content.getAttribute("data-lang") === selectedLang) {
          content.classList.remove("hidden");
          resetAnimation(content);
          typeEffect(content);
        } else {
          content.classList.add("hidden");
        }
      });
    }
  });
});

function resetAnimation(container) {
  const spans = container.querySelectorAll("span[data-text]");
  spans.forEach((span) => (span.textContent = ""));
}

function typeEffect(container) {
  const spans = container.querySelectorAll("span[data-text]");
  let currentIndex = 0;

  function typeNextSpan() {
    if (currentIndex < spans.length) {
      const span = spans[currentIndex];
      const text = span.getAttribute("data-text");
      let charIndex = 0;

      const interval = setInterval(() => {
        if (charIndex < text.length) {
          span.textContent += text[charIndex];
          charIndex++;
        } else {
          clearInterval(interval);
          currentIndex++;
          setTimeout(typeNextSpan, 500);
        }
      }, 80);
    }
  }

  typeNextSpan();
}

// Iniciar animación para el lenguaje por defecto
typeEffect(document.querySelector(`.code-content[data-lang="${currentLanguage}"]`));




//script del grid para fade-right
document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const element = entry.target;

        if (entry.isIntersecting && element.dataset.visible !== "true") {
          // Elemento entra a la vista
          element.classList.add("animate-slide-in");
          element.classList.remove("animate-slide-out");
          element.dataset.visible = "true"; // Marca como visible
        } else if (!entry.isIntersecting && element.dataset.visible !== "false") {
          // Elemento sale de la vista
          element.classList.add("animate-slide-out");
          element.classList.remove("animate-slide-in");
          element.dataset.visible = "false"; // Marca como no visible
        }
      });
    },
    { threshold: 0.1 } // Sensibilidad del observador
  );

  // Inicializar elementos observados
  const observedElements = document.querySelectorAll(".observed");
  observedElements.forEach((el) => {
    el.dataset.visible = "false"; // Inicializa como no visible
    observer.observe(el);
  });
});