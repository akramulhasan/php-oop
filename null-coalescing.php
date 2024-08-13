<?php
//$favColor = 'Red';
//$primaryColor = 'Red';
//$secondaryColor = 'Green';


// if ($favColor == 'red') {
//     echo $favColor;
// } else {
//     echo 'Blue';
// }


// if (isset($favColor)) {
//     echo $favColor;
// } else {
//     echo 'Blue';
// }

//echo isset($favColor) ? $favColor : 'Blue';

//echo isset($primaryColor) ? $primaryColor : (isset($secondaryColor) ? $secondaryColor : 'Blue');

//echo $favColor ?? 'Blue';

echo $primaryColor ?? $secondaryColor ?? 'Blue';
