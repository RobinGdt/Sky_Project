<?php

  require_once "logic.php";

  $id_comment = $_GET['id_comment'];

  if(isset($_POST["new_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("INSERT INTO articles(comment_content) VALUES(':comment')");
    $stmt->execute([':comment' => $comment]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_GET["delete_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("DELETE FROM articles(comment_content) WHERE id_comment = :id_comment ");
    $stmt->execute([':id_comment' => $id_comment]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["update_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("UPDATE articles FROM article VALUES(':comment')");
    $stmt->execute([
      ':comment' => $comment
    ]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }

?>
