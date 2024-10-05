<?php  
error_reporting(0);
include_once"head.php"; 
include_once"cabecalho_form.php";
$conex = mysqli_connect("localhost","root","","contribuintes");
$sql="SELECT * FROM imovel ORDER BY InsMun DESC";

$result = $conex->query($sql); 

?>


<main id="main_form">
    <section class="form-container">
        <div class="container" id="form_body">
        <h1>Imoveis</h1>
           <a href="user_main.php"> <button type="submit" id="btn">Contribuintes</button></a>
           <a href="Form_imovel.php"> <button type="submit" id="btn">Adicionar Imovel </button></a>
            <table border="1">
            <tr id="frst">
                <td>Inscrição Municipal</td>
                <td>Logradouro </td>
                <td>Numero </td>
                <td>bairro</td>
                <td>Complemento</td>
                <td>Dono</td>
            </tr>
           <tbody>

           <?php
            while($data = mysqli_fetch_assoc($result)) {
                    echo "<tr> ";
                    echo "<td>".$data['InsMun']."</td>";

                     echo "<td>".$data['rua']."</td>";

                      echo "<td>".$data['numero']."</td>";

                       echo "<td>".$data['bairro']."</td>";

                        echo "<td>".$data['comp']."</td>";

                         echo "<td>".$data['dono']."</td>";

                         echo "<td>
                         <a class='btn btn-sm btn-primary'  href='delete_imovel.php?id=$data[InsMun]'>
                         
                         </td>";

                         echo "</tr>";
            }
           ?>
           </tbody>

            </table>
      
        
        </div>

    </section>

</main>
</body>