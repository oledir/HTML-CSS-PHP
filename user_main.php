<?php   
error_reporting(0);
include_once"head.php"; 
include_once"cabecalho_form.php";
error_reporting(0);
$conex = mysqli_connect("localhost","root","","contribuintes");
$sql="SELECT * FROM pessoa ORDER BY id DESC";
$result = $conex->query($sql); 
?>
<body id="body_form">

<main id="main_form">
    <section class="form-container">
        <div class="container" id="form_body">
            <h1>Contribuintes</h1>
            <a href="form_user.php">  <button id="btn">Adicionar Contribuintes </button></a>
            <a href="main_home.php"><button type="submit" id="btn">imoveis </button></a>
            <table broder="1">
            <tr id="frst">
                <td>   id  </td>
                <td>Contribuinte </td>
                <td>Data de Nascimento </td>
                <td>Sexo </td>
                <td>CPF </td>
                <td>Telefone </td>
                <td>Email </td>
                <td> </td>
                <td> </td>

                <tbody>

<?php
 while($data = mysqli_fetch_assoc($result)) {
         echo "<tr> ";
         echo "<td>".$data['id']."</td>";

          echo "<td>".$data['Nome']."</td>";

           echo "<td>".$data['date']."</td>";

            echo "<td>".$data['sexo']."</td>";

            echo "<td>".$data['CPF']."</td>";


             echo "<td>".$data['telefone']."</td>";

              echo "<td>".$data['email']."</td>";
              echo "<td>

                    <a class='btn btn-sm btn-primary' href='edit_user.php?id=$data[id]'>
            
                        </td>";
              echo "<td>
              <a class='btn btn-sm btn-primary'  href='delete.php?id=$data[id]'
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