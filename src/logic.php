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

    $stmt = $pdo->prepare("INSERT INTO data(title,content) VALUES(':title', ':content')");
    $stmt->execute([
      'title' => $title,
      'content' => $content
    ]);
    $fetch = $stmt->fetch();

    echo "Post created succefully";
    header("Location: index.php?info=added");
  }
?>
