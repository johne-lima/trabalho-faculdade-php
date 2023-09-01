<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário Online PHP</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            padding: 5px;
        }

        form{
            display: inline-block;
            background-color: rgb(241, 234, 221);
            padding: 3px;
            border: 3px solid black;
            border-radius: 8px;
            width: 50%;
            margin: 10px;
            overflow: hidden;
        }
        input{
            margin: 5px;
        }
        #enviar{
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            border-radius: 3px;
            border: 1px solid black;
            width: 80px;
            height: 40px;
            cursor: pointer;
        }
        #enviar:hover{
            background-color: rgb(173, 171, 171);
            color: rgb(0, 0, 0);
            border-radius: 20px;
            width: 80px;
            height: 40px;
            cursor: pointer;
        }
        #dados {
            border: 3px solid black;
            border-radius: 20px;
            padding: 30px;
            display: inline-block;
        }
        textarea{
            width: 80%;
            height: 70px;
        }
    </style>
</head>
<body>
<?php
        $nome = $sobrenome = $email = $telefone = $cidade = $assunto = $mensagem = ""; 
        
        if($_SERVER["REQUEST_METHOD"]== "GET") {
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];
           $email = $_GET["email"];
           $telefone = $_GET["telefone"];
           $cidade = $_GET["cidade"];
           $mensagem = $_GET["mensagem"];
        }
        ?>

    <h1>CONTATO</h1>
    <p> ATENÇÃO: Caso queira enviar seu currículo ou consultar vagas de trabalho disponíveis</p>
    <h2>Preencha o formulário abaixo e clique em Enviar.</h2>
    <p><strong>campos obrigatórios:</strong></p>
    <form action="ind.php" method="get">
        <label for="nome">*Nome</label>
        <input type="text" name="nome" id="nome" maxlength="30" placeholder="Nome" required>
        <br>
        <label for="sobrenome">*Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" maxlength="30" placeholder="Sobrenome" required>
        <br>
        <label for="email">*E-mail</label>
        <input type="email" name="email" id="email" placeholder="Emaill" maxlength="100" required>
        <br>
        <label for="telefone">*Telefone</label>
        <input type="tel" name="telefone" id="telefone" maxlength="30" placeholder="Telefone">
        <br>
        <label for="cidade">*Cidade</label>
        <input type="text" name="cidade" id="cidade" maxlength="80" placeholder="Cidade">
        <br>
        <br>
        <label for="mensagem">*Mensagem</label>
        <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" required placeholder="Mensagem"></textarea>
        <br>
        <label for="aceito">Aceito receber informações sobre notícias e promoções do Méqui.</label>
        <input type="checkbox" name="Aceito" id="Aceito" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <div id="dados">
        <h2> Dados recebidos</h2>
        <p>Nome: <?php echo $nome; ?></p>
        
        <p>Sobrenome: <?php echo $sobrenome; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Telefone: <?php echo $telefone; ?></p>
        <p>Cidade: <?php echo $cidade; ?></p>
        <p>Mensagem: <?php echo $mensagem; ?></p>
    </div>
</body>
</html>