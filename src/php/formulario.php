<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css?v=1">
    <title>Seleção Dango</title>
</head>
<body class="index">
    <header>
        <h1>Kamura Dango</h1>
        <nav>
            <a href="../../index.html">início</a>
            <a href="../html/formulario.html"> seleção</a>
        </nav>
    </header>
    <br>

    <main class="formulario">
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo "<h2>PEDIDO DANGO DANGO FEITO COM SUCESSO!";

                $nome = $_POST ['nome'] ?? '';
                $email = $_POST ['email'] ?? '';
                $idade = $_POST ['idade'] ?? '';
                $dango = $_POST ['dango'] ?? '';

                date_default_timezone_set("America/Sao_Paulo");
                $data = date('d/m/Y H:i:s');

                echo "<br><br><br>Nome: ". $nome;
                echo "<br><br>Email: ". $email;
                echo "<br><br>Idade: ". $idade;
                echo "<br><br>Dango selecionado: ". $dango;
                echo "<br><br>Data e hora do pedido: ". $data;

            } else {
                echo "ACESSO NEGADO";
            }

        ?>
    </main>
    
</body>
</html>