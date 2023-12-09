<?php
function stutter($word) {
    $firstTwoLetters = substr($word, 0, 2);
    return $firstTwoLetters . "... " . $firstTwoLetters . "... " . $word . "?";
}

$word = "fantastic";
$stutteredWord = stutter($word);

echo "Stuttered word: " . $stutteredWord;