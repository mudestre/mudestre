<?php
include 'conexao.php';

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$data_nasc = $_POST["data_nasc"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];


$insere = mysqli_query($conexao, "INSERT INTO pacientes (nome, telefone, data_nasc, cpf, email) VALUES ('$nome', '$telefone', '$data_nasc','$cpf','$email')");


if ($insere) {
    $mensagem = "<p class='sucesso'>Paciente inserido com sucesso!</p>";
    echo '';
    echo '<a href="principal.html">Voltar</a>';
} else {
    $mensagem = "<p class='erro'>Erro ao cadastrar paciente: " . mysqli_error($conexao) . "</p>";
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .mensagem {
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }

        .sucesso {
            background-color: #4caf50;
            color: #fff;
        }

        .erro {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="mensagem">
        <?php echo $mensagem; ?>
    </div>

</body>
</html>
