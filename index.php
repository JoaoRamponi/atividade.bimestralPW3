<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade avaliativa</title>
</head>
<body>

  <h2>Cadastrar Evento</h2>
 <p><a href="api.php">Consultar Eventos</a></p>
  <form action="post.php" method="POST">
    
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo" required><br><br>

    <label for="data">Data:</label><br>
    <input type="date" id="data" name="data" required><br><br>

    <label for="local">Local:</label><br>
    <input type="text" id="local" name="local" required><br><br>

    <button type="submit">Enviar</button>

  </form>

</html>