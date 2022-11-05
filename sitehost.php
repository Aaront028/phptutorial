<?php
foreach (range(1, 100) as $i) {
	$result = "";

	if ($i % 3 == 0) {
		$result.="Site";
	}

  if ($i % 5 == 0) {
		$result.="Host";
  }
  
  if (!$result) {
    echo $i . "<br>";
  }

  else {
    echo $result . "<br>";
  }


}