<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form method="POST">


<div>
    <p>Which color do you like?</p>
  <input type="radio" name="colour" value="blue">Blue<br>
  <input type="radio" name="colour" value="red">Red<br>
  <input type="radio" name="colour" value="green">Green
  <input type="checkbox" name="acknowledged"> 
</div>

  <button>Send</button>


</form>

</body>
</html>