<?php 

$articles = array(  "First post",  "Another post", "Read this!" );


// var_dump(empty($articles));

// if (empty($articles)) {
//   echo "this is a true condition";
// } else {
//   echo "the condition is not empty";
// }

// var_dump(3==3);

// $age = 21;

// if ($age != 21) {
//   echo "Condition is true";
// } else {
//   echo "Condition is false";
// }

// $month = 1;

// while ($month <= 12) {
//   echo $month . ", ";
//   $month = $month + 1;
// }


// for ($i = 1; $i <= 10; $i++) {
//   echo $i . ", ";
// }

// $hour = 24;

// if ($hour < 12) {
//   echo "Good morning";
// } elseif ($hour < 18) {
//   echo "Good afternoon";
// } elseif ($hour < 22) {
//   echo "Good evening";
// } else {
//   echo "good night";
// }

// $day = "Tfda";

// switch ($day) {
//   case "Mon":
//     echo "Monday";
//     break;
//   case "Tue":
//     echo "Tuesday";
//     break;
//   case "Wed":
//     echo "Wednesday";
//     break;
//   case "Thurs":
//     echo "Thursday";
//     break;
//   case "Fri":
//     echo "Friday";
//     break;
//   case "Sat":
//     echo "Saturday";
//     break;
//   case "Sunday":
//     echo "Sunday";
//     break;
//   default:
//   echo "No information available for the day";
//   break;
// }

// $primes = [2, 3, 5, 7, 11, 13, 17, 19];
 
// for ($i = 1; $i <= 3; $i++) {
//     echo $primes[$i] . ", ";
// }

$array = [];

for ($i = 1; $i <= 10; $i++) {
    
    if ($i < 4) {
        $array[] = "a";
    } elseif ($i <= 7) {
        $array[] = "b";
        // code...
    } elseif ($i >= 8){
        $array[] = "c";
    }
    // Put your code here}
    var_dump($array);
  }
// var_dump($array);