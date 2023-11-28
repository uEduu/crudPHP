<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $conn=mysqli_connect('localhost','root','');
    if($conn->connect_error){
        die('Falha ao conectar'. $conn->connect_error);
    }
    
    $cpf=$_GET["cpf"];
    $sql= "select * from db_asforro.membro where cpf='$cpf'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc()
    ?>
    <h3>Cadastrar membro
    <a href="index.php"><input type="button" value="Menu Principal"></a>
    </h3>
    <div>
    <form action="form.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $row["nome"];?>"><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" value="<?php echo $row["cpf"];?>"><br>
        <label for="contato">Contato:</label><br>
        <input type="text" name="contato" id="contato" value="<?php echo $row["contato"];?>"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email" value="<?php echo $row["email"];?>"><br>
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row["data_nascimento"];?>"><br>
        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria" required>
            <option value="Amante do forró" <?php if($row["categoria"]=="Amante do forró"){echo "selected";} ?> >Amante do forró</option>
            <option value="Cantor" <?php if($row["categoria"]=="Cantor"){echo "selected";} ?>>Cantor</option>
            <option value="Instrumentista" <?php if($row["categoria"]=="Instrumentista"){echo "selected";} ?>>Instrumentista</option>
            <option value="Dançarino" <?php if($row["categoria"]=="Dançarino"){echo "selected";} ?>>Dançarino</option>
            <option value="Escritor" <?php if($row["categoria"]=="Escritor"){echo "selected";} ?>>Escritor</option>
            <option value="Compositor" <?php if($row["categoria"]=="Compositor"){echo "selected";} ?>>Compositor</option>
            <option value="Luthier" <?php if($row["categoria"]=="Luthier"){echo "selected";} ?>>Luthier</option>
        </select><br>
        <label for="instrumentos">Instrumentos:</label><br>
        <input type="text" name="instrumentos" id="instrumentos"value="<?php echo $row["instrumentos"];?>"><br>
        <label for="rg">RG:</label><br>
        <input type="text" name="rg" id="rg" value="<?php echo $row["rg"];?>"><br>
        <label for="nome_artista">Nome artistico:</label><br>
        <input type="text" name="nome_artista" id="nome_artista" value="<?php echo $row["nome_artista"];?>"><br>
        <label for="banda_trio">Banda ou Trio:</label><br>
        <input type="text" name="banda_trio" id="banda_trio" value="<?php echo $row["banda_trio"];?>"><br>
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" name="cnpj" id="cnpj" value="<?php echo $row["cnpj"];?>"><br>
        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco" value="<?php echo $row["endereco"];?>"><br>
        <input type="submit" name="edit" value="Enviar"></form>
</div>
</body>
</html>