<?php

require_once 'logic.php';

if(isset($_POST["new_post"])){
  $title = $_REQUEST['title'];
  $content = $_REQUEST['content'];

  $stmt = $pdo->prepare("INSERT INTO articles(title,content) VALUES(:title, :content)");
  $stmt->execute([
    'title' => $title,
    'content' => $content
  ]);

<<<<<<< HEAD

  $fetch = $stmt->fetch();
  header('Location: index.php?info=aded');
  exit();
=======
  header("Location: index.php");
>>>>>>> 29f1d5cc2ea5c0612cd03694746f0da40db9f2be
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form method="POST">
      <input type="text" name="title" placeholder="Titre">
      <textarea name="content" id="" cols="30" rows="10"></textarea>
      <button name="new_post" class="btn btn-dark">Publier</button>
    </form>
  </div>

</body>
</html>
