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
   

  
    

    $dono = $_POST['dono'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $comp = $_POST['comp'];

 if($rua == null){
   
    }

else{
    $sql= "INSERT INTO imovel(dono, rua, numero, bairro, comp) values ('$dono','$rua','$numero','$bairro','$comp')";
    $result = mysqli_query($conex,$sql);
    }

    
?>


<body id="body_form">





<main id="main_form">
    <section class="form-container">
        <div class="container">
            <form   method="POST" id="form_body" >
                <h1> Adicionar Imovel</h1><br>
            
                <div class="input-solo">
                    <label for="name-form">Proprietario</label><br>
                    <select name='dono' required>
                       <?php 
                       $sle="SELECT * FROM pessoa ";
                       $res = $conex->query($sle); 
                       while($data = mysqli_fetch_assoc($res)) {
                        echo "<option>$data[Nome]</option>";
                        
                      
                       
                       }
                       
                       ?>
                    </select>
                    

                </div>
             
                <div class="input-solo">
                    <label for="name-form">Logradouro</label>
                    <input type="text"  name='rua' class="input" required>
                 

                </div>
                <div class="input-solo">
                    <label for="name-form">Numero</label>
                    <input type="number" name='numero' class="input" required>
                

                    </div>
                <div class="input-solo">
                    <label for="name-form"> bairro </label>
                    <input type="text" name='bairro' id="name-form" class="input" required>
                    

                </div>
                <div class="input-solo">
                    <label for="name-form">Complemento </label>
                    <input type="text" name=' comp' id="name-form" class="input" required >
                    

                </div><br>
                <class="botao">
              
                    <input type="submit" id="bkbtn" style="margin-bottom:20px">  </input> 
                    <a type="button" href="main_home.php" id="bkbtn"> Voltar </a>
             
                </class>
                </div>
            </form>

        </div>

    </section>

</main>