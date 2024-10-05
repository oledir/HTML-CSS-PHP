<?php

    $conex = mysqli_connect("localhost","root","","contribuintes");
                        if(!empty($_GET['id'])){

                            $id = $_GET['id'];
                            $sqlSelect = "SELECT * FROM pessoa WHERE id=$id";
                            $result = mysqli_query($conex, $sqlSelect);

                            if($result->num_rows > 0){   
                                $sqlDelete= "DELETE FROM pessoa WHERE id=$id";
                                  $resultDelete = mysqli_query($conex, $sqlDelete);

                                  header("Location:user_main.php");

                        }
                        
                        else{
                            header("Location:user_main.php");
                        }
                        header("Location:user_main.php");
                    }
                        
?>