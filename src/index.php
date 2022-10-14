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
      <div class="card p-3 my-3">
        <h1 class=""><?= $f['title'] ?></h1>
        <div class="card-body">
          <h3><?= $f['content'] ?></h3>

          <button class="btn btn-danger" name="delete_article">Supprimer l'article</button>
          <div class="mt-3 card-header">
            <form class="my-5" action="GET">
              <textarea name="comment_content"cols="12" rows="4" placeholder="comment"></textarea>
              <button class="btn btn-success" name="new_comment">Publier</button>
              <p><?= $f['comment_content'] ?></p>
              <button class="btn btn-primary" name="update_commente">Modifier</button>
              <button class="btn btn-danger" name="delete_comment" class="btn"><a href="delete.php?id=<?= $f['id']?>">supprimer</a></button>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</body>
</html>
