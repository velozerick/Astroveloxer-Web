document.addEventListener("DOMContentLoaded", () => {
  // ================================
  // Filtro de Imágenes
  // ================================
  const buttons = document.querySelectorAll(".filter-buttons button");
  const items = document.querySelectorAll(".gallery-item");

  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Quitar clase activa a todos los botones
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");
      items.forEach((item) => {
        const category = item.getAttribute("data-category");
        if (filter === "all" || category === filter) {
          item.style.display = "block";
          item.classList.add("fade-in");
        } else {
          item.style.display = "none";
        }
      });
    });
  });

  // ================================
  // Mostrar Info en Lightbox
  // ================================
  window.showImageInfo = function (button) {
    const item = button.closest(".gallery-item");
    const image = item.querySelector("img").src;
    const details = item.querySelector(".item-details").innerHTML;

    const lightbox = document.getElementById("image-lightbox");
    const lightboxImg = document.getElementById("lightbox-image");
    const lightboxInfo = document.getElementById("lightbox-info");

    lightbox.style.display = "flex";
    lightboxImg.src = image;
    lightboxInfo.innerHTML = details;
  };

  window.closeLightbox = function () {
    document.getElementById("image-lightbox").style.display = "none";
  };

  // ================================
  // Contador de Caracteres
  // ================================
  const description = document.getElementById("photo-description");
  const counter = document.querySelector(".char-counter span");

  if (description && counter) {
    description.addEventListener("input", () => {
      counter.textContent = description.value.length;
    });
  }

  // ================================
  // Mostrar nombre del archivo
  // ================================
  const fileInput = document.getElementById("photo-upload");
  const fileInfo = document.querySelector(".file-info");

  if (fileInput && fileInfo) {
    fileInput.addEventListener("change", () => {
      const fileName = fileInput.files.length ? fileInput.files[0].name : "Ningún archivo seleccionado";
      fileInfo.textContent = fileName;
    });
  }

  // ================================
  // Animación de aparición
  // ================================
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("appear");
      }
    });
  }, {
    threshold: 0.2
  });

  document.querySelectorAll(".gallery-item, .community-item").forEach(el => {
    el.classList.add("fade-init");
    observer.observe(el);
  });
});




function scrollToSection(id) {
  const section = document.getElementById(id);
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
  }
}
window.addEventListener('scroll', () => {
  const switchBar = document.querySelector('.gallery-switch');
  if (window.scrollY > 100) {
    switchBar.classList.add('scrolled');
  } else {
    switchBar.classList.remove('scrolled');
  }
});
let lastScrollTop = 0;
const toggleBar = document.querySelector('.gallery-nav-toggle');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && currentScroll > 100) {
        // Scroll hacia abajo
        toggleBar.classList.add('hidden');
    } else {
        // Scroll hacia arriba
        toggleBar.classList.remove('hidden');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
