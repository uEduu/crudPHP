<?php
    $conn=mysqli_connect('localhost','root','','db_asforro');
    if($conn->connect_error){
        die('Falha ao conectar'. $conn->connect_error);
    }
    if(isset($_GET['cpf'])){
        $cpf=$_GET['cpf'];
            if(mysqli_query($conn,"DELETE FROM membro WHERE cpf=$cpf")){
                echo '<script type="text/javascript">
                alert("Registro deletado!");
                location.href="index.php";
                </script>';
            }
        }
?>