<?php
session_start();

include('conexao.php');

if(empty($_POST['email'])||empty($_POST['senha'])){
header('location: loginAdm.php');
exit();
}

// else if($_POST['email'] == 'master@gmail.com' && $_POST['senha'] == '0000') {
//   $_SESSION['email'] = $_POST['email'];
//   $_SESSION['senha'] = $_POST['senha'];
//   header('Location: ../cadastraradm.php');
//   die();
// } else {
//   header('Location: ../index.php');
//   die();
// }

$email= mysqli_real_escape_string($conn, $_POST['email']);
$senha= mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select * from Barbeiros where email = '{$email}' and senha = '{$senha}'";
$row = mysqli_query($conn, $query)->num_rows;

 if($row != 0) {

  header('Location: ./AcessoFunc.php');
  die();

}

else {

  $_SESSION['nao_autenticado'] = true;
  header('Location: ../index.php');
  exit();

}



?>