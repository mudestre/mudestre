<?php 
if(!empty($_GET['cod_paciente'])){
include_once('conexao.php');

$cod_paciente = $_GET['cod_paciente'];

$sqlselect = "SELECT * FROM pacientes WHERE cod_paciente=$cod_paciente";

$result = $conexao->query($sqlselect);


if($result->num_rows > 0){

    while($user_data = mysqli_fetch_assoc($result)){
        $nome =$user_data['nome'];
        $telefone= $user_data['telefone'];
        $data_nasc = $user_data['data_nasc'];
        $cpf = $user_data['cpf'];
        $email = $user_data['email'];
    }
   
    
}
else{
    header('Location: listar.php');
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR DADOS</title>
    <link rel="stylesheet" href="interface2.css">
</head>
<body>
    <div class="container">
            <div class="formulario">
                <form action="salvar.php" method="post">
                <div class="cabecario">
                        <div class="titulo">
                            <h1>ATUALIZAR DADOS</h1>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome:</label>
                            <input id="nome" type="text" name="nome" value="<?php echo $nome ?>">
                        </div>
                        <div class="input-box">
                            <label for="telefone">TELEFONE:</label>
                            <input id="telefone" type="text" name="telefone"  value="<?php echo $telefone ?>">
                        </div>
                        <div class="input-box">
                            <label for="data_nasc">DATA NASC:</label>
                            <input id="data_nasc" type="date" name="data_nasc" value="<?php echo $data_nasc ?>">
                        </div>
                        <div class="input-box">
                            <label for="cpf">CPF:</label>
                            <input id="cpf" type="text" name="cpf"  value="<?php echo $cpf ?>">
                        </div>
                        <div class="input-box">
                            <label for="email">EMAIL:</label>
                            <input id="email" type="email" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>
                        <input type="hidden" name="cod_paciente" value="<?php echo $cod_paciente ?>">
                       <div class="botao">
                        <input type="submit" name="update" id="update" value="ATUALIZAR">
                       </div>
                      
                </form>
            </div>
    </div>
</body>
</html>
