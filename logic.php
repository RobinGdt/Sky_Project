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

    $stmt = $pdo->prepare("INSERT INTO data(title,content) VALUES('$title', '$content)");
    $stmt->execute();

    echo "Post created succefully";
    header("Location: index.php?info=added");
  }
?>
