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

  <!-- <input name="username">
  <input name="password" type="range"> -->

<!-- <select name="marque[]" multiple>
  <option value="bmw">BMW</option>
  <option value="fmc">Ford</option>
  <option value="saab">Saab</option>

</select> -->

<!-- <select name="country"> 
  <optgroup label="Europe">
      <option value="germany">Germany</option>
      <option value="france">France</option>
      <option value="uk" selected>United Kingdom</option>
  </optgroup>
  <optgroup label="America">
      <option value="brazil">brazil</option>
      <option value="canada">Canada</option>
      <option value="usa">United States</option>
  </optgroup>
</select> -->
<!-- <p>Which color do you like?</p> -->

<!-- <div>
  <input type="checkbox" name="red"> Red
</div>
<div>
  <input type="checkbox" name="green">Green
</div>
<div>
  <input type="checkbox" name="blue"> Blue
</div> -->

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