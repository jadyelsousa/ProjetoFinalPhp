<!doctype html>
<html lang="zxx">

<head>
<?php 
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.html';
                </script>";

        }
        $logado = $_SESSION['login'];
       

        ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cadastro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  


  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        <div class="check_title">
          <h2>
            Não é o que está procurando?
            <a href="home.php">Voltar para Página Inicial</a>
          </h2>
        </div>
 

      </div>
      <div class="cupon_area">
        <div class="check_title">
   
        </div>
        
      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Cadastrar novo aluno</h3>
            <form class="row contact_form" action="cadastroConect.php" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" placeholder="Nome" name="Nome" />
                
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" placeholder="Curso" name="Curso" />
              
              </div>
        
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" placeholder="Telefone" name="Telefone" />
          
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" placeholder="Email" name="Email" />
         
              </div>
              <div class="col-md-12 form-group p_star">
                <select name="Sexo" class="country_select">
                  <option value="">Sexo</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" placeholder="Cidade" name="Cidade" />
      
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" placeholder="Estado" name="Estado" />

              </div>
              <div class="col-md-12 form-group p_star">
              <input type="password" class="form-control" id="senha" name="Senha" value="" placeholder="Senha">

              </div>
              
              <button type="submit" value="Cadastrar" class="btn_3">

                Cadastrar
              </button>
              
            </form>
          </div>
    
          </div>
        </div>
      </div>
    </div>
    

  </section>
  <!--================End Checkout Area =================-->



  <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                   <div class="single-footer-caption mb-50">
                     <div class="single-footer-caption mb-30">
                          <!-- logo -->
                  
                
                     </div>
                   </div>
                </div>
          
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
    
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                 
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row">
             <div class="col-xl-7 col-lg-7 col-md-7">
                 <div class="footer-copy-right">
                     <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i class="ti-heart" aria-hidden="true"></i> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
             </div>
              <div class="col-xl-5 col-lg-5 col-md-5">
                 <div class="footer-copy-right f-right">
                     <!-- social -->
                     <div class="footer-social">
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-behance"></i></a>
                         <a href="#"><i class="fas fa-globe"></i></a>
                     </div>
                 </div>
             </div>
         </div>
        </div>
    </div>

    <!-- Footer End-->
</footer>
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
      
</body>

</html>