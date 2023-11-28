<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Cadastrar membro
    <a href="index.php"><input type="button" value="Menu Principal"></a>
    </h3>
    <div>
    <form action="form.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br>
        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" required><br>
        <label for="contato">Contato:</label><br>
        <input type="text" name="contato" id="contato"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento"><br>
        <label for="categoria">Categoria:</label><br>
        <select id="categoria" name="categoria">
            <option value="Amante do forro" selected>Amante do forró</option>
            <option value="Cantor">Cantor</option>
            <option value="Instrumentista">Instrumentista</option>
            <option value="Dancarino">Dançarino</option>
            <option value="Escritor">Escritor</option>
            <option value="Compositor">Compositor</option>
            <option value="Luthier">Luthier</option>
        </select><br>
        <label for="instrumentos">Instrumentos:</label><br>
        <input type="text" name="instrumentos" id="instrumentos"><br>
        <label for="rg">RG:</label><br>
        <input type="text" name="rg" id="rg"><br>
        <label for="nome_artista">Nome artistico:</label><br>
        <input type="text" name="nome_artista" id="nome_artista"><br>
        <label for="banda_trio">Banda ou Trio:</label><br>
        <input type="text" name="banda_trio" id="banda_trio"><br>
        <label for="cnpj">CNPJ:</label><br>
        <input type="text" name="cnpj" id="cnpj"><br>
        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" id="endereco"><br>
        <input type="submit" name="create" value="Enviar"></form>
</div>
</body>
</html>