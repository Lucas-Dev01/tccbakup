<?php
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$date = $_POST['date'];
// $date = date('d/m/Y');
$date = implode("/",array_reverse(explode("-",$date)));
$servico = $_POST['servico'];
$barbeiro= $_POST['barbeiro'];
$horario= $_POST['horario'];



$newslleter = "INSERT INTO agendamentos (nome, date, servico, barbeiro, horario, idUser) VALUES ('$nome','$date','$servico','$barbeiro', '$horario', '$id')";
$query = "SELECT date from agendamentos where date = '{$date}'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

$confirma_agend = "SELECT * from agendamentos where horario = '$horario' AND date = '{$date}'";
$confirmacao_agend = mysqli_query($conn, $confirma_agend);
$erro = mysqli_num_rows ( $confirmacao_agend);

if($erro != 0){
      echo '<script>alert("Esse horario já foi agendado, volte para a pagina anterior e selecione outro horario!");window.location.href = "../../AgendamentoPrinc.php";</script>';
}else if($horario < '08:00' || $horario > '19:00'){
    echo "<script language='javascript' type='text/javascript'> alert('Horário indisponível, Estamos aberto somente das 08:00 da manhã as 19:00 da noite');window.location = '../../AgendamentoPrinc.php'</script>";
}elseif (mysqli_query($conn, $newslleter)) {
      echo "New record created successfully";
      header('location: ../../agendperfil.php');
} else {
      echo "Error: " . $id . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
