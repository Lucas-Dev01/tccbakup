<?php
	// dados para conexão com base de dados MySql
	// ajuste os dados de conexão de acordo com o seu ambiente de trabalho
    include('conexao.php');

    $delete = $_POST['deletar'];
    $sql = "DELETE FROM agendamentos WHERE id_agend='$delete'"; 
    mysqli_query($conn,$sql) or die("Erro ao tentar excluir registro");
    header('Location: ../../agendperfil.php');

	// finaliza a conexão
	mysqli_close($conn);
?>
