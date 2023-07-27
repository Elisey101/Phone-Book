<?php 
  require_once 'config/connect.php';
  $contacts = mysqli_query($connect, "SELECT * FROM `contacts`");
  $contacts = mysqli_fetch_all($contacts);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/main.css?v=3">
    <script src="scripts/main.js" defer></script>
    <title>Phone book</title>
  </head>
  <body>
    <div id="contentWrapper">
      <div id="form" class="blockCosmetic">
        <div class="header">Добавить контакт</div>
        <form class="contactForm" action="handler/loader.php" method="post">
          <input class="inputForm" placeholder="Имя" type="form" name="name"/>
          <input class="inputForm" placeholder="Телефон" type="form" name="phone"/>
          <input class="sendBtn" placeholder="Добавить" type="submit" name=""/>
        </form>
      </div>
      <div id="contList" class="blockCosmetic">
        <div class="header">Список контактов</div>
        <div class="contactWrapper">
          <?php
            foreach($contacts as $item){
              ?>
                <div class="contact draggable" draggable="true">
                  <div class="name">
                    <span><?= $item[1] ?></span>
                    <div class="delete"><a href="handler/delete.php?id=<?= $item[0] ?>">×</a></div>
                  </div>
                  <div class="number"><?= $item[2] ?></div>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
