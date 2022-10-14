<?php
  require_once "logic.php";
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
      <a href="create.php">+ Create a new post</a>
    </div>

    <?php foreach($fetch as $f) { ?>
      <h5><?= $f['title'] ?></h5>
      <p><?= $f['content'] ?></p>

      <button name="delete_article">Supprimer l'article</button>
      <form action="GET">
        <textarea name="comment_content"cols="12" rows="4" placeholder="comment"></textarea>
        <button name="new_comment">Publier</button>
        <p><?= $f['comment_content'] ?></p>
        <button name="update_commente">Modifier</button>
        <button name="delete_comment" class="btn">Supprimer</button>
      </form>
    <?php } ?>

  </div>
</body>
</html>
