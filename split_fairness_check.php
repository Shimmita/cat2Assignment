<?php
//function that returns true or false of splitting
function canSplitPieFairly($totalSlices, $recipients, $slicesPerPerson) {
    if ($totalSlices < $recipients * $slicesPerPerson) {
        return false;
    }
    if ($totalSlices % $recipients != 0) {
        return false;
    }
    return true;
}

$totalNumberOfSlices = 10;
$number_of_recipients = 4;
$slicesPerPerson = 2;

if (canSplitPieFairly($totalNumberOfSlices, $number_of_recipients, $slicesPerPerson)) {
    echo "The pie can be split fairly.";
} else {
    echo "The pie cannot be split fairly.";
}