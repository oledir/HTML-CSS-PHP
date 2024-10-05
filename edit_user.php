<?php
error_reporting(0);
include_once"head.php"; 
include_once"cabecalho_form.php";
 //checar conexao
 
                    
                        if(!empty($_GET['id'])){

                            $conex = mysqli_connect("localhost","root","","contribuintes");
                            $id = $_GET["id"];
                            $sqlSelect = "SELECT * FROM pessoa WHERE id='$id'";
                            $result = $conex->query($sqlSelect);

                            if($result->num_rows > 0){   
                                while($user_data = mysqli_fetch_assoc($result) ){
                                $cpf = $user_data['CPF'];
                                $nome = $user_data['Nome'];
                                $data = $user_data['date'];
                                $sex = $user_data['sexo'];
                                $cel = $user_data['telefone'];
                                $mail = $user_data['email']; 
                                }

                            }

                        }else{
                            header("Location:user_main.php");
                        }
                        
                    ?>

<main id="main_form">
    <section class="form-container">
        <div class="container">
            <form action="edit.php" method="POST" id="form_body">
                <h1> Adicionar Proprietario</h1><br>
              
                <div class="input-solo">
                    <label for="name-form">Nome Completo</label>
                    <input type="text" name='nome' id="name-form" class="input" value="<?php echo $nome ?>" placeholder="Ex:João Silva da Silva" required>
                    

                </div>
                <div class="input-solo">
                    <label for="name-form">CPF</label>
                    <input type="text" name='cpf' id="name-form" class="input"  value="<?php echo $cpf ?>" placeholder="Ex: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
            

                </div>
                <div class="input-solo">
                    <label for="name-form">Sexo</label>
                    <select name='sex' value="<?php echo $sex ?>" required>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                 

                </div>
                <div class="input-solo">
                    <label for="name-form">Data de Nascimento</label>
                    <input type="date" name='data' value="<?php echo $data ?>" required>
                

                </div>
                <div class="input-solo">
                    <label for="name-form"> Telefone </label>
                    <input type="text" name='cel' id="name-form" class="input" value="<?php echo $cel ?>" placeholder="Ex:(99)99999-9999" >
                    

                </div>
                <div class="input-solo">
                    <label for="name-form"></label>
                    <input type="email" name='mail' id="name-form" class="input" value="<?php echo $mail ?>" placeholder="Ex: Nome@email.com">
                    

                </div><br>
                <class ="botao">
                    <input type="hidden" name="id" value="<?php echo $id   ?>">
                    <input type="submit" name='update'  id="bkbtn" style="margin-bottom:20px"></input>
                    <a type="button" href="user_main.php" id="bkbtn"> Voltar </a>

                </div>
            </form>

        </div>

    </section>

</main>
</body>