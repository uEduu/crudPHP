<?php
$conn= new mysqli('localhost','root','');
if(mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS db_asforro")){
    echo 'Banco de dados criado';
    $conn=mysqli_connect('localhost','root','','db_asforro');
    mysqli_query ($conn,"CREATE TABLE `membro` (
        `nome` varchar(50) NOT NULL,
        `cpf` varchar(11) NOT NULL,
        `contato` varchar(14) NOT NULL,
        `email` varchar(60) NOT NULL,
        `data_nascimento` date NOT NULL,
        `categoria` enum('Cantor','Instrumentista','Dançarino','Escritor','Compositor','Amante do forró','Luthier') NOT NULL,
        `instrumentos` varchar(150) NOT NULL,
        `rg` char(7) NOT NULL,
        `banda_trio` varchar(50) NOT NULL,
        `cnpj` char(14) NOT NULL,
        `nome_artista` varchar(50) NOT NULL,
        `endereco` varchar(150) NOT NULL,
        PRIMARY KEY(cpf)
      )");
}else{
    echo 'Erro';
}
?>