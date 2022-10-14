<?php

include 'includes/database.php';

$conn = getDB();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {



$sql = "SELECT *
  FROM articles
  WHERE id = " . $_GET['id'];

  
var_dump($sql);

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  // $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
  $article = mysqli_fetch_assoc($results);
}

} else {
  $article = null;
}

?>

<?php require 'includes/header.php'; ?>

    <?php if ($article === null): ?>
      <p>No articles found.</p>
    <?php else: ?>
  
      <article>
      <h2><a href="article.php"><?= $article['title'];  ?></a></h2>
      <p><?= $article['content']; ?></p>
      </article>

  <?php endif; ?>
  
  <?php require 'includes/footer.php'; ?>