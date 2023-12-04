<!DOCTYPE html>
<html lang="en">

<?php
    
    $aluno = new AlunoModel();
    $emailParaBuscar = $_SESSION['USER_DATA'];
    $_aluno = $aluno->buscarAlunoPorEmail($emailParaBuscar);

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alemão Fur Dich - Curso A1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php $this->view('include/header'); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Detalhes do Curso</h2>
       
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
            <h3>Curso Nível A2</h3>
            <p>
              Ei, aventureiro linguístico! Preparado para embarcar em uma viagem pelo misterioso e cativante mundo do alemão? No nível A2, mergulharemos nas águas frescas e superficiais desta língua fascinante. Imagine aprender como se apresentar sem tropeçar nas palavras ou pedir uma salsicha em Berlim sem receber olhares confusos!
        
              Neste curso, não apenas arranhamos a superfície do alemão, mas também damos uma espiada nas festas, músicas e (quem sabe?) na arte de usar lederhosen! Prepare-se para rir, aprender e, talvez, soltar um ou dois "Aha!" ao longo do caminho.
            
              Pegue seu chapéu de explorador linguístico e venha balançar com a gente no ritmo do alemão! Seu ingresso para a festa germânica começa no nível A1!
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Professora</h5>
              <p><a href="#">Jerilly Chapoval</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Preço</h5>
              <p>$200</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Vagas</h5>
              <p>Ilimitadas</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Horário</h5>
              <p>A qualquer momento.</p>
            </div>

            <?php if(!$_aluno['cursoa2']):?>
              <div class="course-info d-flex justify-content-between align-items-center">
                <a href="ComprarCurso/cursoa2">Comprar Curso</a>
              </div>
            <?php endif;?>

            <?php if($_aluno['cursoa2']):?>
              <div class="course-info d-flex justify-content-between align-items-center">
                <a href="cursoa2">Acessar Curso</a>
              </div>
            <?php endif;?>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Alemão Fur Dich</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cursos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aulas Particulares</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Preços e Assinatura</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Redes Sociais</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Suporte</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Se inscreva em nossa Newsletter !</h4>
            <p>Fique informado de todas as novidades relacionadas a nossa escola ! Prometemos não enviar SPAM.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Alemão Fur Dich</span></strong>. Todos os direitos reservados.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>