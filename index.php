<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
</head>
<body>
    <a href="create.php"><input type="button" value="Adicionar membro"></a>
    <form action="readById.php" method="get">
        <label for="pesquisa" method="post">Pesquisar por cpf:</label>
        <input type="search" id="cpf" name="cpf">
        <input type="submit" value="OK" style="font-size:medium; padding: 3px; ">
    </form>
    <table class="tabela">
        <thead>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>Nome Artístico</th>
                <th>email</th>
                <th>categoria</th>
                <th>Ação</th>
            </tr>
        </thead>
        <?php
    $conn=mysqli_connect('localhost','root','');
    if($conn->connect_error){
        die('Falha ao conectar'. $conn->connect_error);
    }
    $sql= 'select * from db_asforro.membro';
    $result=$conn->query($sql);
    echo '<br> Qtd de membros: ';
    echo mysqli_num_rows($result);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row['cpf']){

                echo'<tr>';
                echo '<td>'.$row['cpf'].'</td>';
            echo '<td>'.$row['nome'].'</td>';
            echo '<td>'.$row['contato'].'</td>';
            echo '<td>'.$row['nome_artista'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.utf8_encode($row['categoria']).'</td>';
            echo '<td>'.'<a href=readById.php?cpf='.$row['cpf'].'><input type="button" value="Ver"></a>'.'</td>';
            echo '</tr>';
        }
        }
    }
    ?>
    </table>
</body>
</html>