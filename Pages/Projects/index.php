<?php if (isset($_GET['Page'])) {
  $Page = $_GET['Page'];
} else {
  $Page = 'Home';
} ?>

<section class="photo-gallery" style="padding-top: 1.5rem;">
  <h2 class="text-center texto-cor-primaria texto-w-bolder">NOSSOS PROJETOS</h2>
  <!-- <hr class="hr"> -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">

      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTOS_VIGA_ESQUERDA.png">
          <img src="assets/img/Projects/FOTOS_VIGA_ESQUERDA.png" class="img-fluid" alt="Preparação de Vigas">
        </a>
      </div>


      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_CENTRO.jpg">
          <img src="assets/img/Projects/FOTOS_EQUIPE_CENTRO.jpg" class="img-fluid" alt="Equipe Siloé">
        </a>
      </div>

      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTO-FUNDACAO.jpg">
          <img src="assets/img/Projects/FOTO-FUNDACAO.jpg" class="img-fluid" alt="Preparação de Fundação">
        </a>
      </div>

      


      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTOS_CONTRUCAO_MINI.png">
          <img src="assets/img/Projects/FOTOS_CONTRUCAO.png" class="img-fluid" alt="Construção">
        </a>
      </div>

      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTOS_PINTURA_PREDIAL_MINI.png">
          <img src="assets/img/Projects/FOTOS_PINTURA_PREDIAL.png" class="img-fluid" alt="Pintura Predial">
        </a>
      </div>

      <div class="col">
        <a class="gallery-item" href="assets/img/Projects/FOTOS_REFORMA_DE_FACHADA_MINI.png">
          <img src="assets/img/Projects/FOTOS_REFORMA_DE_FACHADA.png" class="img-fluid" alt="Reforma de Fachada">
        </a>
      </div>

      <?php if ($Page == 'Projects') { ?>
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_IMPERMEABILIZACAO_MINI.png">
            <img src="assets/img/Projects/FOTOS_IMPERMEABILIZACAO.png" class="img-fluid" alt="Impermeabilização">
          </a>
        </div>
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_PINTURA_MINI.png">
            <img src="assets/img/Projects/FOTOS_PINTURA.png" class="img-fluid" alt="Pintura">
          </a>
        </div>
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_TELHADO_MINI.png">
            <img src="assets/img/Projects/FOTOS_TELHADO.png" class="img-fluid" alt="Telhados">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_PINTURA_COMERCIAL.png">
            <img src="assets/img/Projects/FOTOS_PINTURA_COMERCIAL.png" class="img-fluid" alt="Pintura Comercial">
          </a>
        </div>
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_REVESTIMENTO.png">
            <img src="assets/img/Projects/FOTOS_REVESTIMENTO.png" class="img-fluid" alt="Revestimentos">
          </a>
        </div>
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_TELHADO_2.png">
            <img src="assets/img/Projects/FOTOS_TELHADO_2.png" class="img-fluid" alt="Telhados">
          </a>
        </div>

         
        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_03.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_03.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_04.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_04.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_11.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_11.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_08.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_08.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_13.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_13.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_12.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_12.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_10.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_10.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_07.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_07.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_06.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_06.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_09.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_09.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_05.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_05.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>

        <div class="col">
          <a class="gallery-item" href="assets/img/Projects/FOTOS_EQUIPE_02.png">
            <img src="assets/img/Projects/FOTOS_EQUIPE_02.png" class="img-fluid" alt="Foto Projeto">
          </a>
        </div>
        
        <!--
        <div class="col">
          <a class="gallery-item" href="https://picsum.photos/id/177/1200/800.webp">
            <img src="https://picsum.photos/id/177/480/320.webp" class="img-fluid" alt="Título do Projeto 8">
          </a>
        </div>
        <div class="col">
          <a class="gallery-item" href="https://picsum.photos/id/197/1200/800.webp">
            <img src="https://picsum.photos/id/197/480/320.webp" class="img-fluid" alt="Título do Projeto 9">
          </a>
        </div>
        -->

      <?php } ?>

    </div>

    <?php if ($Page != 'Projects') { ?>
      <div class="col-12 text-end" style="margin-top: 1.5rem;">
        <a href="?Page=Projects" class="texto-cor-primaria">Ver Todos</a>
      </div>
      <hr>
    <?php } ?>
  </div>
</section>


<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <button type="button" class="btn-fullscreen-enlarge" aria-label="Enlarge fullscreen">
        <svg class="bi">
          <use href="#enlarge"></use>
        </svg>
      </button>
      <button type="button" class="btn-fullscreen-exit d-none" aria-label="Exit fullscreen">
        <svg class="bi">
          <use href="#exit"></use>
        </svg>
      </button>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="lightbox-content">
          <!-- JS content here -->
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const html = document.querySelector('html');
  html.setAttribute('data-bs-theme', 'dark');

  document.addEventListener('DOMContentLoaded', () => {
    // --- Create LightBox
    const galleryGrid = document.querySelector(".gallery-grid");
    const links = galleryGrid.querySelectorAll("a");
    const imgs = galleryGrid.querySelectorAll("img");
    const lightboxModal = document.getElementById("lightbox-modal");
    const bsModal = new bootstrap.Modal(lightboxModal);
    const modalBody = lightboxModal.querySelector(".lightbox-content");

    function createCaption(caption) {
      return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
    }

    function createIndicators(img) {
      let markup = "",
        i, len;

      const countSlides = links.length;
      const parentCol = img.closest('.col');
      const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

      for (i = 0, len = countSlides; i < len; i++) {
        markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
      }

      return markup;
    }

    function createSlides(img) {
      let markup = "";
      const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

      for (const img of imgs) {
        const imgSrc = img.closest('.gallery-item').getAttribute("href");
        const imgAlt = img.getAttribute("alt");

        markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
      }

      return markup;
    }

    function createCarousel(img) {
      const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

      modalBody.innerHTML = markup;
    }

    for (const link of links) {
      link.addEventListener("click", function(e) {
        e.preventDefault();
        const currentImg = link.querySelector("img");
        const lightboxCarousel = document.getElementById("lightboxCarousel");

        if (lightboxCarousel) {
          const parentCol = link.closest('.col');
          const index = [...parentCol.parentElement.children].indexOf(parentCol);

          const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
          bsCarousel.to(index);
        } else {
          createCarousel(currentImg);
        }

        bsModal.show();
      });
    }

    // --- Support Fullscreen
    const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
    const fsExit = document.querySelector(".btn-fullscreen-exit");

    function enterFS() {
      lightboxModal.requestFullscreen().then({}).catch(err => {
        alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
      });
      fsEnlarge.classList.toggle("d-none");
      fsExit.classList.toggle("d-none");
    }

    function exitFS() {
      document.exitFullscreen();
      fsExit.classList.toggle("d-none");
      fsEnlarge.classList.toggle("d-none");
    }

    fsEnlarge.addEventListener("click", (e) => {
      e.preventDefault();
      enterFS();
    });

    fsExit.addEventListener("click", (e) => {
      e.preventDefault();
      exitFS();
    });
  });
</script>