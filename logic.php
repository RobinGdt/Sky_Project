<?php
  try{
    $pdo= new PDO('mysql:host=localhost:8888;dbname=madb', 'root', 'root');
  }
  catch(Exeption $e){
      die('Erreur : '.$e->getMessage())
  }

  $sql = "SELECT * FROM data";

  if(isset($_REQUEST["new_post"])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $stmt = $pdo->prepare("INSERT INTO data(title,content) VALUES('$title', '$content')");
    $stmt->execute();
    $fetch = $stmt->fetch();

    echo "Post created succefully";
    header("Location: index.php?info=added");
  }

  if(isset($_REQUEST["new_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("INSERT INTO data(comment_content) VALUES('$comment')");
    $stmt->execute();
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["delete_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("DELETE data(comment_content) VALUES('$comment')");
    $stmt->execute();
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["update_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("UPDATE data(comment_content) VALUES('$comment')");
    $stmt->execute();
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["delete_article"])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("DELETE data(title,content,comment) VALUES('$title', '$content', '$comment')");
    $stmt->execute();
    $fetch = $stmt->fetch();

    echo "Post deleted succefully";
  }
?>
