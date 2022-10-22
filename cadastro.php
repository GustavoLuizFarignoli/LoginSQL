<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <title>Cadastro</title>
    </head>
    <body>
        <form id="form" action="cadastro_php.php" method="POST">
            <div class="input">
                <label>Nome</label>
                <input class="box-input" type="text" placeholder="" name="fname" id="fname">
            </div>
            <div class="input">
                <label>E-mail</label>
                <input class="box-input" type="text" placeholder="teste@teste.com.br" name="femail" id="femail">
            </div>
            <div class="input">
                <label>Senha</label>
                <input class="box-input" type="text" placeholder="" name="flogin" id="flogin">
            </div>
            <button style="margin-bottom: 5px; background-color:white;" type="submit" name="button" id="button">Cadastrar</button>
        </form>
        <div>
                <p style="visibility:hidden;">Login ou Senha incorreto. Favor tentar novamente!</p>
        </div>
    </body>
</html>