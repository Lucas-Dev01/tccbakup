<?php

include('conexao.php');

$name = $_POST['primeiro_nome'];
$lastname = $_POST['sobrenome'];
$email = $_POST['email'];

$cell= $_POST['celular'];
$verif_cell = strlen($cell);

$pass= $_POST['senha'];
$pass_conf= $_POST['senha_conf'];

// sistema de verificação de usuario pre existente
$select_login = "SELECT email FROM `usuarios` WHERE email = '$email'";
$confirmação = mysqli_query($conn, $select_login)->num_rows;

if($confirmação != 0){
    echo "Email já cadastrado";
    die();

}elseif ($verif_cell < 10) {
    echo "numero está errado";     
    
}elseif($pass == $pass_conf){

    $query = "INSERT INTO usuarios (nome, sobrenome, email, celular, senha) VALUES ('$name','$lastname','$email','$cell', '$pass')";
    $insert = mysqli_query($conn, $query);
    header("Location: ../../login.html");
    die();

}




?>