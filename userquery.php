<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
    </head>
<?php
    include('connection.php');

    $sql = "SELECT email, nome FROM usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            echo $row['email'] . " - " . $row['nome'] . "<br>";
        }
    }
    else {
        echo "Sem resultados no banco de dados!!!";
    }
?>
</html>