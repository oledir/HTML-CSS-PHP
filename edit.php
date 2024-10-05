<?php

    $conex = mysqli_connect("localhost","root","","contribuintes");

    if(isset($_POST['update']) ){
        $id = $_POST['id'];
        $cpf = $_POST["CPF"];
        $nome = $_POST["Nome"];
        $data = $_POST["date"];
        $sex = $_POST["sexo"];
        $cel = $_POST["telefone"];
        $mail = $_POST["email"];

        $sqlUpdate="UPDATE pessoa SET Nome='$nome', CPF='$cpf', email='$mail', date= '$data', sexo='$sex',telefone='$cel'
        WHERE id='$id'";
        $resultUpdate=$conex->query($sqlUpdate);

    }
         header("Location:user_main.php")

?>