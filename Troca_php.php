<?php
    include('connection.php');

    $email = $_POST["femail"];
    $atual = $_POST["fatual"];
    $nova = $_POST["fnova"];

    $sql = "SELECT email, senha FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $ce = strcmp($row['email'], $email);
            $cs = strcmp($row['senha'], $atual);
            if ($ce != 0 or $cs != 0){
                echo "Update fail!!!";
            }
            else{
                echo "Update Success!!!";
                $sql2 = "UPDATE usuario SET senha = '$nova' WHERE email = '$email'";
                if ($conn->query($sql2) === TRUE) {
                    header("location: home.php"); 
                    //header("location: query.php?id=$id");
                }
                else {
                    echo "Update fail!!!";
                }
            }
        }
    }
    else {
        echo "Update fail!!!";
    }
?>