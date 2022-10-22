<?php
    include('connection.php');

    $name = $_POST["fname"];
    $email = $_POST["femail"];
    $senha = $_POST["flogin"];

    $sql = "SELECT email, nome, senha FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $cn = strcmp($row['nome'], $name);
            $cs = strcmp($row['senha'], $senha);
            if ($cn != 0 or $cs != 0){
                session_start();
                $_SESSION["name"] = 0;
                header("Location: login.php");   
            }
            else{
                session_start();
                $_SESSION["name"] = [$name,$email,$senha];
                header("Location: home.php");
            }
        }
    }
    else {
        session_start();
        $_SESSION["name"] = 0;
        header("Location: login.php");
    }
?>