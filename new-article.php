<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'includes/database.php';
  
  $sql = "INSERT INTO articles (title, content, published_at)
            VALUES ('" . $_POST['title'] . "','"
                       . $_POST['content'] . "','"
                       . $_POST['published_at'] . "')";
  
  $results = mysqli_query($conn, $sql);

  if ($results === false) {
    echo mysqli_error($conn);
  } else {
    // $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    $id = mysqli_insert_id($conn);
    echo "Inserted record with ID: $id";
  }
}

?>

<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<form method="post">

  <div>
    <label for="title">Title</label>
    <input id="title" name="title" placeholder="Article Title">
  </div>

  <div>
    <label for="content">Content</label>
    <textarea name="content" id="content"  cols="30" rows="10" placeholder="Article Content"></textarea>
  </div>

  <div>
    <label for="published_at">Publication date and time</label>
    <input type="datetime-local" name="published_at" id="published_at">
  </div>

  <button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>
