<?php

  //phpinfo();
  $fetch = array();

  try{
    $pdo= new PDO('mysql:host=db:3306;dbname=data', 'root', 'root');
  } catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  };

  $sql = "SELECT * FROM data";

  if(isset($_REQUEST["new_post"])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

<<<<<<< HEAD
    $stmt = $pdo->prepare("INSERT INTO articles(title,content) VALUES(':title', ':content')");
    $stmt->execute([
      'title' => $title,
      'content' => $content]);
=======
    $stmt = $pdo->prepare("INSERT INTO data(title,content) VALUES(':title', ':content')");
    $stmt->execute([
      'title' => $title,
      'content' => $content
    ]);
>>>>>>> f2229b20d57a76c509e02e97a3df78a2a88b8397
    $fetch = $stmt->fetch();

    echo "Post created succefully";
    header("Location: index.php?info=added");
  }

  if(isset($_REQUEST["new_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("INSERT INTO articles(comment_content) VALUES(':comment')");
    $stmt->execute([':comment' => $comment]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["delete_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("DELETE articles(comment_content) VALUES(':comment')");
    $stmt->execute([':comment' => $comment]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["update_comment"])){
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("UPDATE comment_content FROM article VALUES(':comment')");
    $stmt->execute([
      ':comment' => $comment
    ]);
    $fetch = $stmt->fetch();

    echo "Comment added succefully";
  }
  if(isset($_REQUEST["delete_article"])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];
    $comment = $_REQUEST['comment_content'];

    $stmt = $pdo->prepare("DELETE articles(title,content,comment) VALUES(':title', ':content', ':comment')");
    $stmt->execute([
      ':title' => $title,
      ':content' => $content,
      ':comment' => $comment,
    ]);
    $fetch = $stmt->fetch();

    echo "Post deleted succefully";
  }
?>
