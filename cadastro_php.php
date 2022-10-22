<?php
    include('connection.php');

    $name = $_POST["fname"];
    $email = $_POST["femail"];
    $senha = $_POST["flogin"];

    $sql = "INSERT INTO usuario VALUES('$email','$name','$senha')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "Insert Succeded!!!";
        //header("location: index.php");//
    }
    else {
        echo "Insert fail!!!";
    }
?>