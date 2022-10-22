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
        <title>Trocar Senha</title>
    </head>
    <body>
        <form id="form" action="Troca_php.php" method="POST">
            <div class="input">
                <label>E-mail</label>
                <input class="box-input" type="text" placeholder="teste@teste.com.br" name="femail" id="femail">
            </div>
            <div class="input">
                <label>Senha atual</label>
                <input class="box-input" type="text" placeholder="Gabril Vink" name="fatual" id="fatual">
            </div>
            <div class="input">
                <label>Senha nova</label>
                <input class="box-input" type="text" placeholder="" name="fnova" id="fnova">
            </div>
            <button style="margin-bottom: 5px; background-color:white;" type="submit" name="button" id="button">Enviar</button>
        </form>
    </body>
</html>