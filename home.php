<?php
    include('connection.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title style="visibility:hidden;">home</title>
</head>
<body>
    <div style="display: flex; justify-content:space-around; align-items:center;">
        <h1>
            <?php
                 session_start();
                if(isset($_SESSION["name"])  && $_SESSION["name"] != 0){
                    echo "Bem vindo(a) ao Sistema, " . ucfirst($_SESSION["name"][0]);
                } else {
                    echo "Deu ruim";
                    header("Location: login.php");
                }
            ?>
        </h1>
        <button class="bot" onclick="home()">Trocar Senha</button>
        <button class="bot" onclick="query()">Ver Todos os usuários</button>
    </div>
    <script lang="javascript" style="visibility:hidden;">
        function home(){
            location.href = "Troca.php";
        }
        function query(){
            location.href = "userquery.php";
        }
    </script>
</body>
</html>