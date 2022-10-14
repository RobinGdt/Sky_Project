<?php
  include "Sky_Project/logic.php";
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
  <?php if (isset($_REQUEST['info'])){?>
    <?php if (isset($_REQUEST['info'] == "added")){?>
      <div class="">
        Post as been added succesfully
      </div>
    <?php}?>
  <?php}?>

  <div class="container">
    <div class="">
      <a href="create.php">+ Create a new post</a>
    </div>

    <?php foreach($fetch as $f) {?>
      <h5><?= $f['title'] ?></h5>
      <p><?= $f['content'] ?></p>
      <button><a href="">Read more</a></button>
    <?php}?>

  </div>
</body>
</html>
