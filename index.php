<?php
include('config.php');
$data = $conn->query('SELECT * FROM noticias');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/favicon-32x32.png">
    <link rel="stylesheet" href="style.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar">
      <img src="./assets/logo.png" alt="logo">
      <ul>
        <li>Início</li>
        <li>Sobre</li>
        <li>Notícias</li>
        <li>Contato</li>
      </ul>
    </nav>
    <hr />

    <h1>Notícias</h1>
    <main class="container">
      <?php
      foreach($data as $linha){
      ?>
      <div class="box">
        <img src="<?php echo $linha['imagem'];?>" alt="" style="width:400px; heigth:300px;"/>
        <small><?php echo $linha['data'];?></small>
        <h3><?php echo $linha['titulo'];?></h3>
        <p><?php echo $linha['texto'];?>
        </p>
      </div>
      <?php
      }
      ?>
    </main>
    <hr />
    <footer class="footer">
      <p><strong>Autor:</strong> Ellias Almeida</p>
    </footer>
  </body>
</html>
