<?php
//incluir arquivo config.php
include('config.php');
//listar a tabela noticias
$data = $conn->query('SELECT * FROM noticias');
//cadastrar
if (isset($_POST['acao']) && $_POST['acao']==='cadastrar'){
  $title = $_POST["title"];
  $calendario = $_POST["date"];
  $img = $_POST["img"];
  $descricao = $_POST["description"];

  $stmt = $conn->prepare('INSERT INTO noticias (titulo, data, imagem, texto) VALUES(:titulo, :data, :imagem, :texto)');
  $stmt->execute(array(
    ':titulo' => $title,
    ':data' => $calendario,
    ':imagem' => $img,
    ':texto' => $descricao,
  ));
  echo "<script>alert('Cadastrado com Sucesso')</script>";
}
//apagar
if (isset($_GET['acao']) && $_GET['acao']==='apagar'){
  $id = $_GET["id"];
  $stmt = $conn->prepare('DELETE FROM noticias WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="table.css" />
  <link rel="stylesheet" href="test.css" />
  <link rel="icon" href="./assets/favicon-32x32.png" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <title>Tabela</title>
</head>

<body>
  <main class="main-container">
    <nav>
      <h1>Formulário de inserção de notícias.</h1>
    </nav>

    <form action="admin.php" method="POST" class="form">
      <div>
        <label for="$titleInput">Título da notícia:</label>
        <input type="text" name="title" id="$titleInput" placeholder="Digite o título." required/>
      </div>
      <div>
        <label for="$dateInput">Data da notícia:</label>
        <input type="date" name="date" id="$dateInput" required />
      </div>
      <div>
        <label for="$urlInput">Imagem da notícia (url):</label>
        <input type="text" name="img" id="$urlInput" placeholder="Digite o link da imagem" required />
      </div>
      <textarea name="description" id="$newsDescription" cols="30" rows="10" placeholder="Digite a descrição da notícia" required></textarea>
      <div>
        <input type="hidden" name="acao" value="cadastrar">
        <button type="submit">Enviar</button>
      </div>
    </form>
  </main>
  <nav>
    <h1>Dashboard de notícias</h1>
    <p>Edite, exclua e verifique as suas notícias criadas.</p>
  </nav>
  <div class="table">
    <table border="1">
      <caption>
        Notícias
      </caption>

      <tr>
        <th>Título</th>
        <th>Data</th>
      </tr>
      <?php
      foreach ($data as $linha) {
      ?>
        <tr>
          <td>
            <?php echo $linha['titulo']; ?>
          </td>
          <td><?php echo $linha['data']; ?></td>
          <td><a href="admin.php?acao=apagar&id=<?php echo $linha['id'];?>" class="deleteButton">Excluir</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>