<?php
  require_once "logic.php";

  $fetch = $pdo->prepare('SELECT * FROM articles');
  $fetch->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <?php if (isset($_REQUEST['info'])){ ?>
    <?php if ($_REQUEST['info'] == "added"){?>
      <div class="">
        Post as been added succesfully
      </div>
    <?php } ?>
  <?php } ?>

  <div class="container">
    <div class="">
      <a href="create.php">+ Create a new post +</a>
    </div>

    <?php foreach($fetch as $f) { ?>
      <h5><?= $f['title'] ?></h5>
      <p><?= $f['content'] ?></p>

      <form action="GET">
        <button><a href="delete.php?id=<?= $f['id']?>">supprimer</a></button>
      </form>
      <p><?php $f['coment_content'] ?></p>
      <form action="POST">
        <textarea name="comment_content" placeholder="Comment"></textarea>
        <button name="new_comment"></button>
      </form>
    <?php } ?>

  </div>
</body>
</html>
