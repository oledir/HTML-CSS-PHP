<?php
error_reporting(0);
include_once"head.php"; 
include_once"cabecalho_form.php";
 //checar conexao
                    $conex = mysqli_connect("localhost","root","","contribuintes");
                    //if (!$conex) {
                    //    echo"nao conectado";
                    //}else{
                    //    echo"conectado ao banco";
                    //}
                    //recuperar e verificar se ja existe                  
                    $cpf = $_POST['cpf'];
                    $cpf = mysqli_real_escape_string($conex, $cpf);
                    $sql = "SELECT CPF FROM pessoa WHERE  cpf ='$cpf'";
                    $result = mysqli_query($conex, $sql); 
                    if (mysqli_num_rows($result) > 0) {
                        echo "CPF ja cadastrado<br>";
                    }else if($cpf == null){

                    }
                    else{
                        $cpf = $_POST["cpf"];
                        $nome = $_POST["nome"];
                        $data = $_POST["data"];
                        $sex = $_POST["sex"];
                        $cel = $_POST["cel"];
                        $mail = $_POST["mail"];
                        $sql = "INSERT INTO pessoa(CPF, Nome, date, sexo, telefone, email) values ('$cpf','$nome','$data','$sex','$cel','$mail')";
                        $result = mysqli_query($conex, $sql);
                      header("Location:user_main.php");
                    }?>

<main id="main_form">
    <section class="form-container">
        <div class="container">
            <form  method="POST" id="form_body">
                <h1> Adicionar Proprietario</h1><br>
              
                <div class="input-solo">
                    <label for="name-form">Nome Completo</label>
                    <input type="text" name='nome' id="name-form" class="input"  placeholder="Ex:João Silva da Silva" required>
                    

                </div>
                <div class="input-solo">
                    <label for="name-form">CPF</label>
                    <input type="text" name='cpf' id="name-form" class="input"  placeholder="Ex: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
            

                </div>
                <div class="input-solo">
                    <label for="name-form">Sexo</label>
                    <select name='sex' required>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                 

                </div>
                <div class="input-solo">
                    <label for="name-form">Data de Nascimento</label>
                    <input type="date" name='data' required>
                

                </div>
                <div class="input-solo">
                    <label for="name-form"> Telefone </label>
                    <input type="text" name='cel' id="name-form" class="input" placeholder="Ex:(99)99999-9999" >
                    

                </div>
                <div class="input-solo">
                    <label for="name-form"></label>
                    <input type="email" name='mail' id="name-form" class="input" placeholder="Ex: Nome@email.com">
                    

                </div><br>
                <class ="botao">
                    <input type="submit" id="bkbtn" style="margin-bottom:20px"></input>
                    <a type="button" href="user_main.php" id="bkbtn"> Voltar </a>

                </div>
            </form>

        </div>

    </section>

</main>
</body>