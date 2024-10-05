<?php

    $conex = mysqli_connect("localhost","root","","contribuintes");
                        if(!empty($_GET['InsMun'])){

                            $id = $_GET['InsMun'];
                            $sqlSelect = "SELECT * FROM pessoa WHERE InsMun=$id";
                            $result = mysqli_query($conex, $sqlSelect);

                            if($result->num_rows > 0){   
                                $sqlDelete= "DELETE FROM imovel WHERE InsMun=$id";
                                  $resultDelete = mysqli_query($conex, $sqlDelete);

                                  header("Location:index.php");

                        }
                        
                        else{
                            header("Location:index.php");
                        }
                    }
                        
?>