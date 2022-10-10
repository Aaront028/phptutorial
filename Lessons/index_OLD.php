<?php

$name = "Dave";
$hour = 24;

$fruit = ['apple', 'banana', 'orange', 'mango'];
$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "password";

$conn = mysqli_connect($db_host,$db_user, $db_pass, $db_name);

if (mysqli_connect_err()) {
  echo mysqli_connect_err();
  exit;
}

echo "connected successfully";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index.php</title>
</head>
<body>
  <h1>This is the index.php page</h1>
  <!-- <p><?= $name; ?> This is another paragraph</p>

<?php if ($hour < 12) : ?>
   <h1>Good morning</h1>
<?php elseif ($hour < 18) : ?>
   <h1>Good afternoon</h1>
<?php elseif ($hour < 22) : ?>
   <h1>Good evening</h1>
<?php else: ?>
    <h1>good night</h1>
  
 <?php endif; ?>

<ol>
  <?php foreach ($fruit as $fruits) :?>
  <li><?= $fruits ?></li>
  <?php endforeach; ?>

</ol> -->



</body>
</html>