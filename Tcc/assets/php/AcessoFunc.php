<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Funcionario - BarberAgend</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
      <link rel="stylesheet" href="../fonts/fontawesome-all.min.css">
      <link rel="stylesheet" href="../fonts/font-awesome.min.css">
      <link rel="stylesheet" href="../fonts/fontawesome5-overrides.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
      <link rel="stylesheet" href="../css/AcessoFunc.css">
   </head>
   <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
      <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav-1" style="background: rgb(52, 58, 64);">
               <div class="container">
                  <a class="navbar-brand" href="../../index.php" style="font-family: Montserrat, sans-serif;">BarberAgend</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                  <div class="collapse navbar-collapse" id="navbarResponsive-1">
                     <ul class="navbar-nav ms-auto text-uppercase">
                        <li class="nav-item"><a class="nav-link" href="../../index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="financas.php">Finanças</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../AgendamentoPrinc.php">Novo Agendamento</a></li>
                     </ul>
                     <ul class="navbar-nav">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="#">SAIR</a></li>
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
                  <h2 class="text-uppercase section-heading">Agendamentos Clientes!</h2>
                  <h3 class="text-muted section-subheading"><strong>Aqui ADM está seus agendamentos de sua empresa</strong></h3>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12 col-sm-6 col-md-6">
                  <h3 class="text-dark mb-4">Agendamentos</h3>
               </div>
            </div>
            <div class="card" id="TableSorterCard">
               <div class="card-header py-3">
                  <div class="row table-topper align-items-center">
                     <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                        <p class="text-primary m-0 fw-bold"><span style="color: rgb(0, 0, 0);">Recentes</span></p>
                     </div>
                     <!-- <form name="deletar" action="Delet.php" method="post"> 
                     <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;"><input type="text" placeholder="Digite o ID do Usuário">
                     <button name="deletar" class="btn btn-primary btn-sm reset" type="submit" style="margin: 2px;background: rgb(52, 58, 64);border-color: rgb(52, 58, 64);">Deletar Agendamento</button>
                     <button type="submit" id="botaobusca" onclick="alerta();">Deletar</button>
                     </form>  -->
                     <div class="busca">
	<form name="deletar" action="Delet.php" method="post">
		<input id="inputbusca" type="text" name="deletar" placeholder="Digite o ID do Usuário">
			<button type="submit" id="botaobusca" onclick="alerta();">Deletar</button>
		</form>
	</div>
                  </div>
               </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="table-responsive">
                        <table class="table table-striped table tablesorter" id="ipi-table">
                           <thead class="thead-dark">
                              <tr>
                                 <th class="text-center">Id</th>
                                 <th>Nome</th>
                                 <th>data</th>
                                 <th class="text-center">sERVIÇO</th>
                                 <th>bARBEIRO</th>
                                 <th class="text-center">Horario</th>
                                 <th class="text-center filter-false sorter-false">oPÇÕES</th>
                              </tr>
                           </thead>
                          
                           <tbody class="text-center">
                              <?php
                              include 'Banco.php';
                              $pdo = Banco::conectar();
                              $sql = 'SELECT * FROM agendamentos ORDER BY id_agend DESC';
      
                              foreach($pdo->query($sql)as $row)
                              {
                                  echo '<tr>';
                                  echo '<th scope="row">'. $row['id_agend'] . '</th>';
                                  echo '<td>'. $row['nome'] . '</td>';
                                  echo '<td>'. $row['date'] . '</td>';
                                  echo '<td>'. $row['servico'] . '</td>';
                                  echo '<td>'. $row['barbeiro'] . '</td>';
                                  echo '<td>'. $row['horario'] . '</td>';
                                  echo '<td width=350>';
                                 
                                  echo '</td>';
                                  echo '</tr>';
                              }
                              Banco::desconectar();
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram" style="font-size: 30px;width: 30px;height: 46px;margin: 0px;padding: -18px;">
                           <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg>
                     </li>
                  </ul>
               </div>
            </div>
         </footer>
      </footer>
     
<script src="assets/bootstrap/js/bootstrap.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script><script src="assets/js/script.min.js"></script></body></html>