<?php
session_start();
 
require_once 'assets/php/conexao.php';

if(!isset($_SESSION['id']['ID'])){
    echo "<script language='javascript' type='text/javascript'>
     alert('Faça login ou cadastre-se para agendar!');
     window.location = 'login.html'
     </script>";
}
?>

<!DOCTYPE html>
<html>

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Agendamento - BarberAgend</title>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
      <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
      <link rel="stylesheet" href="assets/css/selecData.css">
      <link rel="icon" href="assets/img/icon.png">
   </head>
   <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="text-align: center;">
   <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav-1" style="background: rgb(52, 58, 64);">
               <div class="container">
                  <a class="navbar-brand" href="index.php" style="font-family: Montserrat, sans-serif;">BarberAgend</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                  <div class="collapse navbar-collapse" id="navbarResponsive-1">
                     <ul class="navbar-nav ms-auto text-uppercase">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="SelecBarb1.html">Voltar</a></li>

                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </nav>
      <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
         <div class="container"></div>
      </header>
      <section id="services">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <h2 class="text-uppercase section-heading">Selecione seu serviço!</h2>
                  <h3 class="text-muted section-subheading"><strong>Selecione sua Data,Hora e serviço que deseja</strong></h3>
               </div>
            </div>
         </div>
         <form form method="POST" action="./assets/php/agendar.php">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 col-sm-6 col-md-6">
                  <h3 class="text-dark mb-4">Agendamento</h3>
                  <h3 class="text-muted section-subheading"><strong>Estamos aberto das 08:00 às 19:00<br> Caso seu horario não esteja disponivel, selecione 30min ou 1hr depois do tempo desejado</strong></h3>
                 
                  <div class="form-group mb-3">
                     <input name="id" type="text" id="id" class="form-control" value="<?php echo $_SESSION['id']['ID']; ?>" style="display: none;">
                     <input name="nome" type="text" id="nome" class="form-control" value="<?php echo $_SESSION['nome']['nome']; ?>" style="display: none;">
                  </div>
                  <select name="barbeiro" id="cidade" class="form-select">
                     <option value="Selecione">Selecione o Barbeiro</option>
                     <option value="Rodrigo">Pedro</option>
                     <option value="Marcos">Marcos</option>
                     <option value="">Rodrigo</option>
                  </select><br>

                <select name="servico" id="cidade" class="form-select">
                  <option value="Selecione">Selecione o Serviço</option>
                  <option value="Cabelo">Cabelo R$20,00 Reais</option>
                  <option value="Barba">Barba R$20,00 Reais</option>
                  <option value="Cabelo e Barba">Cabelo + Barba R$35,00 Reais</option>
                  <option value="hidratacao">Hidratação R$50,00 Reais</option>
                  <option value="Pigmentacao">Pigmentação R$90,00 Reais</option>
              </select><br>

                  <div class="form-group mb-3">
                     <div class="input-group mb-4"><span class="input-group-text">Data</span><input name="date" type="date" id="date" class="form-control"></div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group mb-4"><span class="input-group-text">Hora</span> <input name="horario" type="time" id="time" class="form-control" required></div>
                 </div>
                 <button type="submit"  style="background: rgba(231,197,81,0.85); data-bss-hover-animate="pulse" href="login.html" class="btn btn-primary btn-xl text-uppercase"">Agendar</button>

              <div></div>
               </div>
            </div>
            <div class="card" id="TableSorterCard"></div>
         </div>
         <div class="input-group mb-3" style="width: 100%;"></div>
      </section>
   </form>
      <footer>
         <footer class="text-white bg-dark" style="height: 436.375px;">
            <div class="container py-4 py-lg-5">
               <div class="row justify-content-center">
                  <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                     <h3 class="fs-6 text-white" style="width: 241px;">Localização</h3>
                     <ul class="list-unstyled">
                        <li>Rua azul, N 10 Americana-SP</li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                     <h3 class="fs-6 text-white">CONTATO</h3>
                     <ul class="list-unstyled">
                        <li><a class="link-light" href="#">Teste@teste.com</a></li>
                        <li><a class="link-light" href="#"></a></li>
                        <li style="width: 229px;height: 20px;margin: 1px;text-align: right;"><a class="link-light" href="#" style="text-align: left;">++55 19 97157-2005</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                     <div class="fw-bold d-flex align-items-center mb-2">
                        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier fs-5">
                              <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                              <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                           </svg>
                        </span>
                        <span>SOBRE NÓS</span>
                     </div>
                     <p class="text-muted copyright">Barber agend foi criado para facilitar o agendamento de barbearias e facilitar sua organização</p>
                  </div>
               </div>
               <hr>
               <div class="d-flex justify-content-between align-items-center pt-3" style="text-align: center;">
                  <p class="mb-0" style="text-align: center;">BARBERAGEND© 2022&nbsp;</p>
                  <ul class="list-inline mb-0" style="text-align: left;">
                     <li class="list-inline-item"></li>
                     <li class="list-inline-item"></li>
                     <li class="list-inline-item">

      <script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script><script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><script src="assets/js/script.min.js"></script>
   </body>
</html>