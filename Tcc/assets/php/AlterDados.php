<?php
session_start();
include('conexao.php');
if(!isset($_SESSION['id']['ID'])) {
	exit();
}
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


if(isset($nome)) {
    if($nome != ""){
    $sql = "UPDATE usuarios SET nome = '".$nome."' WHERE ID = '".$_SESSION['id']['ID']."'";
    $conn->query($sql);
    }
}

if(isset($email)) {
    if($email != ""){
    $sql = "UPDATE usuarios SET email = '".$email."' WHERE ID = '".$_SESSION['id']['ID']."'";
    $conn->query($sql);
    }
}

if(isset($senha)) {
    if($senha != ""){
    $sql = "UPDATE usuarios SET senha = '".$senha."' WHERE ID = '".$_SESSION['id']['ID']."'";
    $conn->query($sql);
    }
}
header('Location: ../../agendperfil.php?user='.$_SESSION['id']['ID']);

?>