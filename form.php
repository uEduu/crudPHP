<?php
    $conn=mysqli_connect('localhost','root','','db_asforro');
    if($conn->connect_error){
        die('Falha ao conectar'. $conn->connect_error);
    }
    if(isset($_POST['create'])){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $nome_artista= $_POST["nome_artista"];
    $cnpj=$_POST["cnpj"];
    $instrumentos=$_POST ["instrumentos"];
    $rg=$_POST["rg"];
    $categoria=$_POST["categoria"];
    $email=$_POST["email"];
    $contato=$_POST["contato"];
    $endereco=$_POST["endereco"];
    $banda_trio=$_POST["banda_trio"];
    $data_nascimento=$_POST["data_nascimento"];
    mysqli_query($conn,"INSERT INTO `membro`(`nome`, `cpf`, `nome_artista`, `cnpj`, `instrumentos`, `rg`, `categoria`, `email`, `contato`,`endereco`,`banda_trio`,`data_nascimento`) VALUES('$nome', '$cpf', '$nome_artista', '$cnpj', '$instrumentos', '$rg', '$categoria', '$email', '$contato','$endereco','$banda_trio','$data_nascimento')");
    echo '<script type="text/javascript">
       alert("Cadastrado!");
       location.href="index.php";
    </script>';
    }
    if(isset($_POST['edit'])){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $nome_artista= $_POST["nome_artista"];
        $cnpj=$_POST["cnpj"];
        $instrumentos=$_POST ["instrumentos"];
        $rg=$_POST["rg"];
        $categoria=$_POST["categoria"];
        $email=$_POST["email"];
        $contato=$_POST["contato"];
        $endereco=$_POST["endereco"];
        $banda_trio=$_POST["banda_trio"];
        $data_nascimento=$_POST["data_nascimento"];
        mysqli_query($conn,"UPDATE `membro` SET `nome`='$nome', `cpf`='$cpf', `nome_artista`='$nome_artista', `cnpj`='$cnpj', `instrumentos`='$instrumentos', `rg`='$rg', `categoria`='$categoria', `email`='$email', `contato`='$contato',`endereco`='$endereco',`banda_trio`='$banda_trio',`data_nascimento`='$data_nascimento' WHERE `cpf`='$cpf'");
        echo '<script type="text/javascript">
        alert("Registro atualizado!");
        location.href="index.php";
        </script>';
    }
?>