<?php 
include_once('conexao.php');

if(isset($_POST['update']))
{
    $cod_paciente = $_POST['cod_paciente'];
    $nome =$_POST['nome'];
    $telefone = $_POST['telefone'];
    $data_nasc= $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

$sqlupdate = "UPDATE pacientes SET nome= '$nome', telefone='$telefone', data_nasc='$data_nasc',cpf='$cpf', email='$email' WHERE cod_paciente='$cod_paciente'";

$result = $conexao->query($sqlupdate);
}

header('Location: listar.php');


?>
