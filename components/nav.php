<nav class="navbar navbar-expand-lg bg-light" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand col-3 col-md-1" id="navbar-brand" href="/">
      <img src="../assets/logotipo.png" alt="Siloé Empreiteira" class="img-fluid" id="img-logotipo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-10" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $Page == 'Home' ? 'active' : '' ?>" aria-current="page" href="/">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $Page == 'About' ? 'active' : '' ?>" href="?Page=About">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $Page == 'Jobs' ? 'active' : '' ?>" href="?Page=Jobs">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $Page == 'Projects' ? 'active' : '' ?>" href="?Page=Projects">Projetos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $Page == 'Contact' ? 'active' : '' ?>" href="?Page=Contact">Contato</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>