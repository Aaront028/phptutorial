<?php

include 'includes/database.php';

require 'includes/article.php';

$conn = getDB();

if (isset($_GET['id'])) {

$article = getArticle($conn, $_GET['id']);

} else {
  $article = null;
}

?>

<?php require 'includes/header.php'; ?>

    <?php if ($article === null): ?>
      <p>No articles found.</p>
    <?php else: ?>
  
      <article>
      <h2><a href="article.php"><?= htmlspecialchars($article['title']);  ?></a></h2>
      <p><?= htmlspecialchars($article['content']); ?></p>
      </article>

      <a href="edit-article.php?id=<?= $article['id']; ?>">Edit</a>
      <a href="delete-article.php?id=<?= $article['id']; ?>">Delete</a>

  <?php endif; ?>
  
  <?php require 'includes/footer.php'; ?>