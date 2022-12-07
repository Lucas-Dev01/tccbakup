<?php
session_start();
include('conexao.php');

$email = $_POST['email'];
$pass = $_POST['senha'];
$login = $_POST['logar'];

$select_login = "SELECT email FROM `usuarios` WHERE email = '$email'";
$confirmação = mysqli_query($conn, $select_login)->num_rows;

$select_login = "SELECT senha FROM `usuarios` WHERE senha = '$pass'";
$confirmação_senha = mysqli_query($conn, $select_login)->num_rows;

if(isset($login)){

    if ($confirmação <= 0){
      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Email Inexistente ou Invalido')
      window.location.href='../../login.html';
      </SCRIPT>");
      die();

    }elseif ($confirmação_senha <= 0) {
      echo ("<SCRIPT LANGUAGE='JavaScript'>
      window.alert('Senha Errada')
      window.location.href='../../login.html';
      </SCRIPT>");
    }else {
        $selectid = "SELECT ID FROM `usuarios` WHERE email = '$email'";
        $result = mysqli_query($conn, $selectid);
        $idzinho = mysqli_fetch_assoc($result);
        $selectnome = "SELECT nome FROM `usuarios` WHERE email = '$email'";
        $resultn = mysqli_query($conn, $selectnome);
        $nomezinho = mysqli_fetch_assoc($resultn);
        $_SESSION['id'] = $idzinho;
        $_SESSION['nome'] = $nomezinho;
        echo $_SESSION['id'];
        header("Location: ../../index.php");
        // die();
      }

}
?>