<?php


//--------------------------------------------------example from tutorial ----------------------------------------------
// <?php

// $name = "Radio";
// $desc = "A device for listening to radio broadcasts";
// $price = 14.99;

// $sql = "INSERT INTO product (name, description, price)
//         VALUES (?,?,?)";  // 1. Write your SQL here

// $stmt = mysqli_prepare($conn, $sql);

// if ($stmt === false) {

//     echo mysqli_error($conn);

// } else {

//     $ret = mysqli_stmt_bind_param($stmt,"ssd", $name, $desc, $price );  // 2. Add the arguments here

//     if (mysqli_stmt_execute($stmt)) {

//         $id = mysqli_insert_id($conn);  // 3. Get the ID of the newly-inserted record here
//         echo "Inserted record with ID: $id";
//     } else {
//         echo myqli_stmt_error($stmt);
//     }
// }
//--------------------------------------------------

require 'includes/database.php';

$errors = [];
$title = '';
$content = '';
$published_at = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $title = $_POST['title'];
  $content = $_POST['content'];
  $published_at = $_POST['published_at'];

  if ($_POST['title'] == ''){
    $errors[] = 'Title is required';
  } 
  if ($_POST['content'] == ''){
    $errors[] = 'Content is required';
  } 

 if(empty($errors)) {

  $conn = getDB();

  // $sql = "INSERT INTO articles (title, content, published_at)
  //           VALUES ('" . mysqli_escape_string($_POST['title']) . "','"
  //                      . mysqli_escape_string($_POST['content']) . "','"
  //                      . mysqli_escape_string($_POST['published_at']) . "')";

  $sql = "INSERT INTO articles (title, content, published_at)
  VALUES (?,?,?)";

  // $results = mysqli_query($conn, $sql);
  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt === false) {
    echo mysqli_error($conn);
  } else {
    // $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    
    mysqli_stmt_bind_param($stmt, "sss", $_POST['title'], $_POST['content'], $_POST['published_at'] );
    
    if (mysqli_stmt_execute($stmt)) {
      $id = mysqli_insert_id($conn);
      echo "Inserted record with ID: $id";
  } else {
    echo mysqli_stmt_error($stmt);
  }

  }
  }
}

?>


<h2>New Article</h2>


<?php require 'includes/header.php'; ?>
<?php var_dump($errors); ?>
<?php if (! empty($errors)) :?>
  <ul>  
      <?php foreach ($errors as $error) :?>
        <li>
        <?= $error ?>
        </li>
      <?php endforeach; ?>
  </ul>
<?php endif; ?>
<form method="post">

  <div>
    <label for="title">Title</label>
    <input id="title" name="title" placeholder="Article Title" value="<?= $title; ?>">
  </div>

  <div>
    <label for="content">Content</label>
    <textarea name="content" id="content"  cols="30" rows="10" placeholder="Article Content"><?= $content; ?></textarea>
  </div>

  <div>
    <label for="published_at">Publication date and time</label>
    <input type="datetime-local" name="published_at" id="published_at" value="<?= $published_at; ?>">
  </div>

  <button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>
