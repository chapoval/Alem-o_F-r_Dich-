<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="home">Alemão Fur Dich</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="about">Sobre Nós</a></li>
          <li><a href="courses">Cursos</a></li>

          
          <li><a href="contact">Suporte</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      <?php if(!Auth::checkLogin()):?>
        <a href="login" class="get-started-btn">Login</a>
      <?php endif;?>

      <?php if(Auth::checkLogin()):?>
        <a href="logout" class="get-started-btn">Log Out</a>
        <a href="userpage" class="get-started-btn">Conta</a>
      <?php endif;?>

    </div>
  </header><!-- End Header -->