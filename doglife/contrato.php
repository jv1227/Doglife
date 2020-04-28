<!doctype html>
<html lang="en">
  <head>
    <title>ANI+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="home.php" class="h2 mb-0"><strong>Ani</strong>+<span class="text-primary"></span> </a></h1><br>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                
               
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <section class="bg-light" id="contact-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6">

           
              <form method="post" action="processo2.php">

              <br><br>
              <h2 class="h4 mb-5 heading">Informações Pessoais</h2> 
                <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="fname">Nome Completo</label> 
                  <input type="text" name="nomep" class="form-control">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="subject">Telefone</label>
                  <input type="text" name="tel" class="form-control" placeholder="(00)0000-0000">
                </div>
               
                <div class="col-md-6">
                  <label for="subject">CPF</label>
                  <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="email">Email</label> 
                  <input type="email" name="email" class="form-control" placeholder="loveanimais@gmail.com">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="subject">Date de Nascimento</label>
                  <input type="date" name="nasc" class="form-control" placeholder="dd/mm/aa">
                </div>
               
                <div class="col-md-6">
                  <label for="subject">Cidade</label>
                  <input type="text" name ="cidade" class="form-control" placeholder="Crateús-CE">
                </div>
              </div>
                <br>
              <h2 class="h4 mb-5 heading">Cartão</h2>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Número do Cartão</label> 
                  <input type="text" name="ncartao" class="form-control" placeholder="">
                </div>
              </div>
                
               <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Código de Verificação</label> 
                  <input type="text" name="cod" class="form-control" placeholder="">
                </div>
              </div>

<br>
               <h2 class="h4 mb-5 heading">Infomações do PET</h2>

                <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="subject">Animal</label>
                  <input type="text" name="nomeani" class="form-control" placeholder="Gato">
                </div>
               
                <div class="col-md-6">
                  <label for="subject">Raça</label>
                  <input type="text" name="raca" class="form-control" placeholder="Labrador">
                </div>
               </div>

                  <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="subject">Sexo</label>
                  <input type="text" name="sexo" class="form-control" placeholder="Feminino">
                </div>
               
                <div class="col-md-6">
                  <label for="subject">Data de Nascimento</label>
                  <input type="date" name="nascani" class="form-control" placeholder="dd/mm/aa" >
                </div>
               </div>

                <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Informações Complementares</label> 
                  <input type="subject" name="info" class="form-control" placeholder="Ex: Alérgico a dipirona">
                </div>
              </div>
<br>
              <h2 class="h4 mb-5 heading">Confirmação</h2>
            
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Pacote Desejado</label> 
                  <input type="subject" name="pacote" class="form-control" placeholder="Básico">
                </div>
              </div>

               <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="subject">Data Prevista</label>
                  <input type="date" name="datapre" class="form-control" placeholder="dd/mm/aa">
                </div>
               
                <div class="col-md-6">
                  <label for="subject">Horário</label>
                  <input type="text" name="horario" class="form-control" placeholder="00:00">
                </div>
               </div>
             <br>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Confirmar Assinatura" class="btn btn-dark btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-6">
            <div class="row justify-content-center align-items-center h-100">
              <div class="col-lg-6 text-center heading-section mb-5 align-self-center">
                
                <h2 class=" mb-5 text-black">Contrate-nos</h2>
                <ul class="list-unstyled text-left address">
                  <li>
                    <span class="d-block">Endereço:</span>
                    <p>Dr. Júlio Lima, 2194, Fátima II, Crateús-CE</p>
                  </li>
                  <li>
                    <span class="d-block">Telefone:</span>
                    <p>+(88) 3692-3528 </p>
                  </li>
                  <li>
                    <span class="d-block">Email:</span>
                    <p>loveanimais@gmail.com</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Sobre</h2>
                <p>Somos uma empresa onde procuramos fazer o mellhor serviço para seu pet com um preço acessível. Procuramos sempre o trabalho inovador e boa qualidade.  </p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Links Rápidos</h2>
                <ul class="list-unstyled">
                  <li><a href="index.html" >Início</a></li>
                  <li><a href="#services-section" class="smoothscroll">Serviços</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contato</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Siga-nos nas redes sociais:</h2>
                <a href="#" class="pl-0 pr-3 social-link"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Mensagens</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
  </body>