<?php

//function that accepts array of characters and returns a compressed strng
function compress($chars) {
 
   $compressed_string = "";
  $current_char = $chars[0];
 $count = 1;
  for ($i = 1; $i < count($chars); $i++) {
    if ($chars[$i] == $current_char) {
      $count++;
    } else {
      if ($count == 1) {
        $compressed_string .= $current_char;
      } else {
        $compressed_string .= $current_char . $count;
      }
      $current_char = $chars[$i];
      $count = 1;
    }
  }
  if ($count == 1) {
    $compressed_string .= $current_char;
  } else {
    $compressed_string .= $current_char . $count;
  }
  
  // Add echo statement to output the compressed string
  echo "Compressed string: {$compressed_string}";
  
  return $compressed_string;
}

// Example usage
$chars = ["a", "a", "b", "b", "c", "c", "c"];
compress($chars);

